<?php
include_once '../DBVariablesInterface.php';
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
class DBConnection extends DBVariablesInterface {
    // Open a connect to the database.
    // Make sure this is called on every page that needs to use the database.

    public function connect() {
        $connect_db = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        /* if ( mysqli_connect_errno() ) {
          printf("Connection failed: %s\
          ", mysqli_connect_error());
          exit();
          }else{
          return true;
          printf("Connection Successful");
          } */
        //returns the connection object
        return $connect_db;
    }
    //put your code here
}
