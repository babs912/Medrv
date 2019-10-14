<?php
require ROOT . DS . 'config' . DS . 'Database.php';
class Model
{
    public $con;
    private $model = '';

    public function __construct($model)
    {
        $db = new Database();
        $this->con = $db->_connect();
        $this->model = $model;
    }
    public function find(?string $type = null, array $options = null)
    { 
        switch ($type) {
            case 'all':
              return  self::all($options);
                break;
            
            default:
                # code...
                break;
        }
    }

    public function all(?array $options = null){
        $sql = "SELECT * FROM ".$this->model." ";
        if(!empty($options['cond'])){
            $sql.=" WHERE ";
            $cond = $options['cond'];
            foreach ($cond as $k => $v) {
                $sql.= $k. "='". $v. "' AND ";
            }
        }

       $q = $this->con->prepare(trim($sql,"AND "));

        if($q->execute()){
            $data = [];
            while ($row = $q->fetch(PDO::FETCH_OBJ)) {
                $data[] = $row;
            }
            return $data;
        }
        
    }

   public function findBy(string $property, $value){
     $sql = "SELECT * FROM ".$this->model." WHERE  ".$property;
    if(is_int($value)){
       $sql.= "=".$value;
    }else{
       $sql.= "='".$value."'";

    }

       $q = $this->con->prepare($sql);

       $q->execute();

       return $q->fetchAll(PDO::FETCH_ASSOC);


    }

    public function findSpecialityService($service)
    {
       
        $sql = "SELECT * FROM " . $this->model . " WHERE service_id IN (SELECT id FROM Service WHERE name='" . $service . "')";
        $q = $this->con->prepare($sql);
        if ($q->execute()) {
            $data = [];

            while ($row = $q->fetch(PDO::FETCH_OBJ)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function findDoctorSpeciality($speciality)
    {
        $sql = "SELECT s.id, s.name FROM Staff s
        INNER JOIN Speciality_Staff
        ON (Speciality_Staff.staff_id = s.id)
        INNER JOIN Speciality 
        ON (Speciality_Staff.speciality_id = Speciality.id)
        WHERE Speciality.name = '" . $speciality . "'";
        $q = $this->con->prepare($sql);

        if ($q->execute()) {
            $data = [];
            while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }

            return $data;
        } else {
            echo "introuvable";
        }
    }
}
