<?php
//$controllers = array('pages'=>['home','error']); //list controller and action
$controllers = array('pages'=>['home','error'],
'station'=>['index','deleteConfirm','deleteStation','search','updateForm','update','add','newForm'],
'stationDate'=>['index','deleteConfirm','deleteStation','search','updateForm','update','add','newForm']);

function call($controller,$action)
{
  
    require_once("controllers/".$controller."_controller.php");
    
    echo $controller;
    switch($controller)
    {
      case "pages"  :   $controller = new PagesController();
                        break;
      case "station":  
                        require_once("models/stationModel.php");
                        require_once("./models/provinceModel.php");
                        require_once("./models/amphureModel.php");
                        require_once("./models/districtModel.php");

                        $controller = new StationController();
                        break;
      case "stationDate":
                        require_once("models/stationDateModel.php");
                        $controller = new StationDateController();
                        break;
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
      call($controller,$action);
    }
    else
    {
      call('pages','error');
    }
}
else
{
  call('pages','error');
}
?>
