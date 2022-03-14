<?php
class DbConfig
{
    private static $instance = null;
    private $conn;
    private $name = 'test1';
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';


    private function __construct()
    {
        $this->conn = new PDO ("mysql: host={$this->host};
  dbname={$this ->name}", $this->user, $this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }


    public static function getInstance()
    {
        if (!self::$instance) {
            !self::$instance = new DbConfig();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
?>
