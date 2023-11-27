<!-- HEAD -->
<?php
 $B_head ="Office Supplies";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_log.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Warehouse";
 $title ="Title/title_four.php";
 $section = "section mat_logs";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "Logistics/materials/authorizations/13_warehouse.php";
    // LINK EDIT
      $link_edit = "edit_mat_log_id.php";
    // LINK AUTHORIZATIONS
      $link_authorization ="edit_mat_log_aut_passive.php";
      $id ="id_code_mat_log";
      $id_id ="id_mat_log";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
 ?>

<!-- BODY -->
<?php require_once ("layout_cons/f_13_warehouse.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>