<div class="card">
  <div class="card-body">
    <h5 class="card-title">A- Identifications</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <!--BRANDS-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Brands</label><div class="col-sm-10"><input name="brands" type="text" class="form-control" value="<?=$edits_med_id[0]["brand_cons_med"]?>"></div></div>
            <!-- DESCRIPTIONS -->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Descriptions</label><div class="col-sm-10"><input  type="text" class="form-control" value="<?=$edits_med_id[0]["Descriptions"]?>" disabled></div></div>
            <!--NAME-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Descriptions</label><div class="col-sm-10"><input name="descriptions" type="text" class="form-control" value="<?=$edits_med_id[0]["Name"]?>"></div></div>
            <!----WIDTH-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Width</label><div class="col-md-2"><input name="width" type="number" class="form-control" id="inputCity"  value="<?=$edits_med_id[0]["sizes_width"]?>"></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="units_width" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["units_sizes_width"];?>"><?=$units_sizes_width?></option><option>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div>
            </div>
            <!----LENGTH-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Length</label><div class="col-md-2"><input name="length" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["sizes_length"]?>"></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="units_lenght" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["units_sizes_lenght"];?>"><?=$units_sizes_lenght?></option><option>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div></div>
            <!----THICKNESS-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Thickness</label><div class="col-md-2"><input name="thickness" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["size_thickness"]?>"></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="units_thickness" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["units_size_thichness"];?>"><?=$units_size_thichness?></option><option>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div></div>
            <!----SPECIFIC SIZES-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Sizes(S-M-L) </label><div class="col-md-2"><?php include("../../sql/list/dosage/sizes/list_size_1.php");?><select name="sizes_specific" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["sizes_specific"];?>"><?=$sizes_specific?></option><option>Choose...</option><?php include("../../sql/list/dosage/sizes/list_size_2.php");?></select></div></div>
            <!----CHARRIERS-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Charrieres(CH)</label><div class="col-md-2"><?php include("../../sql/list/dosage/sizes_charrieres/list_charrieres_1.php");?><select name="sizes_charriere" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["sizes_charrieres"];?>"><?=$sizes_charrieres?></option><option>Choose...</option><?php include("../../sql/list/dosage/sizes_charrieres/list_charrieres_2.php");?></select></div></div>
            <!----GAUGES-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Gauges (G)</label><div class="col-md-2"><?php include("../../sql/list/dosage/sizes_gauss/list_gauss_1.php");?><select name="sizes_gauzes" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["sizes_gauzes"];?>"><?=$sizes_gauzes?></option><option>Choose...</option><?php include("../../sql/list/dosage/sizes_gauss/list_gauss_2.php");?></select></div></div>
            <!----COLORS-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Colors</label><div class="col-md-2"><?php include("../../sql/list/dosage/sizes_color/list_color_1.php");?><select name="sizes_colors" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["sizes_color"];?>"><?=$sizes_color?></option><option>Choose...</option><?php include("../../sql/list/dosage/sizes_color/list_color_2.php");?></select></div></div>
            <!-- SIZES UNITS -->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Sizes Units</label><div class="col-md-2"><input name="sizes_mesurs" type="text" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["sizes_units"]?>"></div></div>
            <!----QUANTITY-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Number in the Package</label><div class="col-md-2"><input name="QtPackages" type="number" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["packages"]?>"></div></div>
            <!----STERIL OR UNSTERIL-->
            <fieldset class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Cleanliness</legend>
                <div class="col-sm-10">
                    <!---Steril-->
                    <div class="form-check"><input class="form-check-input" type="radio" name="cleanliness" id="steril_identification_others" value="Steril" <?php $steril = $edits_med_id[0]["cleanliness"];if($steril =="Steril"){echo"checked";}?>><label class="form-check-label" for="steril_identification_others" >Steril</label></div>
                    <!--Unsteril-->
                    <div class="form-check"><input class="form-check-input" type="radio" name="cleanliness" id="UnSteril_identification_others"  <?php $unsteril = $edits_med_id[0]["cleanliness"];if($unsteril == NULL OR $unsteril ==""){echo"checked";}?>><label class="form-check-label" for="UnSteril_identification_others" >Unsteril</label></div>
                </div>
            </fieldset>
            <!----TYPES-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Types</label><div class="col-md-2"><?php include("../../sql/list/types/list_types_1.php");?><select name="types" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["types"]?>"><?=$types;?></option><option>Choose...</option><?php include("../../sql/list/types/list_types_2.php");?></select></div></div> 
            <!----FORM-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Forms</label><div class="col-md-2"><?php include("../../sql/list/forms_cons/list_forms_1.php");?><select name="forms" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["form"]?>"><?=$form;?></option><option>Choose...</option><?php include("../../sql/list/forms_cons/list_forms_2.php");?></select></div></div> 
            <!-- PERUPTION DATE -->
            <div class="row mb-3"><label for="inputDate" class="col-sm-2 col-form-label">Peremption Date</label><div class="col-md-2"><input name="expiration_date" type="date" class="form-control" value="<?=$edits_med_id[0]["expiration_date"]?>"></div></div>
            <!----AOSSICATION NAME-->
            <div class="text-center"><h5 class="card-title">Associations</h5></div>
            <!-- NAME -->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Name</label><div class="col-sm-10"><input name="association_descriptions" type="text" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["association_descriptions"]?>"></div></div>
            <!----WIDTH-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Width</label><div class="col-md-2"><input name="association_width" type="number" class="form-control" id="inputCity"  value="<?=$edits_med_id[0]["association_width"]?>"></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="associations_units_width" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["units_association_width"];?>"><?=$units_width_associations?></option><option>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div></div>
            <!----LENGTH-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Length</label><div class="col-md-2"><input name="association_length" type="number" class="form-control" id="inputCity"  value="<?=$edits_med_id[0]["association_length"]?>" ></div><div class="col-md-2"><?php include("../../sql/list/dosage/measurs/list_measurs_1.php");?><select name="associations_units_lenght" id="inputState" class="form-select"><option selected value="<?=$edits_med_id[0]["units_association_length"];?>"><?=$units_lenght_associations?></option><option>Choose...</option><?php include("../../sql/list/dosage/measurs/list_measurs_2.php");?></select></div></div>
            <!----SIZES-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Sizes</label><div class="col-md-2"><input name="association_sizes" type="text" class="form-control" id="inputCity" value="<?=$edits_med_id[0]["association_sizes"]?>"></div></div>
            <!----TYPES-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Types</label><div class="col-md-2"><?php include("../../sql/list/types/list_types_1.php");?><select name="association_types" id="inputState" class="form-select"><option selected value="<?=$association_types;?>"><?=$units_lenght_associations?></option><option>Choose...</option><?php include("../../sql/list/types/list_types_2.php");?></select></div></div> 
            <!----FORM-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Forms</label><div class="col-md-2"><?php include("../../sql/list/forms_cons/list_forms_1.php");?><select name="association_form" id="inputState" class="form-select"><option selected value="<?=$association_form;?>"><?=$association_form?></option><option>Choose...</option><?php include("../../sql/list/forms_cons/list_forms_2.php");?></select></div></div>
             <!-- SUBMIT -->
            <div class="text-center"><div class="row mb-3"><div class="col-sm-10"><button type="submit" name="edit" class="btn btn-primary" value ="<?=$edits_med_id[0]["id_cons_med"]?>">EDIT</button></div></div></div>
        </div>           
    </div>
</div>