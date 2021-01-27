<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $name;
    private $password;
    private $port;
    private $dbname;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $dbconnection;

    public function __construct(string $host, string $name, string $password, string $dbname, int $port)
    {
        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->port = $port;
    }

    public function connect()
    {

        try {
            $dsn = "mysql:dbname=$this->dbname;host=$this->host;port:$this->port;";
            $this->dbconnection = new PDO($dsn, $this->name, $this->password);
            $this->dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) { //to get error if connection failed
            echo "Connection Error - " . $exception->getMessage();
        }

        //     $this->dbconnection = mysqli_connect($this->host, $this->name, $this->password, $this->dbname, $this->port);

        //     if ($this->dbconnection->connect_errno) {
        //         echo "Failed to connect to MySQL: " . $this->dbconnection->connect_error;
        //         exit();
        //     }

        return $this->dbconnection;
    }
}
