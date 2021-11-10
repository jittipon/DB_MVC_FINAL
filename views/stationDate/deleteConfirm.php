<div class="justify-content-center">

    <h2 class="text-center mb-5">Are you sure to delete this StationDate?</h2>

    <div class=" d-flex justify-content-center">
        <form method="get" action="">

            <input type="hidden" name="controller" value="stationDate" />
            <input type="hidden" name="StationDate_ID" value="<?php echo $StationDate->StationDate_ID; ?>" />
            <button type="submit" name="action" class="btn btn-light" value="index">Back</button>
            <button type="submit" name="action" class="btn btn-danger" value="deleteStation">Delete</button>

        </form>
    </div>

</div>