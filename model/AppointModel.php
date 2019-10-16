<?php

class AppointModel extends Model
{
    var $model = 'Appoint';
    public function __construct()
    {
        parent::__construct($this->model);

    }

   public function create ($data){

       
        $firstName = $data['first_name'];
        $lastName = $data['last_name'];
        $gender = $data['gender'];
        $age = $data['age'];
        $email = $data['email'];
        $phone = $data['phone'];
        $address = $data['address'];
        $plannedAt = $data['planned_at'];
        $doctorId = $data['doctor_id'];

       $this->validator->set('email',$email);
        
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
}
