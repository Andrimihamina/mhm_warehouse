<!-- HEAD -->
<?php
 $B_head ="Technicals";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_tec.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Locations";
 $title ="Title/title_four.php";
 $section = "section cons_tec";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "technicals/consumables/locations/edit.php";
    // LINK EDIT
      $link_edit = "edit_cons_tec_id.php";
      $id ="id_code_cons_tec";
      $id_id ="id_cons_tec";
      $brands ="brand_cons_tec";
      $Descriptions ="Descriptions";
      $loc= "cons_tec_loc";

    // LINK LOCATION
      $link_location ="edit_cons_tec_locations.php";
      $link_man_loc_1 ="locations_cons_tec/locations/list_locations_1.php";
      $link_man_loc_2 = "locations_cons_tec/locations/list_locations_2.php";
      $link_sub_loc_1 ="locations_cons_tec/sublocations/list_sublocations_1.php";
      $link_sub_loc_2 = "locations_cons_tec/sublocations/list_sublocations_2.php";
      $link_sub_sub_loc_1 ="locations_cons_tec/subsublocations/list_subsublocations_1.php";
      $link_sub_sub_loc_2 = "locations_cons_tec/subsublocations/list_subsublocations_2.php";
  ?>

  <!-- BODY -->
  <?php require_once ("layout_cons/c_locations.php");?>


<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
