<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;

/**
 * Report Controller
 *
 * @method \App\Model\Entity\Report[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportController extends AppController
{
    public $base_url,$categories,$blogs,$contact;

    public function initialize(): void
    {
        parent::initialize();
        $this->base_url = Router::url('/',true);
        $this->set('baseurl',$this->base_url);
        // $this->loadComponent('Auth');
        $this->viewBuilder()->setLayout('webLayout');
        $this->categories = TableRegistry::getTableLocator()->get('Category');
        $this->contact = TableRegistry::getTableLocator()->get('Contact');
        $this->blogs = TableRegistry::getTableLocator()->get('Blog');
        // $this->viewBuilder()->setLayout('adminLayout');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $categories = $this->categories->find();
        $blogs      = $this->blogs->find('all',['contain' =>'Category']);
        $this->set(compact('categories','blogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Report id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blog = $this->blogs->get($id,['contain' =>'Category']);
        $categories = $this->categories->find();
        $this->set(compact('blog','categories'));
    }


    public function aboutMe()
    {
        $categories = $this->categories->find();
        $this->set(compact('categories'));
    }

    public function contactUs()
    {
        $contact =$this->contact->newEmptyEntity();
        
        if ($this->request->is('post')) {
           $contact = $this->contact->patchEntity($contact, $this->request->getData());
            if ($this->contact->save($contact)) {
                $this->Flash->success(__('The Contact Details has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Contact details could not be saved. Please, try again.'));
        }
    }

    public function blogCategory($id = null)
    {
        $singleCategory = $this->categories->get($id);
        $categories     = $this->categories->find();
        $blogs          = $this->blogs->find('all',['contain' => 'Category'])->where(['category_id' =>$id]);
        $this->set(compact('categories','blogs','singleCategory'));
    }

    
}
