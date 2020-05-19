<?php
class Database
{
    private $host = DB_HOST;
    private $username = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    private $option = OPTION;
    private $dbh;
    private $stmt;
    
    public function __construct()
	{
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;
		try
		{
			$this->dbh = new PDO($dsn, $this->username, $this->pass, $this->option);
		} catch(PDOException $err)
		{
			die($err->getMassage());
		}
    }
    // prepare query on function query
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    // function binding paramameters, to clean paramameter
    public function bind($param, $value, $type=null)
    {
        if(is_null($type))
        {
            switch(true)
            {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                break;
                default:
                $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }
// to return all data
    public function resultAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

// to return single data
    public function singleResult()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

}
