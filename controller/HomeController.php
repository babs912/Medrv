<?php
 require  ACCESS;
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
