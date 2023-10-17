<!-- HEAD -->
<?php
 $B_head ="It & Communications";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_itc.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Locations";
 $title ="Title/title_four.php";
 $section = "section cons_itc";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "itc/consumables/locations/edit.php";
    // LINK EDIT
      $link_edit = "edit_cons_itc_id.php";
      $id ="id_code_cons_itc";
      $id_id ="id_cons_itc";
      $brands ="brand_cons_itc";
      $Descriptions ="Descriptions";
      $loc= "cons_itc_loc";

    // LINK LOCATION
      $link_location ="edit_cons_itc_locations.php";
      $link_man_loc_1 ="locations_cons_itc/locations/list_locations_1.php";
      $link_man_loc_2 = "locations_cons_itc/locations/list_locations_2.php";
      $link_sub_loc_1 ="locations_cons_itc/sublocations/list_sublocations_1.php";
      $link_sub_loc_2 = "locations_cons_itc/sublocations/list_sublocations_2.php";
      $link_sub_sub_loc_1 ="locations_cons_itc/subsublocations/list_subsublocations_1.php";
      $link_sub_sub_loc_2 = "locations_cons_itc/subsublocations/list_subsublocations_2.php";
  ?>

  <!-- BODY -->
  <?php require_once ("layout_cons/c_locations.php");?>


<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
