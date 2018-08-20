<?php

namespace Galeguinho;

abstract class Database
{

    protected $db;

    public function __construct()
    {

        $this->db = new \PDO('mysql:host=127.0.0.1;dbname=db_savelink;charset=utf8', 'root', '', array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    }
} 