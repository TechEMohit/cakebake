<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Routing\Router;

/**
 * Home Controller
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    public $base_url;

    public function initialize(): void
    {
        parent::initialize();
        $this->base_url = Router::url('/',true);
        $this->set('baseurl',$this->base_url);
        $this->loadComponent('Auth');
        $this->viewBuilder()->setLayout('adminLayout');
    }

    public function home()
    {


    }

    public function index()
    {

    }
   
  
}
