<?php
class StationDate
{
    public $StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID;

    public function __construct($StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID)
    {
        $this->StationDate_ID = $StationDate_ID;
        $this->StationDate_Date = $StationDate_Date;
        $this->StationDate_CountNum = $StationDate_CountNum;
        $this->Station_ID = $Station_ID;

    }
    public static function getAll(){

        $stationdate_list = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM StationDate";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $StationDate_ID = $my_row['StationDate_ID'];
            $StationDate_Date = $my_row['StationDate_Date'];
            $StationDate_CountNum = $my_row['StationDate_CountNum'];
            $Station_ID = $my_row['Station_ID'];
            $stationdate_list[] = new StationDate($StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID);
        }
        require("connection_close.php");
        return $stationdate_list;
    }

    public static function get($id){
        require("connection_connect.php");
        $sql = "SELECT * FROM StationDate WHERE StationDate_ID='$id'";
        $result=$conn->query($sql);
        $my_row = $result->fetch_assoc();
        $StationDate_ID = $my_row['StationDate_ID'];
        $StationDate_Date = $my_row['StationDate_Date'];
        $StationDate_CountNum = $my_row['StationDate_CountNum'];
        $Station_ID = $my_row['Station_ID'];
        
        require("connection_close.php");
        return new StationDate($StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID);
    }

    public static function delete($id){
        require("connection_connect.php");
        $sql = "Delete from StationDate where StationDate.StationDate_ID='$id'";
        $result = $conn->query($sql);
        require("connection_close.php");

    }

    public static function search($key){
        $stationdate_list = [];

        require("connection_connect.php");
        $sql ="select * from StationDate where Station_ID like '%$key%'";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $StationDate_ID = $my_row['StationDate_ID'];
            $StationDate_Date = $my_row['StationDate_Date'];
            $StationDate_CountNum = $my_row['StationDate_CountNum'];
            $Station_ID = $my_row['Station_ID'];

            $stationdate_list[] = new StationDate($StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID);
        }
        require("connection_close.php");

        if($stationdate_list == [])
        {
            $StationDate_ID = "Can't find your result";
            $StationDate_Date = $my_row['StationDate_Date'];
            $StationDate_CountNum = $my_row['StationDate_CountNum'];
            $Station_ID = $my_row['Station_ID'];

            $stationdate_list[] = new StationDate($StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID);
            require("connection_close.php");
            return $stationdate_list;

        }
        else
        {
            require("connection_close.php");
            return $stationdate_list;
        }


        
    }

    public static function update($StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID,$ID){
        require("connection_connect.php");
        // echo "$Station_ID, $Station_Name,$Station_Address , $Station_StartTime, $Station_DayBeforeBook, $ID";
        $sql = "UPDATE StationDate SET StationDate_ID = '$StationDate_ID', StationDate_Date = '$StationDate_Date', StationDate_CountNum = '$StationDate_CountNum', Station_ID = '$Station_ID' WHERE StationDate.StationDate_ID = '$ID'";
        $result=$conn->query($sql);

        require("connection_close.php");

    }

    public static function add($StationDate_ID,$StationDate_Date,$StationDate_CountNum,$Station_ID,$ID){
       

        require("connection_connect.php");
        $sql = "INSERT INTO `StationDate` (`StationDate_ID`, `StationDate_Date`, `StationDate_CountNum`, `Station_ID`) VALUES ('$StationDate_ID', '$StationDate_Date', '$StationDate_CountNum', '$Station_ID');";
        $result= $conn->query($sql);
        require("connection_close.php");
        return ;

    }




}
?>
