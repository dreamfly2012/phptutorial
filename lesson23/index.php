<?php

//适配器设计模式，



class mysql implements db{
    public function __construct()
    {
        
    }

    public function connect()
    {
        echo 'mysql connect';
    }

    public function query()
    {
        echo 'mysql query';
    }

    public function close()
    {
        echo 'mysql close';
    }
}

class oracle implements db{
    public function __construct()
    {
        
    }

    public function connect()
    {
        echo 'oracle connect';
    }

    public function query()
    {
        echo 'oracle query';
    }

    public function close()
    {
        echo 'oracle close';
    }
}


class mssql implements db{
    public function __construct()
    {
        
    }

    public function connect()
    {
        echo 'mssql connect';
    }

    public function query()
    {
        echo 'mssql query';
    }

    public function close()
    {
        echo 'mssql close';
    }
}

interface db{
    public function connect();
    public function query();
    public function close(); 
}

class Adapter implements db{
    public $db;
    public function __construct(db $db)
    {
        $this->db = $db;
    }

    public function connect()
    {
        $this->db->connect();
    }

    public function query()
    {
        $this->db->query();
    }

    public function close()
    {
        $this->db->close();
    }
}


$db = new oracle();  
// $db = new mysql();
// $db = new mssql();

$adapter = new Adapter($db);


$adapter->connect();

$adapter->query();

$adapter->close();
