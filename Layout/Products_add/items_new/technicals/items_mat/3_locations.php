<div class="card">
    <div class="card-body">
        <h5 class="card-title">C-  Locations</h5>
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Locations**</label>
            <div class="col-md-2"><?php include("../../sql/list/locations_mat_tec/locations/list_locations_1.php");?><select name="location_0" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/locations_mat_tec/locations/list_locations_2.php");?></select></div>
        </div>
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Sub Locations**</label>
            <div class="col-md-2"><?php include("../../sql/list/locations_mat_tec/sublocations/list_sublocations_1.php");?><select name="location_1" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/locations_mat_tec/sublocations/list_sublocations_2.php");?></select></div>
        </div>
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Sub Sub Locations</label>
            <div class="col-md-2"><?php include("../../sql/list/locations_mat_tec/subsublocations/list_subsublocations_1.php");?><select name="location_2" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/locations_mat_tec/subsublocations/list_subsublocations_2.php");?></select></div>
        </div>
    </div>
</div> 
