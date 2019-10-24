<?php
$models = ROOT.DS.'model'.DS;
require $models.'StaffModel.php';
require $models.'ServiceModel.php';
require $models.'UserModel.php';



class SecurityController  extends Controller
{
   private $staffManager ;
   private $serviceManager;
   private $userManager;
   public $layout = "base";
   
   

    public function __construct(){
      parent::__construct() ;

       $this->staffManager = new  StaffModel();
       $this->serviceManager = new  ServiceModel();
       $this->userManager = new  UserModel();


    }

    public function register () {
        $this->render('security/register',[]);
    }

    public function login(){

        if((isset($_POST['username']) && isset($_POST['password']) && isset($_POST['service'])) && !empty($_POST['username'] && $_POST['password'] && $_POST['service'])){

            $user = $this->userManager->login($_POST['username'], $_POST['password']);

            if(count($user) <= 0 ){
                header('Location:/login');  
             }else{
                $_SESSION['user'] = json_encode($this->staffManager->findBy('id',$user[0]->staff_id));
                $_SESSION['authenticated'] = true;
                $_SESSION['service'] = $_POST['service'];
                header('Location:/home');      
             }
         
        }

        $this->render('security/login',[
            'services' => $this->serviceManager->findAll()
        ]);
    }

    public function logout()
    {
       $_SESSION['authenticated'] = false;
       header('Location:/login');
    }
    
}
