<?php
 require  ACCESS;
 $model = ROOT . DS . 'model' . DS ;
require ROOT . DS . 'Utils' . DS . 'Calendar.php';
require  $model.'StaffModel.php';
require $model.'SpecialityModel.php';
require $model.'AppointModel.php';

class RvController extends Controller
{
    private $staffManager;
    public function __construct()
    {
        $this->staffManager = new StaffModel();
    }

    public function new()
    {
        if(!empty($_POST)){
           $appointManager = new AppointModel();
           $appointManager->create($_POST);
           return false;

        }

        $specialityManager = new SpecialityModel();
        $specialities = $specialityManager->findSpecialityService($_SESSION['service']);

        $calendar = new Calendar();
        $this->render('rv/new', ['calendar' => $calendar->show(), 'specialities' => $specialities]);
    }

    public function list()
    {
        $this->render('rv/list');
    }

    public function doctorsSpeciality()
    {
      print_r(json_encode($this->staffManager->findDoctorSpeciality($_GET['speciality'])));
      
    }

    public function getDoctorDetails(){
        if($_GET['id']){
        print_r(json_encode($this->staffManager->findBy('id',(int) $_GET['id'])));

        }
        
    }
}
