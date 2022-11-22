<?php


class DBController
{
    // Data base Properties
    protected $host='localhost';
    protected $user='root';
    protected $password='root';
    protected $database="shopee";


    //connection property
    public $con=null;

    //call constructor
    public function __construct()
    {
        $this->con=mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo"fail ".$this->con->connect_error;
            exit();
        }

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con!=null){
            $this->con->close();
            $this->con=null;
        }
    }
}

