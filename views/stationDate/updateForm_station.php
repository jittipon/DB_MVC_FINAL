<div class="d-flex justify-content-center">
<form method="get" action="" class="w-50 p-3">
<?php $Station_ID = $Station->Station_ID?>

<div class="form-group mt-2 ml-3 mr-3">
            <label>StationDate_ID</label>
            <input type="text" class="form-control w-90" aria-describedby="IDhelp" name="StationDate_IDupdate" value ="<?php echo $StationDate->StationDate_ID;?>"/>
            <small id="IDhelp" class="form-text text-muted">You can type new StationDate_ID here.</small>
        </div>

        <!-- <label>Station_ID  <input type="text" name="Station_ID"  /></label><br> -->

        <div class="form-group ml-3 mr-3">
            <label>StationDate_Date</label>
            <input type="date" class="form-control w-90" name="StationDate_Date" value ="<?php echo $StationDate->StationDate_Date;?>"/>
    
        </div>

        <!-- <label>Station_Name  <input type="text" name="Station_Name"  /></label><br> -->

        <div class="form-group ml-3 mr-3">
            <label>StationDate_CountNum</label>
            <input type="text" class="form-control w-90" name="StationDate_CountNum" value ="<?php echo $StationDate->StationDate_CountNum;?>"/>
    
        </div>

        <!-- <label>Station_Address  <input type="text" name="Station_Address" /></label><br> -->

        <div class="form-group ml-3 mr-3">
            <label>Station_ID</label>
            <input type="text" class="form-control w-90" name="Station_ID" value ="<?php echo $StationDate->Station_ID;?>"/>
    
        </div>

        <!-- <label>Station_StartTime  <input type="time" name="Station_StartTime"  /></label><br> -->

<br>
<input type = "hidden" name ="controller" value ="stationDate"/>
<input type = "hidden" name ="StationDate_ID" value ="<?php echo $StationDate->StationDate_ID;?>"/>

<div class="d-flex justify-content-center">
    <button type="submit" name="action" class="btn btn-danger mb-5" value="index">Back</button>
    <button type="submit" name="action" class="btn btn-info ml-2 mb-5" value="update">Update</button>
</div>

</form>

</div>



