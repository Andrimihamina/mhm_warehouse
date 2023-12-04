<div class="card">
  <div class="card-body">
    <h5 class="card-title">A- Identifications</h5>
    <form method="post" enctype="multipart/form-data">
    <div class="row g-3">
        <!-- GENERIC NAME -->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Generic Name **</label> 
            <div class="col-sm-10"><input name="commercial_name" type="text" class="form-control" require/></div>
        </div>
        <!-- ACTIVAL NAME -->
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Actival Name **</label>
            <div class="col-sm-10"><input name="actival_name_0" type="text" class="form-control" require /></div>
        </div>
        <!-- DOSAGE -->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Dosage **</label>
            <div class="col-md-2"><input name="dosage_0" type="text" class="form-control" id="inputCity" require /></div>
            <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_unit_0" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
        </div>
        <!-- DOSAGE PACKAGE-->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Dosage/Package</label>
            <div class="col-md-2"><input name="dosage_package_0" type="text" class="form-control" id="inputCity" require /></div>
            <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_unit_0" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
        </div>
        <!-- PACKAGE DOSAGE -->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Package/Dosage</label>
            <div class="col-md-2"><input name="dosage_package_quantity_0" type="text" class="form-control" id="inputCity" require /></div>
            <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_quantity_unit_0" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
        </div>
        <!-- TOTAL QUATITY -->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Total package</label>
            <div class="col-md-2"><input name="package" type="number" class="form-control" id="inputCity" require /></div>
            <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="package_unit" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
        </div>
        <!-- SWITCH -->
        <div class="row mb-5">
            <div class="col-sm-10"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"><label class="form-check-label" for="flexSwitchCheckDefault">More Actival</label></div></div>
        </div>
        <!-- FORMS -->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Forms **</label>
            <div class="col-md-2"><?php include("../../sql/list/forms/list_forms_1.php");?><select name="form" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/forms/list_forms_2.php");?></select></div>
        </div>
        <!-- EXPIRATION DATE -->
        <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Peremption Date **</label>
            <div class="col-md-2">
            <input name="expiration_date" type="date" class="form-control">
            </div>
        </div>
    </div>
  </div>
</div>




<div class="card" id="active-1">
    <div class="card-body"> 
        <h5 class="card-title"></h5>       
        <div class="row g-3">
            <!-- ACTIVAL NAME 1  -->
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Actival Name</label>
                <div class="col-sm-10"><input name="actival_name_1" type="text" class="form-control" require /></div>
            </div>
            <!-- DOSAGE -->
            <div class="row mb-3"> 
                <label for="inputText" class="col-sm-2 col-form-label">Dosage</label>
                <div class="col-md-2"><input name="dosage_1" type="text" class="form-control" id="inputCity" require /></div>
                <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_unit_1" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
            </div>
            <!-- DOSAGE PACKAGE-->
            <div class="row mb-3"> 
                <label for="inputText" class="col-sm-2 col-form-label">Dosage/Package</label>
                <div class="col-md-2"><input name="dosage_package_1" type="text" class="form-control" id="inputCity" require /></div>
                <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_unit_1" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
            </div>
            <!-- PACKAGE DOSAGE -->
            <div class="row mb-3"> 
                <label for="inputText" class="col-sm-2 col-form-label">Package/Dosage</label>
                <div class="col-md-2"><input name="dosage_package_quantity_1" type="text" class="form-control" id="inputCity" require /></div>
                <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_quantity_unit_1" id="inputState" class="form-select"><option selected>Choose..</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
            </div>
        </div>
    </div>
</div>

<div class="card" id="active-2">
    <div class="card-body">
        <h5 class="card-title"></h5>   
        <div class="row g-3">
             <!-- ACTIVAL NAME 2  -->
             <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Actival Name</label>
                <div class="col-sm-10"><input name="actival_name_2" type="text" class="form-control" require /></div>
            </div>
            <!-- DOSAGE -->
            <div class="row mb-3"> 
                <label for="inputText" class="col-sm-2 col-form-label">Dosage</label>
                <div class="col-md-2"><input name="dosage_2" type="text" class="form-control" id="inputCity" require /></div>
                <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_unit_2" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
            </div>
            <!-- DOSAGE PACKAGE-->
            <div class="row mb-3"> 
                <label for="inputText" class="col-sm-2 col-form-label">Dosage/Package</label>
                <div class="col-md-2"><input name="dosage_package_2" type="text" class="form-control" id="inputCity" require /></div>
                <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_unit_2" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
            </div>
            <!-- PACKAGE DOSAGE -->
            <div class="row mb-3"> 
                <label for="inputText" class="col-sm-2 col-form-label">Package/Dosage</label>
                <div class="col-md-2"><input name="dosage_package_quantity_2" type="text" class="form-control" id="inputCity" require /></div>
                <div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_quantity_unit_2" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div>
            </div>
        </div>
    </div>
</div>

