 <?php
        if($_GET['idProduit'] ==""){
        echo "Not found";
        }else{
        // GET N'EST PAS VIDE 
        $id_abrev = $_GET['idProduit'];

                // savoire si medicine ou consumable ou materiel-->

        $id_med = substr($id_abrev, 0, 3);
        //ID CONS
        $id_cons = substr($id_abrev, 0, 7);

        /*==================MEDICINE=====================*/
        include_once("categories/medicines.php");
        /*==================CONS MED=====================*/
        include_once("categories/cons_med.php");
        include_once("categories/medicines.php");
        /*==================CONS MED=====================*/
        include_once("categories/mat_med.php");
        /*==================CONS LOG=====================*/
        include_once("categories/cons_log.php");
        /*==================MAT LOG=====================*/
        include_once("categories/mat_log.php");
        /*==================CONS TEC=====================*/
        include_once("categories/cons_tec.php");
        /*==================MAT TEC=====================*/
        include_once("categories/mat_tec.php");
        /*==================CONS ITC=====================*/
        include_once("categories/cons_itc.php");
        /*==================MAT ITC=====================*/
        include_once("categories/mat_itc.php");
        /*==================CONS FOO=====================*/
        include_once("categories/cons_foo.php");
        /*==================MAT FOO=====================*/
        include_once("categories/mat_foo.php");
        /*==================MAT IMO=====================*/
        include_once("categories/mat_imo.php");
        }
?>

<section class="sectio">
<div class="row">

<div class="col-lg-6">
 <div class="card">
    <div class="card-body">             
        <h5 class="card-title">
                <p class="card-text">Categories : <?=$categories?></p>
        </h5>

        <p class="card-text">Name : <?=$Name?> </p>

        <p class="card-text">Used For : <?=$Used_for?> </p>

        <p class="card-text"> Price : <?=$Prices_quantity?>
            <?=$Prices_Box_name?> Cost <?=$Prices?> Ariary
        </p>

        <p class="card-text">Location : <?=$Location?></p>
            
        <p class="card-text">QT Stock : <?=$Qt?></p>

            <div class= "text-center">
                <button type="button" class="btn btn-primary">Ordered</button>
                <a href="../login" class="btn btn-primary">Login</a>
            </div>
    </div>
</div>
</div>
<div class="col-lg-6">
 <div class="card">
    <div class="card-body">
    <h5 class="card-title">
            PICTURES
        </h5>
        
    <img src="<?=$link_image;?>" class="card-img-bottom" alt="...">
    </div>
 </div>
</div>


</div>
</section>
<!-- End Card  with an image on bottom -->