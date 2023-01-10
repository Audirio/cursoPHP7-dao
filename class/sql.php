<?php

class Sql extends PDO {

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost;port=3308","root","");

    }

    private function setParams($statement, $parameters = array()){

        foreach ($parameters as $key => $value) {

            $this->setParam($statement, $key, $value);

        }

    }

    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);

    }

    public function query1($rawQuery, $params = array()){

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->query1($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>