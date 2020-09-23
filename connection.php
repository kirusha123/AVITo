<?php

class Connection {
    private $host;
    private $db;
    private $user;
    private $password;
    private $port;


    public function __construct()
    {
        $this->host = 'localhost';
        $this->db = 'testDB';
        $this->user = 'root';
        $this->password = 'root';
        $this->port = 3306;
    }

    public function set_host($host){
        $this->host = $host;
    }

    public function set_db($db){
        $this->db = $db;
    }
    public function set_user($user){
        $this->user = $user;
    }
    public function set_pass($pass){
        $this->password = $pass;
    }
    public function set_port($port){
        $this->port = $port;
    }

    function start_connection(){
        $connect = mysqli_connect($this->host,$this->user,$this->password,$this->db, $this->port);
        if(!$connect){
            die("connection failed");
        }
        //echo "Connection set up";
        return $connect;
    }

}


