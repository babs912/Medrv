<?php
require ROOT . DS . 'config' . DS . 'Database.php';
class Model
{
    private $con;
    private $model = '';

    public function __construct($model)
    {
        $db = new Database();
        $this->con = $db->_connect();
        $this->model = $model;
    }
    public function find(?string $type = null, array $options = null)
    { }

    public function findSpecialityService()
    {
        $sql = "SELECT * FROM " . $this->model . " WHERE service_id IN (SELECT id FROM Service WHERE name='" . $_SESSION['service'] . "')";
        $q = $this->con->prepare($sql);

        if ($q->execute()) {
            $data = [];
            while ($row = $q->fetch(PDO::FETCH_OBJ)) {
                $data[] = $row;
            }

            return $data;
        } else {
            echo "introuvable";
        }
    }
}
