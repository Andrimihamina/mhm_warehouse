<div class="card">
  <div class="card-body">
    <h5 class="card-title">A- Identifications</h5>
    <form method="post" enctype="multipart/form-data">
    <div class="row g-3"> 
        <!-- GENERIC NAME -->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Generic Name</label> <div class="col-sm-10"><input name="commercial_name" type="text" class="form-control" value="<?=$edits_med_id[0]["commercial_name"]?>"></div></div>
        <!-- DECRIPTIONS-->
        <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Descriptions</label><div class="col-sm-10"><input name="Descriptions" type="text" class="form-control" value="<?=$edits_med_id[0]["Descriptions"]?>" disabled></div></div>
        
        <!-- ACTIVAL NAME --> 
        <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Actival Name</label><div class="col-sm-10"><input name="actival_name_0" type="text" class="form-control" value="<?=$edits_med_id[0]["actival_name_0"]?>"></div></div>
        <!-- DOSAGE -->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Dosage</label><div class="col-md-2"><input name="dosage_0" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["dosage_0"]?>"/></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_unit_0" id="inputState" class="form-select"><option selected value="<?=$id_dosage_unit_0?>"><?=$dosage_units_0?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>
        <!-- DOSAGE PACKAGE-->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Dosage/Package</label><div class="col-md-2"><input name="dosage_package_0" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["dosage_package_0"]?>" /></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_unit_0" id="inputState" class="form-select"><option selected value="<?=$id_dosage_package_unit_0?>"><?=$dosage_package_units_0?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>
        <!-- PACKAGE DOSAGE -->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Package/Dosage</label><div class="col-md-2"><input name="dosage_package_quantity_0" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["dosage_package_quantity_0"]?>"></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_quantity_unit_0" id="inputState" class="form-select"><option selected value="<?=$id_dosage_package_quantity_unit_0?>"><?=$dosage_package_quantity_units_0?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>
        <!-- TOTAL QUATITY -->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Total package</label><div class="col-md-2"><input name="package" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["package"]?>"></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="package_unit" id="inputState" class="form-select"><option selected value="<?=$id_package_unit_0?>"><?=$T_dosage_package_units_0?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>

        <!-- ACTIVAL NAME 1 -->
        <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Actival Name</label><div class="col-sm-10"><input name="actival_name_1" type="text" class="form-control" value="<?=$edits_med_id[0]["actival_name_1"]?>"></div></div>
        <!-- DOSAGE -->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Dosage</label><div class="col-md-2"><input name="dosage_1" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["dosage_1"]?>"/></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_unit_1" id="inputState" class="form-select"><option selected value="<?=$id_dosage_unit_1?>"><?=$dosage_units_1?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>
        <!-- DOSAGE PACKAGE-->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Dosage/Package</label><div class="col-md-2"><input name="dosage_package_1" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["dosage_package_1"]?>" /></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_unit_1" id="inputState" class="form-select"><option selected value="<?=$id_dosage_package_unit_1?>"><?=$dosage_package_units_1?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>
        <!-- PACKAGE DOSAGE -->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Package/Dosage</label><div class="col-md-2"><input name="dosage_package_quantity_1" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["dosage_package_quantity_1"]?>"></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_quantity_unit_1" id="inputState" class="form-select"><option selected value="<?=$id_dosage_package_quantity_unit_1?>"><?=$dosage_package_quantity_units_1?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>
        
        <!-- ACTIVAL NAME 2 -->
        <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Actival Name</label><div class="col-sm-10"><input name="actival_name_2" type="text" class="form-control" value="<?=$edits_med_id[0]["actival_name_2"]?>"></div></div>
        <!-- DOSAGE -->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Dosage</label><div class="col-md-2"><input name="dosage_2" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["dosage_2"]?>"/></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_unit_2" id="inputState" class="form-select"><option selected value="<?=$id_dosage_unit_2?>"><?=$dosage_units_2?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>
        <!-- DOSAGE PACKAGE-->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Dosage/Package</label><div class="col-md-2"><input name="dosage_package_2" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["dosage_package_2"]?>" /></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_unit_2" id="inputState" class="form-select"><option selected value="<?=$id_dosage_package_unit_2?>"><?=$dosage_package_units_2?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>
        <!-- PACKAGE DOSAGE -->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Package/Dosage</label><div class="col-md-2"><input name="dosage_package_quantity_2" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["dosage_package_quantity_2"]?>"></div><div class="col-md-2"><?php include("../../sql/list/dosage/units/list_units_1.php");?><select name="dosage_package_quantity_unit_2" id="inputState" class="form-select"><option selected value="<?=$id_dosage_package_quantity_unit_2?>"><?=$dosage_package_quantity_units_2?></option><?php include("../../sql/list/dosage/units/list_units_2.php");?></select></div></div>
        
        <!-- FORMS -->
        <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Forms</label><div class="col-md-2"><?php include("../../sql/list/forms/list_forms_1.php");?><select name="form" id="inputState" class="form-select"><option selected value="<?=$id_forms_1?>"><?=$id_forms?></option><?php include("../../sql/list/forms/list_forms_2.php");?></select></div></div>
        <!-- EXPIRATION DATE -->
        <div class="row mb-3"><label for="inputDate" class="col-sm-2 col-form-label">Peremption Date</label><div class="col-md-2"><input name="expiration_date" type="date" class="form-control" value="<?=$edits_med_id[0]["expiration_date"]?>"></div></div>
        <!-- SUBMIT -->
        <div class="text-center"><div class="row mb-3"><div class="col-sm-10"><button type="submit" name="edit" class="btn btn-primary" value ="<?=$edits_med_id[0]["id_med"]?>">EDIT</button></div></div></div>
    </div>
    </form>
  </div>
</div>

