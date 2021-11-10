
<form action="" method="get">
        <input type="text" name="key" placeholder=" search Station_ID here" >
        <input type="hidden" name="controller" value="stationDate">
        <input type="hidden" name="action" value="search">
        <button type="button" class="btn btn-info btn-sm">Search</button>
</form>

<br><br><a class="btn btn-success mr-2" role="button" href=?controller=stationDate&action=newForm>New STATIONDATE</a><br><br>

<table class="table table-dark mb-10">

<tr>
     <td>StationDate_ID</td>
     <td>StationDate_Date</td>
     <td>StationDate_CountNum</td>
     <td>Station_ID</td>

     <td>UPDATE</td>
     <td>DELETE</td>
</tr>
  
<?php
  foreach($stationdate_list as $StationDate)
  {
       echo 
      "<tr>
      <td>$StationDate->StationDate_ID</td>
      <td>$StationDate->StationDate_Date</td>
      <td>$StationDate->StationDate_CountNum</td>
      <td>$StationDate->Station_ID</td>
      <td>
          <a href=?controller=stationDate&action=updateForm&StationDate_ID=$StationDate->StationDate_ID>
               UPDATE
          </a>
      </td>
      <td>
          <a href=?controller=stationDate&action=deleteConfirm&StationDate_ID=$StationDate->StationDate_ID>
               DELETE
          </a>
      </td>
      </tr>";
  }
echo "</table>";
?>
