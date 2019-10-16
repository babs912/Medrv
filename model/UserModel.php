<?php

class UserModel extends Model
{
    var $model = 'User';
    public function __construct()
    {
        parent::__construct($this->model);
    }

 public function   login ($username, $password){

    $sql = "SELECT * FROM `User` WHERE `username` = '".$username."' AND `password` = '".$password."'";

    $q = $this->con->prepare($sql);

    $q->execute();

    return $q->fetchAll(PDO::FETCH_OBJ);
 }
}
