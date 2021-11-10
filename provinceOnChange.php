<?php
    require_once("./models/amphureModel.php");
    $Province_Id = $_GET['Province_Id'];
    $Amphure_list = Amphure::getByProvince($Province_Id);
    echo "<option hidden='hidden'>Select Amphure</option>";
    foreach($Amphure_list as $amphure){
        echo "<option value=$amphure->Amphure_Id>$amphure->Amphure_NameTH</option>";
    }
?>