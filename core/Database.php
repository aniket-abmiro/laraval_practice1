<?php
//connect our mysql database
namespace core;
use PDO;
class Database{

    public $con;
    public $statement;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp";
        $this->con = new PDO($dsn,'root','',[
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
        ]);
    }

    public function query($query,$params = [])
    {

        $this->statement = $this->con->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOrFail()
    {
        $result = $this->find();
        if($result != true){
            abort();
        }
        
        return $result;
    }

}