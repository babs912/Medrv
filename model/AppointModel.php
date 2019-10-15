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

       $idPatient = 3;
       
      $q = $this->con->prepare("INSERT INTO Appoint SET planned_at=:planned_at, doctor_id=:doctor_id, patient_id=:patient_id");

       $q->bindValue(':planned_at',$plannedAt);
       $q->bindValue(':doctor_id',$doctorId);
       $q->bindValue(':patient_id',$idPatient);

       $q->execute();

   }
}