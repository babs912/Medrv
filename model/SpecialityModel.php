<?php

class SpecialityModel extends Model
{
    var $model = 'Speciality';
    public function __construct()
    {
        parent::__construct($this->model);
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
}
