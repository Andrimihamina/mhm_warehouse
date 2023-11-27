<!-- HEAD -->
<?php
 $B_head ="Office Supplies";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_log.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Locations";
 $title ="Title/title_four.php";
 $section = "section cons_log";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "logistics/consumables/locations/edit.php";
    // LINK EDIT
      $link_edit = "edit_cons_log_id.php";
      $id ="id_code_cons_log";
      $id_id ="id_cons_log";
      $brands ="brand_cons_log";
      $Descriptions ="Descriptions";
      $loc= "cons_log_loc";

    // LINK LOCATION
      $link_location ="edit_cons_log_locations.php";
      $link_man_loc_1 ="locations_cons_log/locations/list_locations_1.php";
      $link_man_loc_2 = "locations_cons_log/locations/list_locations_2.php";
      $link_sub_loc_1 ="locations_cons_log/sublocations/list_sublocations_1.php";
      $link_sub_loc_2 = "locations_cons_log/sublocations/list_sublocations_2.php";
      $link_sub_sub_loc_1 ="locations_cons_log/subsublocations/list_subsublocations_1.php";
      $link_sub_sub_loc_2 = "locations_cons_log/subsublocations/list_subsublocations_2.php";
  ?>

  <!-- BODY -->
  <?php require_once ("layout_cons/c_locations.php");?>


<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
