<?php

$id = test_input($_GET['id']);
require_once 'C:\wamp\www\SuperCool-Heda\classes\UserInfo.php';
$userInfo = new UserInfo();
$userInfo->deleteUser($id);

header("location: viewusers.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

