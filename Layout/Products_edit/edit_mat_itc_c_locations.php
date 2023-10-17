<!-- HEAD -->
<?php
 $B_head ="It & Communications";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_itc.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Locations";
 $title ="Title/title_four.php";
 $section = "section mat_itc";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "itc/materials/locations/edit.php";
    // LINK EDIT
      $link_edit = "edit_mat_itc_id.php";
      $id ="id_code_mat_itc";
      $id_id ="id_mat_itc";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
      $loc= "mat_itc_loc";
 
    // LINK LOCATION
      $link_location ="edit_mat_itc_locations.php";
      $link_man_loc_1 ="locations_mat_itc/locations/list_locations_1.php";
      $link_man_loc_2 = "locations_mat_itc/locations/list_locations_2.php";
      $link_sub_loc_1 ="locations_mat_itc/sublocations/list_sublocations_1.php";
      $link_sub_loc_2 = "locations_mat_itc/sublocations/list_sublocations_2.php";
      $link_sub_sub_loc_1 ="locations_mat_itc/subsublocations/list_subsublocations_1.php";
      $link_sub_sub_loc_2 = "locations_mat_itc/subsublocations/list_subsublocations_2.php";
  ?>

  <!-- BODY -->
  <?php require_once ("layout_cons/c_locations.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
