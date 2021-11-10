<?php

    class Amphure{

        public $Amphure_Id;
        public $Amphure_Code;
        public $Amphure_NameTH;
        public $Amphure_NameEN;
        public $Province_Id;

        public function __construct($Amphure_Id ,$Amphure_Code ,$Amphure_NameTH ,$Amphure_NameEN ,$Province_Id){
            $this->Amphure_Id = $Amphure_Id;
            $this->Amphure_Code = $Amphure_Code;
            $this->Amphure_NameTH = $Amphure_NameTH;
            $this->Amphure_NameEN = $Amphure_NameEN;
            $this->Province_Id = $Province_Id;
        }

        public static function getByProvince($Province_Id){
            $amphureList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Amphures WHERE Amphures.province_id = '$Province_Id' ORDER BY Amphures.name_th";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $Amphure_Id = $my_row["id"];
                $Amphure_Code = $my_row["code"];
                $Amphure_NameTH = $my_row["name_th"];
                $Amphure_NameEN = $my_row["name_en"];
                $Province_Id = $my_row["province_id"];

                $amphureList[] = new Amphure($Amphure_Id ,$Amphure_Code ,$Amphure_NameTH ,$Amphure_NameEN ,$Province_Id);
            }
            require("connection_close.php");
            return $amphureList;
        }

    }
