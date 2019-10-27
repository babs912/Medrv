<?php
 require  ACCESS;
 require ROOT.DS.'form'.DS.'PatientForm.php';
class HomeController extends  Controller
{
   public $layout = "base";
    public function __construct()
    {
       parent::__construct($this->layout) ;
    }
    
    public function index()
    {
        

        $this->render('home', []);
    }
}
