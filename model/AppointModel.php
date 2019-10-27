<?php

class AppointModel extends Model
{
    var $model = 'Appoint';
    public function __construct()
    {
        parent::__construct($this->model);

    }

   public function add ($data){
    return $this->create($data);
    
}

  public function getNumberPatient($date,$id){
      $sql = "SELECT COUNT(ap.patient_id) FROM `Appoint` ap WHERE planned_at = '".$date."' AND doctor_id = ".$id;
     $q = $this->con->prepare($sql);
     $q->execute();

     return $q->fetchColumn();
      
  }

 public function isAvailableTime($date, $time,$doctorId)
 {
     $sql  = "SELECT COUNT(ap.start_time) FROM Appoint ap WHERE ap.planned_at ='".$date."' AND ap.start_time ='".$time."' AND doctor_id=".$doctorId;
     $q = $this->con->prepare($sql);

     $q->execute();

     return $q->fetchColumn();

 }
}
