<?php
 require  ACCESS;
 $model = ROOT . DS . 'model' . DS ;
require ROOT . DS . 'Utils' . DS . 'Calendar.php';
require  $model.'StaffModel.php';
require $model.'SpecialityModel.php';
require $model.'AppointModel.php';
require $model.'PatientModel.php';
require ROOT.DS."Utils".DS."Planning.php";


class RvController extends Controller
{
    public $staffManager;
    private $appointManager;
    private $patientManager ;
    public $layout = "base";
     
    public function __construct()
    {
        $this->staffManager = new StaffModel();
        $this->appointManager = new AppointModel();
        $this->patientManager = new PatientModel();
        parent::__construct($this->layout);


    }

    public function new()
    {
        
        if(!empty($_POST)){

            if(isset($_POST['appoint'])){
              print_r($this->patientManager->add($_POST));
            }
           return false;
        }

        $specialityManager = new SpecialityModel();

        $specialities = $specialityManager->findSpecialityService($_SESSION['service']);
        $patientManager = new PatientModel();
        $rvs = $patientManager->getAll();
        
        
        $calendar = new Calendar();
        $p = new Planning(8,30,17,30);

        $this->render('rv/new', 
        [
            'calendar' => $calendar->show(), 
            'specialities' => $specialities,
            'planning' => $p->getPlanning(),
            'rvs' => $rvs,
            'patients' => $patientManager->findAll(),
            'errors'=> ['email'=>"email n'est pas valide"]
        ]);
    }

    public function list()
    {
        $patientManager = new PatientModel();
        $rvs = $patientManager->getAll();
        $this->render('rv/list',['rvs'=>$rvs]);
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

    public function getNumberPatient(){
        if(isset($_GET['id']) && isset($_GET['date']) ){
            $date = $_GET['date'];
            $id = (int) $_GET['id'];
           print_r($this->appointManager->getNumberPatient($date, $id));
    
            }  
    }

    public function isAvailableTime()
    {
        if($this->appointManager->isAvailableTime($_GET['date'],$_GET['time'],$_GET['doctorId'])  == 1)
        {
           echo 1;
        }else{
            echo 0;
        }

    }

    public function patientById()
    {
       print_r(json_encode($this->patientManager->patientById($_GET['patientId'])));
    }

    public function searchWithPhone()
    {
        print_r(json_encode($this->patientManager->searchWithPhone($_GET['phone'])));
    }
}
