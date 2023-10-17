<div class="card">
  <div class="card-body">
    <h5 class="card-title">A- Identifications</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <!--NAME-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Descriptions</label><div class="col-sm-10"><input type="text" class="form-control" value="<?=$edits[0]["Descriptions"]?>" disabled></div></div>
            <!--NAME-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Descriptions</label><div class="col-sm-10"><input name="descriptions" type="text" class="form-control" value="<?=$edits[0]["name_check"]?>"></div></div>
            <!--MODEL-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Model</label><div class="col-sm-10"><input name="model" type="text" class="form-control" value="<?=$edits[0]["model"]?>"></div></div>
            <!--SEREAL N.-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Sereal N.</label><div class="col-sm-10"><input name="serealNumber" type="text" class="form-control" value="<?=$edits[0]["sereal_number"]?>"></div></div>
            <!--MAKER-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Maker</label><div class="col-sm-10"><input name="Maker" type="text" class="form-control" value="<?=$edits[0]["manufacturer_name"]?>"></div></div>
            <!----CHECK-->
            <div class="text-center"><h5 class="card-title">CHEKING</h5></div>
            <!-- SATE -->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">State</label><div class="col-md-2"><?php include("../../sql/list/state/list_state_1.php");?><select name="states" id="inputState" class="form-select"><option selected value="<?=$state?>"><?=$states?></option><option>Choose...</option><?php include("../../sql/list/state/list_state_2.php");?></select></div></div> 
            <!----MANUFACTURED DATE-->
            <div class="row mb-3"><label for="inputDate" class="col-sm-2 col-form-label">Manufactered Date</label><div class="col-md-2"><input name="manifDate" type="date" class="form-control" value="<?=$manufacture_date?>"></div></div>
            <!----LAST CHECK-->
            <div class="row mb-3"><label for="inputDate" class="col-sm-2 col-form-label">Last Check</label><div class="col-md-2"><input name="Check" type="date" class="form-control" value="<?=$last_check?>"></div></div>
            <!----INTERVAL CONTROL-->
            <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Interval Control</label><div class="col-md-2"><input name="IntControl" type="texte" class="form-control" id="inputCity"  value="<?=$routing_check?>"></div></div>
             <!-- SUBMIT -->
            <div class="text-center"><div class="row mb-3"><div class="col-sm-10"><button type="submit" name="edit" class="btn btn-primary" value ="<?=$edits[0]["id_mat_tec"]?>">EDIT</button></div></div></div>  
        </div>           
    </div>
</div>