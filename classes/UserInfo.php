<?php

//made the path relative for testing locally...will make it absolute later
require 'C:\wamp\www\SuperCool-Heda\classes\DBConnection.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserInfo
 *
 * @author Robert
 */
class UserInfo {

    //put your code here
    protected $dBConnection;
    protected $conn;

    function __construct() {
        $this->dBConnection = new DBConnection();
        $this->conn = $this->dBConnection->connect();
    }

    public function addUser($firstname, $surname, $username, $password, $gender, $country, $county, $role, $phoneNo, $emailAddress) {
        $result = 0;
        $db = $this->conn;
        $query = "INSERT INTO hedausersdetails(firstname, surname, username, password, gender, country, county, role, phoneNo, emailaddress) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $insertstmt = $db->prepare($query);
        $insertstmt->bind_param("ssssssssss", $firstname, $surname, $username, $password, $gender, $country, $county, $role, $phoneNo, $emailAddress);
        $insertstmt->execute();
        $result = $insertstmt->affected_rows;
        return $result;
    }

    public function getUsers() {
        $db = $this->conn;
        $result = mysqli_query($db, "SELECT userID, firstname, surname, username, password, gender, country, county, role, phoneNo, emailaddress FROM hedausersdetails WHERE deleted=0");
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<th>Name</th>";
        echo "<th >Country</th>";
        echo "<th >County</th>";
        echo "<th >Role</th>";
        echo "<th >Action</th>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
           
            echo "<tr>";
            echo "<td>";
            $name = $row['firstname'].' '.$row['surname'];
            echo $name;
            echo "</td>";
            echo "<td>";
            $country = $row['country'];
            echo $country;
            echo "</td>";
            echo "<td>";
            $county = $row['county'];
            echo $county;
            echo "</td>";
            echo "<td>";
            $role = $row['role'];
            echo $role;
            echo "</td>";
            echo "<td>";
            $id = $row['userID'];
            echo "<form action='' method='get'>
             <a class='btn btn-default' href='delete-user.php?id=$id' role='button'>Delete</a>
            ";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    public function deleteUser($id) {
        $result = 0;
        $db = $this->conn;
        $query = "UPDATE hedausersdetails SET deleted=1 WHERE userID=$id ";
        $result = mysqli_query($db, $query);
        return $result;
    }

}
