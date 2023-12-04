<div class="card">
  <div class="card-body">
    <h5 class="card-title">A- Identifications</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <!--NAME-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Descriptions</label><div class="col-sm-10"><input name="descriptions" type="text" class="form-control" /></div></div>
            <!--Brand-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Brand</label><div class="col-sm-10"><input name="brands" type="text" class="form-control" /></div></div>
            <!----WIDTH-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Width</label><div class="col-md-2"><input name="width" type="text" class="form-control" id="inputCity"  /></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="units_width" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div>
            </div>
            <!----LENGTH-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Length</label><div class="col-md-2"><input name="length" type="text" class="form-control" id="inputCity"  /></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="units_lenght" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div></div>
            <!----THICKNESS-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Thickness</label><div class="col-md-2"><input name="thickness" type="text" class="form-control" id="inputCity"  /></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="units_thickness" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div></div>
            <!----SPECIFIC SIZES-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Sizes(S-M-L) </label><div class="col-md-2"><?php include("../../sql/list/dosage/sizes/list_size_1.php");?><select name="sizes_specific" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/sizes/list_size_2.php");?></select></div></div>
            <!----CHARRIERS-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Charrieres(CH)</label><div class="col-md-2"><?php include("../../sql/list/dosage/sizes_charrieres/list_charrieres_1.php");?><select name="sizes_charriere" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/sizes_charrieres/list_charrieres_2.php");?></select></div></div>
            <!----GAUGES-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Gauges (G)</label><div class="col-md-2"><?php include("../../sql/list/dosage/sizes_gauss/list_gauss_1.php");?><select name="sizes_gauzes" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/sizes_gauss/list_gauss_2.php");?></select></div></div>
            <!----COLORS-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Colors</label><div class="col-md-2"><?php include("../../sql/list/dosage/sizes_color/list_color_1.php");?><select name="sizes_colors" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/sizes_color/list_color_2.php");?></select></div></div>
            <!-- SIZES UNITS -->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Sizes Units</label><div class="col-md-2"><input name="sizes_mesurs" type="text" class="form-control" id="inputCity"/></div></div>
            <!----QUANTITY-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Number in the Package</label><div class="col-md-2"><input name="QtPackages" type="number" class="form-control" id="inputCity"/></div></div>
            <!----STERIL OR UNSTERIL-->
            <fieldset class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Cleanliness</legend>
                <div class="col-sm-10">
                    <!---Steril-->
                    <div class="form-check"><input class="form-check-input" type="radio" name="cleanliness" id="steril_identification_others" value="Steril"><label class="form-check-label" for="steril_identification_others">Steril</label></div>
                    <!--Unsteril-->
                    <div class="form-check"><input class="form-check-input" type="radio" name="cleanliness" id="UnSteril_identification_others" value="" checked><label class="form-check-label" for="UnSteril_identification_others">Unsteril</label></div>
                </div>
            </fieldset>
            <!----TYPES-->
            <div class="row mb-3"> <label for="inputTbext" class="col-sm-2 col-form-label">Types</label><div class="col-md-2"><?php include("../../sql/list/types/list_types_1.php");?><select name="types" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/types/list_types_2.php");?></select></div></div> 
            <!----FORM-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Forms</label><div class="col-md-2"><?php include("../../sql/list/forms_cons/list_forms_1.php");?><select name="forms" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/forms_cons/list_forms_2.php");?></select></div></div> 
            <!-- PERUPTION DATE -->
            <div class="row mb-3"><label for="inputDate" class="col-sm-2 col-form-label">Peremption Date **</label><div class="col-md-2"><input name="expiration_date" type="date" class="form-control"></div></div>
            <!----AOSSICATION NAME-->
            <div class="text-center"><h5 class="card-title">Associations</h5></div>
            <!-- NAME -->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Name</label><div class="col-md-2"><input name="association_descriptions" type="text" class="form-control" id="inputCity" /></div></div>
            <!----WIDTH-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Width</label><div class="col-md-2"><input name="association_width" type="text" class="form-control" id="inputCity"  /></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="associations_units_width" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div></div>
            <!----LENGTH-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Length</label><div class="col-md-2"><input name="association_length" type="text" class="form-control" id="inputCity"  /></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="associations_units_lenght" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div></div>
            <!----SIZES-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Sizes</label><div class="col-md-2"><input name="association_sizes" type="text" class="form-control" id="inputCity"  /></div></div>
            <!----TYPES-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Types</label><div class="col-md-2"><?php include("../../sql/list/types/list_types_1.php");?><select name="association_types" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/types/list_types_2.php");?></select></div></div> 
            <!----FORM-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Forms</label><div class="col-md-2"><?php include("../../sql/list/forms_cons/list_forms_1.php");?><select name="association_form" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/forms_cons/list_forms_2.php");?></select></div></div>
        </div>           
    </div>
</div>