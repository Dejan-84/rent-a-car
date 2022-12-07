<?php
//error_reporting(0);


class Baza
{
    private $db_conn;
    private $rezultat;

    public function __construct()
    {

        $this->db_conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        
 
        if ($this->db_conn->connect_error) {
 
            return "<h1>Database Connection Failed</h1>";         
        } 

        return $this->db_conn;
    }

    public function custom_query($sql)
    {
        $rezultat = $this->db_conn->query($sql);

        return $rezultat;

    }
}
