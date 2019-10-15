<?php
 require  ACCESS;
class HomeController extends  Controller
{
    public function index()
    {
        $this->render('home', []);
    }
}
