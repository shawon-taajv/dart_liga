<?php

/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/6/2022
 * Time: 11:59 AM
 */
class Connection
{
    private $db;
    public function dbConnect()
    {
        //$this->db = new PDO("mysql:host=localhost;dbname=dart_liga","root","");//localhost
        $this->db = new PDO("mysql:host=bfznswuwshtns9uxuijs-mysql.services.clever-cloud.com;dbname=bfznswuwshtns9uxuijs","uqabjntxwhmutj40","Vc2lclBNMyBacxbXD8fv");//server

        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $this->db;
    }
}