<?php

class StaffModel extends Model
{
    var $model = 'staff';
    public function __construct()
    {
        parent::__construct($this->model);
    }
}
