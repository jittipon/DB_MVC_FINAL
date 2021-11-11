
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
     <td>Institution</td>
     <td>StartTime</td>
     <td>DayBeforeBook</td>
     <td>DBB</td>
     <td>District_ID</td>
     <td>District_Name</td>
     <td>Amphure_Name</td>
     <td>Province_Name</td>

     <td>UPDATE</td>
     <td>DELETE</td>
     <td>Show Date</td>
     <td>DATE</td>
     <td>LOCATION</td>
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
      <td>$Station->District_Name</td> 
      <td>$Station->Amphure_Name</td> 
      <td>$Station->Province_Name</td>

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
          <a href=?key=$Station->Station_ID&controller=stationDate&action=search>
               Date ID ($Station->Station_ID)
          <a class='btn btn-info btn-lg' href=?key=$Station->Station_ID&controller=stationDate&action=search>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-calendar2-week-fill' viewBox='0 0 16 16'>
               <path d='M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z'></path>
          </svg>
          </a>
      </td>
      <td>
          <a class='btn btn-danger btn-lg' href='http://maps.google.com/?q= $Station->District_Name $Station->Amphure_Name $Province_Name ' target='_blank'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-geo-alt' viewBox='0 0 16 16'>
               <path d='M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z'></path>
               <path d='M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'></path>
          </svg>
          </a>
      
      </td>

      </tr>";
  }
echo "</table>";
?>
