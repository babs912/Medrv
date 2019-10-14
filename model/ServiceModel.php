<?php

class ServiceModel extends Model
{
    var $model = 'Service';
    public function __construct()
    {
        parent::__construct($this->model);
    }
}
