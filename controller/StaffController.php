<?php
 require  ACCESS;

$models = ROOT.DS.'model'.DS;
require $models.'StaffModel.php';
require $models.'ServiceModel.php';
require $models.'UserModel.php';
require_once ROOT.DS.'Utils'.DS.'Validator.php';

/*
    $val = new Validation();
    $val->name('email')->value($email)->pattern('email')->required();
    $val->name('username')->value($username)->pattern('alpha')->required();
    $val->name('password')->value($password)->customPattern('[A-Za-z0-9-.;_!#@]{5,15}')->required();
    $val->name('age')->value($age)->min(18)->max(40);
    
    if($val->isSuccess()){
    	echo "Validation ok!";
    }else{
    	echo "Validation error!";
        var_dump($val->getErrors());
    }

*/

class StaffController extends  Controller
{
    private $staffManager;
    private $specialityManager;
    private $roleManager;


    public function index()
    {
        $this->render('home', []);
    }

    public function new () {

        var_dump($_POST);

        $this->render('staff/new',[]);

    }
}
