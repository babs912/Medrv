<?php

class PatientModel extends Model
{
    var $model = 'Patient';
    public function __construct()
    {
        parent::__construct($this->model);
    }


    public function getAll() {
        $sql = 
        "SELECT a.planned_at, sp.name, p.first_name, p.last_name, p.gender, p.age, p.email, p.phone, p.address, s.name as doctorName, s.email as doctorEmail, s.phone as doctorPhone, s.avatar FROM Patient p INNER JOIN Appoint a ON (a.patient_id = p.id) INNER JOIN Staff s ON (a.doctor_id = s.id) INNER JOIN Speciality_Staff ss ON (ss.staff_id = s.id) INNER JOIN Speciality sp ON (sp.id = ss.speciality_id) WHERE sp.service_id IN( SELECT id FROM Service WHERE Service.name = '".$_SESSION["service"]."' )";

       $q = $this->con->prepare($sql);
       $q->execute();
        $data = [];
        while ($row = $q->fetch(PDO::FETCH_OBJ)) {
            $data[] = $row;
        }

       return $data;
    }

   
}