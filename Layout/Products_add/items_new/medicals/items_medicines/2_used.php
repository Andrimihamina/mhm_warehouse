<div class="card">
    <div class="card-body">
        <h5 class="card-title">B-  Used</h5>
        
        <!-- APPLICATIONS -->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Applications **</label>
            <div class="col-md-2"><?php include("../../sql/list/applications/list_applications_1.php");?><select name="application" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/applications/list_applications_2.php");?></select></div>
        </div>

        <!-- CLASSIFCIATIONS -->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">CLassifications **</label>
            <div class="col-md-2"><?php include("../../sql/list/classifications/classifications/list_classifications_1.php");?><select name="classification_0" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/classifications/classifications/list_classifications_2.php");?></select></div>
        </div>
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Sub Classifications **</label>
            <div class="col-md-2"><?php include("../../sql/list/classifications/subclassifications/list_subclassifications_1.php");?><select name="classification_1" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/classifications/subclassifications/list_subclassifications_2.php");?></select></div>
        </div>
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Sub Sub Classifications</label>
            <div class="col-md-2"><?php include("../../sql/list/classifications/subclassifications/list_subclassifications_1.php");?><select name="classification_2" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/classifications/subclassifications/list_subclassifications_2.php");?></select></div>
        </div>
    </div>
</div>
