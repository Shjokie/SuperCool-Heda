<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RespondentsInfo
 *
 * @author Robert
 */
require_once './DBConnection.php';

class RespondentsInfo {

    protected $dBConnection;
    protected $conn;

    function __construct() {
        $this->dBConnection = new DBConnection();
        $this->conn = $this->dBConnection->connect();
    }
   /**
     * This function add new respondent to the database
     * @param type $firstName
     * @param type $surName
     * @param type $gender
     * @param type $county
     * @param type $ward
     * @param type $nearestTown
     * @param type $gpsValues
     * @param type $householdLocation
     * @param type $phoneNo
     * @param type $householdTenure
     * @param type $connected
     * @param type $solarPanelPower
     * @param type $biogasDigestorPower
     * @param type $dieselGeneratorPower
     * @param type $batterySystemPower
     * @param type $windPower
     * @param type $charcoalUse
     * @param type $firewoodUse
     * @param type $paraffinUse
     * @param type $briquttesUse
     * @param type $lpgUse
     * @param type $solarBulbsNo
     * @param type $electricBulbsNo
     * @param type $koroboiNo
     * @param type $paraffinLampNo
     * @param type $gasLampNo
     * @param type $batteryTorchNo
     * @param type $blackwhiteTvNo
     * @param type $colouredTvNo
     * @param type $mobilePhoneNo
     * @param type $radioNo
     * @param type $dvdPlayerNo
     * @param type $fridgeNo
     * @param type $electricWaterHeaterNo
     * @param type $computerNo
     * @param type $electricIronboxNo
     * @param type $householdSize
     * @param type $householdType
     * @param type $roofStructure
     * @param type $wallStructure
     * @param type $drinkingWaterSource
     * @param type $householdRooms
     * @param type $earningPeopleNo
     * @param type $mainSourceOfIncome
     * @param type $totalIncome
     * @return type
     */
    public function insertRespondent($firstName, $surName,$gender,$county,$ward,$nearestTown,$gpsValues,$householdLocation
            ,$phoneNo,$householdTenure,$connected,$solarPanelPower,$biogasDigestorPower,$dieselGeneratorPower,
            $batterySystemPower, $windPower,$charcoalUse, $firewoodUse, $paraffinUse, $briquttesUse,$lpgUse, $solarBulbsNo, $electricBulbsNo, $koroboiNo,
            $paraffinLampNo, $gasLampNo, $batteryTorchNo, $blackwhiteTvNo,$colouredTvNo, $mobilePhoneNo, $radioNo, $dvdPlayerNo, $fridgeNo,
            $electricWaterHeaterNo, $computerNo, $electricIronboxNo, $householdSize,$householdType, $roofStructure, $wallStructure, $drinkingWaterSource,
            $householdRooms, $earningPeopleNo, $mainSourceOfIncome, $totalIncome) {
        $result = 0;
        $db = $this->conn;
        $query = "INSERT INTO respondentsdetails(firstname, surname, gender,"
                . "county, ward, nearestTown, gpsValues, "
                . "householdLocation, phoneNo, householdTenure, "
                . "connected, solarPanelPower, biogasDigestorPower, "
                . "dieselGeneratorPower, batterySystemPower, windPower, "
                . "charcoalUse, firewoodUse, paraffinUse, briquttesUse, "
                . "lpgUse, solarBulbsNo, electricBulbsNo, koroboiNo,"
                . " paraffinLampNo, gasLampNo, batteryTorchNo, blackwhiteTvNo, "
                . "colouredTvNo, mobilePhoneNo, radioNo, dvdPlayerNo, fridgeNo,"
                . " electricWaterHeaterNo, computerNo, electricIronboxNo, householdSize, "
                . "householdType, roofStructure, wallStructure, drinkingWaterSource, "
                . "householdRooms, earningPeopleNo, mainSourceOfIncome, totalIncome) "
                . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,"
                . "?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $insertstmt = $db->prepare($query);
        $insertstmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssss", $firstName, $surName,$gender,$county,$ward,$nearestTown,$gpsValues,$householdLocation
            ,$phoneNo,$householdTenure,$connected,$solarPanelPower,$biogasDigestorPower,$dieselGeneratorPower,
            $batterySystemPower, $windPower,$charcoalUse, $firewoodUse, $paraffinUse, $briquttesUse,$lpgUse, $solarBulbsNo, $electricBulbsNo, $koroboiNo,
            $paraffinLampNo, $gasLampNo, $batteryTorchNo, $blackwhiteTvNo,$colouredTvNo, $mobilePhoneNo, $radioNo, $dvdPlayerNo, $fridgeNo,
            $electricWaterHeaterNo, $computerNo, $electricIronboxNo, $householdSize,$householdType, $roofStructure, $wallStructure, $drinkingWaterSource,
            $householdRooms, $earningPeopleNo, $mainSourceOfIncome, $totalIncome);
        $insertstmt->execute();
        $result = $insertstmt->affected_rows;
        return $result;
    }

//put your code here
}
