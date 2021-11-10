<?php
class Station
{
    public $Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID,$District_Name,$Amphure_Id,$Amphure_Name,$Province_Id,$Province_Name;

    public function __construct($Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID,$District_Name,$Amphure_Id,$Amphure_Name,$Province_Id,$Province_Name)
    {
        $this->Station_ID = $Station_ID;
        $this->Station_Name = $Station_Name;
        $this->Station_Address = $Station_Address;
        $this->Station_StartTime = $Station_StartTime;
        $this->Station_DayBeforeBook = $Station_DayBeforeBook;
        $this->District_ID = $District_ID;
        $this->District_Name = $District_Name;
        $this->Amphure_Id = $Amphure_Id;
        $this->Amphure_Name = $Amphure_Name;
        $this->Province_Id = $Province_Id;
        $this->Province_Name = $Province_Name;

    }

    public static function getAll(){

        $station_list = [];
        require("connection_connect.php");
        // $sql = "SELECT * FROM Station";
        $sql = "SELECT Station.*, Districts.name_th AS District_Name, Amphures.id AS Amphure_Id, Amphures.name_th AS Amphure_Name, Provinces.id AS Province_Id, Provinces.name_th AS Province_Name FROM Station, Districts, Amphures, Provinces WHERE Station.District_Id = Districts.id AND Districts.amphure_id = Amphures.id AND Amphures.province_id = Provinces.id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $Station_ID = $my_row['Station_ID'];
            $Station_Name = $my_row['Station_Name'];
            $Station_Address = $my_row['Station_Address'];
            $Station_StartTime = $my_row['Station_StartTime'];
            $Station_DayBeforeBook = $my_row['Station_DayBeforeBook'];
            $District_ID = $my_row['District_ID'];
            $District_Name = $my_row["District_Name"];
            $Amphure_Id = $my_row["Amphure_Id"];
            $Amphure_Name = $my_row["Amphure_Name"];
            $Province_Id = $my_row["Province_Id"];
            $Province_Name = $my_row["Province_Name"];

            $station_list[] = new Station($Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID,$District_Name,$Amphure_Id,$Amphure_Name,$Province_Id,$Province_Name);
        }
        require("connection_close.php");
        return $station_list;
    }

    public static function get($id){
        require("connection_connect.php");
        // $sql = "SELECT * FROM Station WHERE Station_ID='$id'";
        $sql = "SELECT Station.*, Districts.name_th AS District_Name, Amphures.id AS Amphure_Id, Amphures.name_th AS Amphure_Name, Provinces.id AS Province_Id, Provinces.name_th AS Province_Name FROM Station, Districts, Amphures, Provinces WHERE Station.Station_ID = '$id' AND Station.District_Id = Districts.id AND Districts.amphure_id = Amphures.id AND Amphures.province_id = Provinces.id";

        $result=$conn->query($sql);
        $my_row = $result->fetch_assoc();
        $Station_ID = $my_row['Station_ID'];
        $Station_Name = $my_row['Station_Name'];
        $Station_Address = $my_row['Station_Address'];
        $Station_StartTime = $my_row['Station_StartTime'];
        $Station_DayBeforeBook = $my_row['Station_DayBeforeBook'];
        $District_ID = $my_row['District_ID'];
        $District_Name = $my_row["District_Name"];
        $Amphure_Id = $my_row["Amphure_Id"];
        $Amphure_Name = $my_row["Amphure_Name"];
        $Province_Id = $my_row["Province_Id"];
        $Province_Name = $my_row["Province_Name"];
        
        require("connection_close.php");
        return new Station($Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID,$District_Name,$Amphure_Id,$Amphure_Name,$Province_Id,$Province_Name);
    }

    public static function delete($id){
        require("connection_connect.php");
        $sql = "Delete from Station where Station.Station_ID='$id'";
        $result = $conn->query($sql);
        require("connection_close.php");

    }

    public static function search($key){
        $station_list = [];

        require("connection_connect.php");
        $sql ="select * from Station where Station_ID like '%$key%' or Station_Name like '$key'";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Station_ID = $my_row['Station_ID'];
            $Station_Name = $my_row['Station_Name'];
            $Station_Address = $my_row['Station_Address'];
            $Station_StartTime = $my_row['Station_StartTime'];
            $Station_DayBeforeBook = $my_row['Station_DayBeforeBook'];
            $District_ID = $my_row['District_ID'];

            $station_list[] = new Station($Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID);
        }


        require("connection_close.php");

        if($station_list == [])
        {
            $Station_ID = "Can't find your result";
            $Station_Name = $my_row['Station_Name'];
            $Station_Address = $my_row['Station_Address'];
            $Station_StartTime = $my_row['Station_StartTime'];
            $Station_DayBeforeBook = $my_row['Station_DayBeforeBook'];
            $District_ID = $my_row['District_ID'];

            $station_list[] = new Station($Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID);

            require("connection_close.php");
            return $station_list;

        }
        else
        {
            require("connection_close.php");
            return $station_list;
        }



        // return $station_list;
    }

    public static function update($Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID,$ID){
        require("connection_connect.php");
        // echo "$Station_ID, $Station_Name,$Station_Address , $Station_StartTime, $Station_DayBeforeBook, $ID";
        $sql = "UPDATE Station SET Station_ID = '$Station_ID', Station_Name = '$Station_Name', Station_Address = '$Station_Address', Station_StartTime = '$Station_StartTime', Station_DayBeforeBook = '$Station_DayBeforeBook', District_ID = '$District_ID' WHERE Station.Station_ID = '$ID'";
        $result=$conn->query($sql);

        require("connection_close.php");

    }

    public static function add($Station_ID,$Station_Name,$Station_Address,$Station_StartTime,$Station_DayBeforeBook,$District_ID){

        require("connection_connect.php");
        $sql = "INSERT INTO `Station` (`Station_ID`, `Station_Name`, `Station_Address`, `Station_StartTime`, `Station_DayBeforeBook`,`District_ID`) VALUES ('$Station_ID', '$Station_Name', '$Station_Address', '$Station_StartTime', '$Station_DayBeforeBook', '$District_ID');";
        $result= $conn->query($sql);
        require("connection_close.php");
        return ;

    }




}
?>
