<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Routing\Router;
/**
 * Blog Controller
 *
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogController extends AppController
{
    public $base_url,$blog;

    public function initialize():void
    {
        parent::initialize();
        $this->base_url = Router::url('/',true);
        $this->set('baseurl',$this->base_url);
        $this->loadComponent('Auth');
        $this->blog = $this->loadModel('Category');
        $this->viewBuilder()->setLayout('adminLayout');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $blogs = $this->paginate($this->Blog,['contain' => "Category"]);
        $this->set(compact('blogs'));
        
    }

    /**
     * View method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blog = $this->Blog->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('blog'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blog = $this->Blog->newEmptyEntity();
        $categories = $this->Category->find()->all();

        if ($this->request->is('post')) {
            $blog = $this->Blog->patchEntity($blog, $this->request->getData());


            if (!$blog->getErrors) {
               
              $image  = $this->request->getData('image');
              $name   = $image->getClientFileName();
               if ($name) {
                 if (file_exists($this->base_url."/webroot/image/".$blog->image)) {
                   unlink(file_exists($this->base_url."/webroot/image/".$blog->image));
                 }
                $targetPath = WWW_ROOT.'image'.DS.$name;
                $image->moveTo($targetPath);
               }else{
                 $name = $blog->image;
               }
            }

            $blog->title        = $this->request->getData('title');
            $blog->description  = $this->request->getData('description');
            $blog->category_id  = $this->request->getData('category_id');
            $blog->image        = $name;

            if ($this->Blog->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog could not be saved. Please, try again.'));
        }
        $this->set(compact('blog','categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blog = $this->Blog->get($id, [
            'contain' => ['Category'],
        ]);
        $categories = $this->Category->find()->all();


        if ($this->request->is(['patch', 'post', 'put'])) {
            $blog = $this->Blog->patchEntity($blog, $this->request->getData());

            if (!$blog->getErrors) {
               
              $image  = $this->request->getData('image');
              $name   = $image->getClientFileName();
               if ($name) {
                 if (file_exists($this->base_url."/webroot/image/".$blog->image)) {
                   unlink(file_exists($this->base_url."/webroot/image/".$blog->image));
                 }
                $targetPath = WWW_ROOT.'image'.DS.$name;
                $image->moveTo($targetPath);
               }else{
                $name = $blog->image;
               }
            }

            $blog->title        = $this->request->getData('title');
            $blog->description  = $this->request->getData('description');
            $blog->category_id  = $this->request->getData('category_id');
            $blog->image        = $name;

            if ($this->Blog->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog could not be saved. Please, try again.'));
        }
        $this->set(compact('blog','categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete','get']);
        $blog = $this->Blog->get($id);
        if ($this->Blog->delete($blog)) {
            $this->Flash->success(__('The blog has been deleted.'));
        } else {
            $this->Flash->error(__('The blog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
