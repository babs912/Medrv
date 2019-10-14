<?php
class Database
{
    private  $connect;

    public function __construct()
    {
        try {
            $this->connect = new PDO('mysql:host=localhost;dbname=Medrv;charset=utf8', 'babs', 'keurm912#');
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            echo  $e->getMessage();
        }
    }

    public function _connect(): PDO
    {
        return $this->connect;
    }
}
