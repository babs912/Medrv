<?php
 require  ACCESS;
class HelpController extends  Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->render('help', []);
    }
}
