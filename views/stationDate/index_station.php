
<form action="" method="get">
        <input type="text" name="key" placeholder=" search ID here" >
        <input type="hidden" name="controller" value="station">
        <input type="hidden" name="action" value="search">
        <button type="button" class="btn btn-info btn-sm">Search</button>
</form>

<br><br><a class="btn btn-success mr-2" role="button" href=?controller=station&action=newForm>New STATION</a><br><br>

<table class="table table-dark">

<tr>
     <td>Station_ID</td>
     <td>NAME</td>
     <td>Address</td>
     <td>StartTime</td>
     <td>DayBeforeBook</td>
     <td>District_ID</td>

     <td>UPDATE</td>
     <td>DELETE</td>
     <td>SHOWDATE</td>
</tr>
  
<?php
  foreach($station_list as $Station)
  {
       echo 
      "<tr>
      <td>$Station->Station_ID</td>
      <td>$Station->Station_Name</td>
      <td>$Station->Station_Address</td>
      <td>$Station->Station_StartTime</td>
      <td>$Station->Station_DayBeforeBook</td>
      <td>$Station->District_ID</td>
      <td>
          <a href=?controller=station&action=updateForm&Station_ID=$Station->Station_ID>
               UPDATE
          </a>
      </td>
      <td>
          <a href=?controller=station&action=deleteConfirm&Station_ID=$Station->Station_ID>
               DELETE
          </a>
      </td>
      <td>
          <a href=?controller=station&action=stationDate&Station_ID=$Station->Station_ID>
               SHOWDATE
          </a>
      </td>
      </tr>";
  }
echo "</table>";
?>
