<?php
 require  ACCESS;

$models = ROOT.DS.'model'.DS;
require $models.'StaffModel.php';
require $models.'ServiceModel.php';
require $models.'UserModel.php';
require $models.'SpecialityModel.php';
require $models.'RoleModel.php';

require_once ROOT.DS.'Utils'.DS.'Validator.php';



class StaffController extends  Controller
{
    private $staffManager;
    private $specialityManager;
    private $roleManager;

    public function __construct()
    {
        $this->staffManager = new StaffModel();
        $this->specialityManager = new SpecialityModel();
        $this->roleManager = new RoleModel();
    }


    public function index()
    {
        $this->render('home', []);
    }

    public function new () {
        if(isset($_POST['role_id'])){
            $this->staffManager->create($_POST);
          }
        $roles = $this->roleManager->findAll();
        $specialities = $this->specialityManager->findSpecialityService($_SESSION["service"]);

        $this->render('staff/new',["specialities" => $specialities, 'roles'=>$roles]);

    }
}
