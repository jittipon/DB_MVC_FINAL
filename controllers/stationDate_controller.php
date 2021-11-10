<?php

class StationDateController
{
    public function index()
    {
        
        
        $stationdate_list = StationDate::getAll();
        require_once('views/stationDate/index_stationDate.php');
    }

    public function search(){
        
        $key = $_GET['key'];
        $stationdate_list = StationDate::search($key);

        require_once('views/stationDate/index_stationDate.php');
    }

    public function deleteStation()
    {
        $id = $_GET['StationDate_ID'];
        echo "<br> ID = $id  Deleted<br>";
        StationDate::delete($id);
        StationDateController::index();

    }

    public function deleteConfirm()
    {
        $id = $_GET['StationDate_ID'];   
        echo "<br> StationDate ID = $id<br>";
        $StationDate = StationDate::get($id);

        require_once('views/stationDate/deleteConfirm.php');
    }

    public function updateForm(){
        $id = $_GET['StationDate_ID'];
        $StationDate = StationDate::get($id);

        echo "<br>now is up date ID  = $id<br><br>";
        require_once('views/stationDate/updateForm_station.php');    
    }

    public function update(){
        $ID = $_GET['StationDate_ID'];
        $StationDate_ID = $_GET['StationDate_IDupdate'];
        $StationDate_Date = $_GET['StationDate_Date'];
        $StationDate_CountNum = $_GET['StationDate_CountNum'];
        $Station_ID= $_GET['Station_ID'];
        
        StationDate::update($StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID,$ID);
        stationDateController::index();
    }


    public function newForm(){
        $stationdate_list = StationDate::getAll(); 
        require_once('views/stationDate/new_Station.php');
    }

    public function add()
    {
      
        $StationDate_ID = $_GET['StationDate_ID'];
        $StationDate_Date = $_GET['StationDate_Date'];
        $StationDate_CountNum = $_GET['StationDate_CountNum'];
        $Station_ID= $_GET['Station_ID'];
       

        StationDate::add($StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID,$ID);
        stationDateController::index();
    }









}
?>
