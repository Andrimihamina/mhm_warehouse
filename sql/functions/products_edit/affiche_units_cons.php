<?php
/*============== UNITS SIZES  WIDTH ==========================*/
// UNITS WIDTH
if($units_width != NULL AND $units_width != "Choose..."){
     $sql_units_width= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_width'";
     $requete_units_witdh  = $db->query($sql_units_width);
     $affiche_units_width= $requete_units_witdh ->fetchAll();
   
    $affiche_units_width = $affiche_units_width[0]["measurs_descriptions"];
}else{$affiche_units_width = NULL;}

// UNITS LENGHT
if($units_lenght != NULL AND $units_lenght != "Choose..."){
     $sql_units_lenght= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_lenght'";
     $requete_units_lenght  = $db->query($sql_units_lenght);
     $affiche_units_lenght= $requete_units_lenght ->fetchAll();
   
    $affiche_units_lenght= $affiche_units_lenght[0]["measurs_descriptions"];
}else{$affiche_units_lenght = NULL;}

// UNITS THICKNESS
if($units_thickness != NULL AND $units_thickness != "Choose..."){
     $sql_units_thickness= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_thickness'";
     $requete_units_thickness  = $db->query($sql_units_thickness);
     $affiche_units_thickness= $requete_units_thickness ->fetchAll();
   
    $affiche_units_thickness= $affiche_units_thickness[0]["measurs_descriptions"];
}else{$affiche_units_thickness = NULL;}

//  ================= MESUREMENTS =====================*/
// SIZES S-M-L
if($sizes_specific != NULL AND $sizes_specific != "Choose..."){
     $sql_sizes_specific = "SELECT * FROM `cons_sizes` WHERE `id_sizes` = '$sizes_specific'";
     $requete_sizes_specific  = $db->query($sql_sizes_specific);
     $affiche_sizes_specific= $requete_sizes_specific ->fetchAll();
   
    $affiche_sizes_specific= $affiche_sizes_specific[0]["sizes_descriptions"];
}else{$affiche_sizes_specific = NULL;}

// CHARRIERS (CH)
if($sizes_charriere != NULL AND $sizes_charriere != "Choose..."){
     $sql_sizes_charrieres= "SELECT * FROM `cons_charrieres` WHERE `id_charrieres` = $sizes_charriere";
     $requete_sizes_charrieres = $db->query($sql_sizes_charrieres);
     $affiche_sizes_charrieres  = $requete_sizes_charrieres ->fetchAll();

     $affiche_sizes_charrieres = $affiche_sizes_charrieres[0]["charrieres_descriptions"];
}else{$affiche_sizes_charrieres = NULL;}

// GAUZES (G)
if($sizes_gauzes != NULL AND $sizes_gauzes != "Choose..."){
     $sql_sizes_gauzes= "SELECT * FROM `cons_gauss` WHERE `id_gauss` = $sizes_gauzes";
     $requete_sizes_gauzes  = $db->query($sql_sizes_gauzes);
     $affiche_sizes_gauzes  = $requete_sizes_gauzes ->fetchAll();

     $affiche_sizes_gauzes = $affiche_sizes_gauzes[0]["gauss_descriptions"];
}else{$affiche_sizes_gauzes = NULL;}

// COLOR 
if($sizes_colors != NULL AND $sizes_colors != "Choose..."){
     $sql_sizes_color= "SELECT * FROM `cons_colors` WHERE `id_colors` = $sizes_colors";
     $requete_sizes_color  = $db->query($sql_sizes_color);
     $affiche_sizes_color  = $requete_sizes_color ->fetchAll();

    $affiche_sizes_color = $affiche_sizes_color[0]["colors_descriptions"];
}else{$affiche_sizes_color = NULL;}

/*======================= ASSOCIATION =====================*/
// UNITS WIDTH
if($associations_units_width != NULL AND $associations_units_width != "Choose..."){
     $sql_units_association_width= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$associations_units_width'";
     $requete_units_association_width  = $db->query($sql_units_association_width);
     $affiche_units_association_width = $requete_units_association_width ->fetchAll();
   
    $affiche_units_association_width = $affiche_units_association_width[0]["measurs_descriptions"];
}else{$affiche_units_association_width = NULL;}

// UNITS LENGHT
if($associations_units_lenght != NULL AND $associations_units_lenght != "Choose..."){
     $sql_units_association_length = "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$associations_units_lenght'";
     $requete_units_association_length  = $db->query($sql_units_association_length);
     $affiche_units_association_length = $requete_units_association_length ->fetchAll();
   
    $affiche_units_association_length= $affiche_units_association_length[0]["measurs_descriptions"];
}else{$affiche_units_association_length = NULL;}

?>