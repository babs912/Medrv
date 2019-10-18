<?php
 require  ACCESS;
class HelpController extends  Controller
{
    public function index()
    {
        $this->render('help', []);
    }
}
