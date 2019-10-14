<?php
require ROOT . DS . 'Utils' . DS . 'Calendar.php';
require ROOT . DS . 'model' . DS . 'StaffModel.php';
require ROOT . DS . 'model' . DS . 'SpecialityModel.php';


class RvController extends Controller
{
    private $staffManager;
    public function __construct()
    {
        $this->staffManager = new StaffModel();
    }

    public function new()
    {

        $specialityManager = new SpecialityModel();
        $specialities = $specialityManager->findSpecialityService();

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
