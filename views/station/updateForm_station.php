<div class="d-flex justify-content-center">
<form method="get" action="" class="w-50 p-3">
<?php $Station_ID = $Station->Station_ID?>

<div class="form-group mt-5 ml-3 mr-3">
    <label>Station_ID</label>
    <input type="text" class="form-control w-90" aria-describedby="IDhelp" name="Station_IDupdate" value ="<?php echo $Station->Station_ID;?>"/>
    <small id="IDhelp" class="form-text text-muted">You can type new ID station here.</small>
</div>

<!-- <label>Station_ID <input type="text" name="Station_IDupdate" value ="<?php echo $Station->Station_ID;?>"/></label><br> -->

<div class="form-group ml-3 mr-3">
    <label>Station_Name</label>
    <input type="text" class="form-control w-90" name="Station_Name" value ="<?php echo $Station->Station_Name;?>"/>
    
</div>

<!-- <label>Station_Name <input type="text" name="Station_Name" value ="<?php echo $Station->Station_Name;?>"/></label><br> -->

<div class="form-group ml-3 mr-3">
    <label>Station_Address</label>
    <input type="text" class="form-control w-90" name="Station_Address" value ="<?php echo $Station->Station_Address;?>"/>
    
</div>

<!-- <label>Station_Address <input type="text" name="Station_Address" value ="<?php echo $Station->Station_Address;?>"/></label><br> -->


<div class="form-group ml-3 mr-3">
    <label>Station_StartTime</label>
    <input type="time" class="form-control w-90" name="Station_StartTime" aria-describedby="IDhelp" value ="<?php echo $Station->Station_StartTime;?>"/>
    <small id="IDhelp" class="form-text text-muted">Press clock to edit.</small>
    
</div>

<!-- <label>Station_StartTime <input type="time" name="Station_StartTime" value ="<?php echo $Station->Station_StartTime;?>"/></label><br> -->

<div class="form-group ml-3 mr-3">
    <label>Station_DayBeforeBook</label>
    <input type="text" class="form-control w-90" name="Station_DayBeforeBook" value ="<?php echo $Station->Station_DayBeforeBook;?>"/>
    
</div>

<!-- <label>Station_DayBeforeBook <input type="text" name="Station_DayBeforeBook" value ="<?php echo $Station->Station_DayBeforeBook;?>"/></label><br> -->

<div class="form-group ml-3 mr-3 mb-5">
    <label>District_ID</label>
    <input type="text" class="form-control w-90" name="District_ID" value ="<?php echo $Station->District_ID;?>"/>
    
</div>

<!-- <label>District_ID <input type="text" name="District_ID" value ="<?php echo $Station->District_ID;?>"/></label><br> -->


<br>
<input type = "hidden" name ="controller" value ="station"/>
<input type = "hidden" name ="Station_ID" value ="<?php echo $Station->Station_ID;?>"/>

<div class="d-flex justify-content-center">
    <button type="submit" name="action" class="btn btn-danger mb-5" value="index">Back</button>
    <button type="submit" name="action" class="btn btn-info ml-2 mb-5" value="update">Update</button>
</div>

</form>

</div>



