<?php

class StaffModel extends Model
{
    var $model = 'Staff';
    public function __construct()
    {
        parent::__construct($this->model);
    }

   public function create ($data){
       $role = $data['role'];
       $name = $data['prenom']." ".$data['nom'];
       $speciality = $data['speciality'];
       $email = $data['email'];
       $phone = $data['phone'];

       $idRole =  $this->con->query("SELECT id FROM Role WHERE name = ".$role);

       $sql = "INSERT INTO ".$this->model." SET name=:name, email=:email, phone=:phone, role_id=:role";
       $q = $this->con-prepare($sql);
       $q->bindValue(':name',$name);
       $q->bindValue(':email',$email);
       $q->bindValue(':phone',$phone);
       $q->bindValue(':role',$idRole);


       $q->execute();

       
   }
}
