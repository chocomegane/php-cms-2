<?php



class TestController extends ControllerBase
{

    public function indexAction()
    {
                 $this->flash->success("Your information were stored correctly!");
    }
    
    public function showAction(){
        // Pick 'views-dir/products/search' as view to render
//         $this->flash->success("Your information were stored correctly!");
//         return $this->response->Forward('test/index'); 
//         $this->dispatcher->forward(array('controller' => 'test', 'action' => 'index'));
         
//         echo $this->view->render('test/show.phtml');

header( "show.phtml" ) ;

 

    }

    
}

