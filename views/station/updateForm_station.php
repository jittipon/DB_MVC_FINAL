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
    <label>Institution Name</label>
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
<!-- <div class="form-group ml-3 mr-3 mb-5">
    <label>District_ID</label>
    <input type="text" class="form-control w-90" name="District_ID" value ="<?php echo $Station->District_ID;?>"/>
    
</div>
</div> -->

<!-- <label>District_ID <input type="text" name="District_ID" value ="<?php echo $Station->District_ID;?>"/></label><br> -->

        <div class="form-group">
            <label for="Province">จังหวัด</label>
            <select class="form-control w-90" name="Province_Id" id="Province">
            <?php foreach($Province_list as $Province){
                echo "<option value=$Province->Province_Id";
                if($Province->Province_Id == $Station->Province_Id) {echo " selected='selected'";}
                echo ">$Province->Province_NameTH</option>";
            }?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="Amphure">อำเภอ/เขต</label>
            <select class="form-control w-90" name="Amphure_Id" id="Amphure">
            <?php foreach($Amphure_list as $Amphure){
                echo "<option value=$Amphure->Amphure_Id";
                if($Amphure->Amphure_Id == $Station->Amphure_Id) {echo " selected='selected'";}
                echo ">$Amphure->Amphure_NameTH</option>";
            }?>
            </select>
        </div>

        <div class="form-group">
            <label for="District">ตำบล/เเขวง</label>
            <select class="form-control w-90" name="District_Id" id="District">
            <?php foreach($District_list as $District){
                echo "<option value=$District->District_Id";
                if($District->District_Id == $Station->District_ID) {echo " selected='selected'";}
                echo ">$District->District_NameTH</option>";
            }?>
            </select>
        </div> 


<br>
<input type = "hidden" name ="controller" value ="station"/>
<input type = "hidden" name ="Station_ID" value ="<?php echo $Station->Station_ID;?>"/>

<div class="d-flex justify-content-center">
    <button type="submit" name="action" class="btn btn-danger mb-5" value="index">Back</button>
    <button type="submit" name="action" class="btn btn-info ml-2 mb-5" value="update">Update</button>
</div>

</form>

</div>


<script type="text/javascript">
        $(document).ready(function(){
                $("#Province").change(function(){
                        var Province_id=$(this).val();
                        $.ajax({
                                url:"./provinceOnChange.php",
                                method:"GET",
                                data:{Province_Id:Province_id},
                                success:function(result){
                                        $("#Amphure").html(result);
                                }
                        });
                });

                $("#Province").change(function(){
                        var Amphure_id=0;
                        $.ajax({
                                url:"./amphureOnChange.php",
                                method:"GET",
                                data:{Amphure_Id:Amphure_id},
                                success:function(result){
                                        $("#District").html(result);
                                }
                        });
                });

                $("#Amphure").change(function(){
                        var Amphure_id=$(this).val();
                        $.ajax({
                                url:"./amphureOnChange.php",
                                method:"GET",
                                data:{Amphure_Id:Amphure_id},
                                success:function(result){
                                        $("#District").html(result);
                                }
                        });
                 });

        });
</script>


