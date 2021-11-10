<?php

class StationController
{
    public function index()
    {
        
        
        $station_list = Station::getAll();
        require_once('views/station/index_station.php');
    }

    public function search(){
        
        $key = $_GET['key'];
        $station_list = Station::search($key);
        

        require_once('views/station/index_station.php');
    }

    public function deleteStation()
    {
        $id = $_GET['Station_ID'];
        echo "<br> ID = $id  Deleted<br>";
        Station::delete($id);
        StationController::index();

    }

    public function deleteConfirm()
    {
        $id = $_GET['Station_ID'];   
        echo "<br> Station ID = $id<br>";
        $Station = Station::get($id);

        require_once('views/station/deleteConfirm.php');
    }

    public function updateForm(){
        $id = $_GET['Station_ID'];
        $Station = Station::get($id);

        echo "<br>now is up date ID  = $id<br><br>";
        require_once('views/station/updateForm_station.php');    
    }

    public function update(){
        $ID = $_GET['Station_ID'];
        $Station_ID = $_GET['Station_IDupdate'];
        $Station_Name = $_GET['Station_Name'];
        $Station_Address = $_GET['Station_Address'];
        $Station_StartTime= $_GET['Station_StartTime'];
        $Station_DayBeforeBook=$_GET['Station_DayBeforeBook'];
        $District_ID=$_GET['District_ID'];
        
        Station::update($Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID,$ID);
        stationController::index();
    }


    public function newForm(){
        $station_list = Station::getAll(); 
        $Province_list = Province::getAll();
        
        require_once('views/station/new_Station.php');
    }

    public function add()
    {
      
        $Station_ID = $_GET['Station_ID'];
        $Station_Name = $_GET['Station_Name'];
        $Station_Address = $_GET['Station_Address'];
        $Station_StartTime= $_GET['Station_StartTime'];
        $Station_DayBeforeBook=$_GET['Station_DayBeforeBook'];
        $District_ID=$_GET['District_Id'];


        // echo "<br></br>$Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID";

       

        Station::add($Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID,$ID);
        stationController::index();
    }









}
?>
