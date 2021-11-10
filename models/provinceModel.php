<?php

    class Province{

        public $Province_Id;
        public $Province_Code;
        public $Province_NameTH;
        public $Province_NameEN;

        public function __construct($Province_Id ,$Province_Code ,$Province_NameTH ,$Province_NameEN){
            $this->Province_Id = $Province_Id;
            $this->Province_Code = $Province_Code;
            $this->Province_NameTH = $Province_NameTH;
            $this->Province_NameEN = $Province_NameEN;
        }

        public static function getAll(){
            $provinceList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Provinces ORDER BY Provinces.name_th";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $Province_Id = $my_row["id"];
                $Province_Code = $my_row["code"];
                $Province_NameTH = $my_row["name_th"];
                $Province_NameEN = $my_row["name_en"];

                $provinceList[] = new Province($Province_Id ,$Province_Code ,$Province_NameTH ,$Province_NameEN);
            }
            require("connection_close.php");
            return $provinceList;
        }

    }
