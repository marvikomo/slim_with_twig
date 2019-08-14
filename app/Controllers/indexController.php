<?php
// require_once('../core/controller.php');
class indexController extends controller
{
   public function index()
   {
   	 $this->view('index');


    $this->view->render();
   	 //var_dump($this);
   }
}