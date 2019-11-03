<?php

class StaffModel extends Model
{
    var $model = 'Staff';
    public function __construct()
    {
        parent::__construct($this->model);
    }


    public function findDoctorSpeciality($speciality)
    {
        $sql = "SELECT s.id, s.first_name, s.last_name FROM Staff s
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
