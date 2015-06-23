<?php
require_once 'C:\wamp\www\SuperCool-Heda\classes\DBConnection.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModuleParameters
 *
 * @author Robert
 */
class ModuleParameters {
    protected $dBConnection;
    protected $conn;

    function __construct() {
        $this->dBConnection = new DBConnection();
        $this->conn = $this->dBConnection->connect();
    }
    function fetchCountry() {
        $db = $this->conn;
        $result = mysqli_query($db, "SELECT id, title FROM country WHERE deleted=0");
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $title = $row['title'];
            echo "<option value=$id>";
            echo $title;
            echo "</option>";            
        }       
    }
    function fetchCounty() {
        $db = $this->conn;
        $result = mysqli_query($db, "SELECT name FROM county WHERE countryid='KE' AND deleted=0");
        while ($row = mysqli_fetch_array($result)) {
            $title = $row['name'];
            echo "<option value=$title>";
            echo $title;
            echo "</option>";            
        }  
    }
    function fetchRoles() {
        $db = $this->conn;
        $result = mysqli_query($db, "SELECT id, name FROM roles WHERE  deleted=0");
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $title = $row['name'];
            echo "<option value=$id>";
            echo $title;
            echo "</option>";            
        }  
    }
    //put your code here
}
