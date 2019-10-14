<?php
require ROOT.DS.'model'.DS.'StaffModel.php';
require ROOT.DS.'model'.DS.'ServiceModel.php';
require ROOT.DS.'model'.DS.'UserModel.php';



class SecurityController  extends Controller
{
   private $staffManager ;
   private $serviceManager;
   private $userManager;


    public function __construct(){
       $this->staffManager = new  StaffModel();
       $this->serviceManager = new  ServiceModel();
       $this->userManager = new  UserModel();


    }

    public function register () {
        $this->render('security/register',[]);
    }

    public function login(){

        if((isset($_POST['username']) && isset($_POST['password']) && isset($_POST['service'])) && !empty($_POST['username'] && $_POST['password'] && $_POST['service'])){

            if(!$this->userManager->login($_POST['username'], $_POST['password'])){
                header('Location:/login');  
             }else{
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['service'] = $_POST['service'];
                header('Location:/home');      
             }
         
        }

        $this->render('security/login',[
            'services' => $this->serviceManager->find('all',[])
        ]);
    }

    public function logout(){

    }
    
}
