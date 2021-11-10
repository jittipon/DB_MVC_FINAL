<?php

    class District{

        public $District_Id;
        public $District_ZipCode;
        public $District_NameTH;
        public $District_NameEN;
        public $Amphure_Id;

        public function __construct($District_Id ,$District_ZipCode ,$District_NameTH ,$District_NameEN ,$Amphure_Id){
            $this->District_Id = $District_Id;
            $this->District_ZipCode = $District_ZipCode;
            $this->District_NameTH = $District_NameTH;
            $this->District_NameEN = $District_NameEN;
            $this->Amphure_Id = $Amphure_Id;
        }

        public static function getByAmphure($Amphure_Id){
            $districtList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Districts WHERE Districts.amphure_id = '$Amphure_Id' ORDER BY Districts.name_th";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $District_Id = $my_row["id"];
                $District_ZipCode = $my_row["zip_code"];
                $District_NameTH = $my_row["name_th"];
                $District_NameEN = $my_row["name_en"];
                $Amphure_Id = $my_row["amphure_id"];

                $districtList[] = new District($District_Id ,$District_ZipCode ,$District_NameTH ,$District_NameEN ,$Amphure_Id);
            }
            require("connection_close.php");
            return $districtList;
        }

    }
