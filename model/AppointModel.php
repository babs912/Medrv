<?php

class AppointModel extends Model
{
    var $model = 'Appoint';
    public function __construct()
    {
        parent::__construct($this->model);

    }

   public function create ($data){

       
        $firstName = !empty($data['first_name'])? $data['first_name']: null;
        $lastName = !empty($data['last_name'])? $data['last_name']: null;
        $gender = !empty($data['gender'])? $data['gender']: null;
        $age = !empty($data['age'])? $data['age']: null;
        $email = !empty($data['email'])? $data['email']: null;
        $phone = !empty($data['phone'])? $data['phone']: null;
        $address = !empty($data['address'])? $data['address']: null;
        $plannedAt = $data['planned_at'];
        $doctorId = $data['doctor_id'];

       $this->validator->valid('email',$email,"L'email",true);
       $this->validator->valid('alpha',$firstName,"Le prenom",true);
       $this->validator->valid('alpha',$lastName,"Le nom",true);
       $this->validator->valid('int',$age,"L'age");
       $this->validator->valid('date',$plannedAt,"La date",true);
       $this->validator->valid('int',$phone,"Le Telephone",true,9,9);

       if($this->validator->getErrors() == NULL){
         
       $sql = "INSERT INTO Patient
       SET first_name=:first_name, 
       last_name=:last_name, 
       gender=:gender, 
       age=:age, 
       email=:email, 
       phone=:phone, 
       address=:address";

       $q = $this->con->prepare($sql);

       $q->bindValue(':first_name',$firstName);
       $q->bindValue(':last_name',$lastName);
       $q->bindValue(':gender',$gender);
       $q->bindValue(':age',$age);
       $q->bindValue(':email',$email);
       $q->bindValue(':phone',$phone);
       $q->bindValue(':address',$address);

       $q->execute();

       $idPatient = $this->con->lastInsertId();
       
      $q = $this->con->prepare("INSERT INTO Appoint SET planned_at=:planned_at, doctor_id=:doctor_id, patient_id=:patient_id");

       $q->bindValue(':planned_at',$plannedAt);
       $q->bindValue(':doctor_id',$doctorId);
       $q->bindValue(':patient_id',$idPatient);

       if($q->execute()){
           return true;
       }
       }else {
         return $this->validator->displayErrors();

       }



   }

  public function getNumberPatient($date,$id){
      $sql = "SELECT COUNT(ap.patient_id) FROM `Appoint` ap WHERE planned_at = '".$date."' AND doctor_id = ".$id;
     $q = $this->con->prepare($sql);
     $q->execute();

     return $q->fetchColumn();
      
  }

 public function isAvailableTime($date, $time)
 {
     $sql  = "SELECT COUNT(ap.start_time) FROM Appoint ap WHERE ap.planned_at ='".$date."' AND ap.start_time ='".$time."'";
     $q = $this->con->prepare($sql);

     $q->execute();

     return $q->fetchColumn();

 }
}
