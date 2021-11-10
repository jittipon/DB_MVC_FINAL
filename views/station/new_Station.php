<div class="d-flex justify-content-center">
    <form method="get" action="" class="w-50 p-3 mt-4">

        <div class="form-group mt-2 ml-3 mr-3">
            <label>Station_ID</label>
            <input type="text" class="form-control w-90" aria-describedby="IDhelp" name="Station_ID"/>
            <small id="IDhelp" class="form-text text-muted">You can type new ID station here.</small>
        </div>

        <!-- <label>Station_ID  <input type="text" name="Station_ID"  /></label><br> -->

        <div class="form-group ml-3 mr-3">
            <label>Station_Name</label>
            <input type="text" class="form-control w-90" name="Station_Name"/>
    
        </div>

        <!-- <label>Station_Name  <input type="text" name="Station_Name"  /></label><br> -->

        <div class="form-group ml-3 mr-3">
            <label>Station_Address</label>
            <input type="text" class="form-control w-90" name="Station_Address"/>
    
        </div>

        <!-- <label>Station_Address  <input type="text" name="Station_Address" /></label><br> -->

        <div class="form-group ml-3 mr-3">
            <label>Station_StartTime</label>
            <input type="time" class="form-control w-90" name="Station_StartTime"/>
    
        </div>

        <!-- <label>Station_StartTime  <input type="time" name="Station_StartTime"  /></label><br> -->

        <div class="form-group ml-3 mr-3">
            <label>Station_DayBeforeBook</label>
            <input type="text" class="form-control w-90" name="Station_DayBeforeBook"/>
    
        </div>

        <!-- <label>Station_DayBeforeBook  <input type="text" name="Station_DayBeforeBook"  /></label><br> -->
        
        
        <!-- <div class="form-group ml-3 mr-3">
            <label>District_ID</label>
            <input type="text" class="form-control w-90" name="District_ID"/>
    
        </div> -->

        <!-- <label>District_ID  <input type="text" name="District_ID"  /></label><br> -->

        <div class="form-group">
            <label for="Province">จังหวัด</label>
            <select class="form-control w-90" name="Province_Id" id="Province">
            <?php echo "<option hidden='hidden'>Select Province</option>";
            foreach($Province_list as $Province){
                    echo "<option value=$Province->Province_Id>$Province->Province_NameTH</option>";
            }?>
            </select>
        </div>

        
        <div class="form-group">
            <label for="Amphure">อำเภอ</label>
            <select class="form-control w-90" name="Amphure_Id" id="Amphure">
            <?php echo "<option hidden='hidden'>Select Province First</option>";?>
            </select>
        </div>

        <div class="form-group">
            <label for="District">เขต/ตำบล</label>
            <select class="form-control w-90" name="District_Id" id="District">
            <?php echo "<option hidden='hidden'>Select Amphure First</option>";?>
            </select>
        </div> 


        

        
        <input type="hidden" name="controller" value="station"/>
        <div class="d-flex justify-content-center">
            <button type="submit" name="action" class="btn btn-danger mb-5" value="index">Back</button>
            <button type="submit" name="action" class="btn btn-info ml-2 mb-5" value="add">save</button>

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