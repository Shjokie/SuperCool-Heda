<?php

//require_once '../DBVariablesInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnection
 *
 * @author Robert
 */
class DBConnection {

    // Open a connect to the database.
    // Make sure this is called on every page that needs to use the database.
    protected $db_name = 'heda';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_host = 'localhost';
    protected $dbPort = '3306';

    public function connect() {
        $connect_db = new mysqli('localhost', 'root', '', 'heda');
        if (mysqli_connect_errno()) {
            printf("Connection failed: %s\
          ", mysqli_connect_error());
            exit();
        } else {
            //return true;
            return $connect_db;
            //printf("Connection Successful");
        }
        //returns the connection object
        
    }

    //put your code here
}

