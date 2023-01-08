<?php

class DataBase
{

    private $host = "";
    private $user = "";
    private $password = "";
    private $dBase = "";
    private $conn;

    public function __construct($host = 'localhost', $user = 'root', $password = '', $dBase = 'items')
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dBase = $dBase;
    }



}
