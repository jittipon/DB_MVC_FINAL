<?php
    require_once("./models/districtModel.php");
    $Amphure_Id = $_GET['Amphure_Id'];
    if($Amphure_Id == 0)
        $text = "Select Amphure First";
    else
        $text = "Select District";
    $District_list = District::getByAmphure($Amphure_Id);
    echo "<option hidden='hidden'>$text</option>";
    foreach($District_list as $district){
        echo "<option value=$district->District_Id>$district->District_NameTH</option>";
}
?>