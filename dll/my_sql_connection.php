<?php 
Class Connection
{
    private $user ;
    private $host;
    private $pass ;
    private $db;

    public function __construct($host,$user,$pass, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
    }
    public function connect()
    {
        $link = mysqli_connect($this->host, $this-> user, $this->pass, $this->db);
        return $link;
    }

    
}  
?>