<?php     
$config = require('config.php');


class Database {
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = "")
    {
            $dsn = 'mysql:' . http_build_query($config, '', ';'); //example host=localhost;port=3306;dbname=products;charset=utfmb4;

            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
    }
    
    // create a function that will handle the queries and prepare it.
    public function query($query, $params = []) {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get() {
        return $this->statement->fetchAll();
    }
}