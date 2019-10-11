<?php
class Database
{
    private  $connect;

    public function __construct()
    {
        try {
            $this->connect = new PDO('mysql:host=localhost;dbname=rvmed', 'root', 'keurm912#');
        } catch (PDOException $e) {
            echo  $e->getMessage();
        }
    }

    public function _connect(): PDO
    {
        return $this->connect;
    }
}
