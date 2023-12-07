<?php
/*============== UNITS SIZES  WIDTH ==========================*/
// UNITS WIDTH
if($units_width != NULL AND $units_width != "Choose..." AND $units_width != 0){
     $sql_units_width= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_width'";
     $requete_units_witdh  = $db->query($sql_units_width);
     $affiche_units_width= $requete_units_witdh ->fetchAll();
   
    $affiche_units_width = $affiche_units_width[0]["measurs_descriptions"];
}else{$affiche_units_width = NULL; $units_width = 0;}

// UNITS LENGHT
if($units_lenght != NULL AND $units_lenght != "Choose..." AND $units_lenght != 0){
     $sql_units_lenght= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_lenght'";
     $requete_units_lenght  = $db->query($sql_units_lenght);
     $affiche_units_lenght= $requete_units_lenght ->fetchAll();
   
    $affiche_units_lenght= $affiche_units_lenght[0]["measurs_descriptions"];
}else{$affiche_units_lenght = NULL; $units_lenght = 0;}

// UNITS THICKNESS
if($units_thickness != NULL AND $units_thickness != "Choose..." AND $units_thickness != 0){
     $sql_units_thickness= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_thickness'";
     $requete_units_thickness  = $db->query($sql_units_thickness);
     $affiche_units_thickness= $requete_units_thickness ->fetchAll();
   
    $affiche_units_thickness= $affiche_units_thickness[0]["measurs_descriptions"];
}else{$affiche_units_thickness = NULL; $units_thickness = 0;}

//  ================= MESUREMENTS =====================*/
// SIZES S-M-L
if($sizes_specific != NULL AND $sizes_specific != "Choose..." AND $sizes_specific != 0){
     $sql_sizes_specific = "SELECT * FROM `cons_sizes` WHERE `id_sizes` = '$sizes_specific'";
     $requete_sizes_specific  = $db->query($sql_sizes_specific);
     $affiche_sizes_specific= $requete_sizes_specific ->fetchAll();
   
    $affiche_sizes_specific= $affiche_sizes_specific[0]["sizes_descriptions"];
}else{$affiche_sizes_specific = NULL; $sizes_specific = 0 ;}

// CHARRIERS (CH)
if($sizes_charriere != NULL AND $sizes_charriere != "Choose..." AND $sizes_charriere != 0){
     $sql_sizes_charrieres= "SELECT * FROM `cons_charrieres` WHERE `id_charrieres` = $sizes_charriere";
     $requete_sizes_charrieres = $db->query($sql_sizes_charrieres);
     $affiche_sizes_charrieres  = $requete_sizes_charrieres ->fetchAll();

     $affiche_sizes_charrieres = $affiche_sizes_charrieres[0]["charrieres_descriptions"];
}else{$affiche_sizes_charrieres = NULL; $sizes_charriere = 0;}

// GAUZES (G)
if($sizes_gauzes != NULL AND $sizes_gauzes != "Choose..." AND $sizes_gauzes != 0){
     $sql_sizes_gauzes= "SELECT * FROM `cons_gauss` WHERE `id_gauss` = $sizes_gauzes";
     $requete_sizes_gauzes  = $db->query($sql_sizes_gauzes);
     $affiche_sizes_gauzes  = $requete_sizes_gauzes ->fetchAll();

     $affiche_sizes_gauzes = $affiche_sizes_gauzes[0]["gauss_descriptions"];
}else{$affiche_sizes_gauzes = NULL; $sizes_gauzes = 0; }

// COLOR 
if($sizes_colors != NULL AND $sizes_colors != "Choose..." AND $sizes_colors != 0){
     $sql_sizes_color= "SELECT * FROM `cons_colors` WHERE `id_colors` = $sizes_colors";
     $requete_sizes_color  = $db->query($sql_sizes_color);
     $affiche_sizes_color  = $requete_sizes_color ->fetchAll();

    $affiche_sizes_color = $affiche_sizes_color[0]["colors_descriptions"];
}else{$affiche_sizes_color = NULL; $sizes_colors = 0; }

/*======================= ASSOCIATION =====================*/
// UNITS WIDTH
if($associations_units_width != NULL AND $associations_units_width != "Choose..." AND $associations_units_width != 0){
     $sql_units_association_width= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$associations_units_width'";
     $requete_units_association_width  = $db->query($sql_units_association_width);
     $affiche_units_association_width = $requete_units_association_width ->fetchAll();
   
    $affiche_units_association_width = $affiche_units_association_width[0]["measurs_descriptions"];
}else{$affiche_units_association_width = NULL; $associations_units_width = 0;}

// UNITS LENGHT
if($associations_units_lenght != NULL AND $associations_units_lenght != "Choose..." AND $associations_units_lenght != 0){
     $sql_units_association_length = "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$associations_units_lenght'";
     $requete_units_association_length  = $db->query($sql_units_association_length);
     $affiche_units_association_length = $requete_units_association_length ->fetchAll();
   
    $affiche_units_association_length= $affiche_units_association_length[0]["measurs_descriptions"];
}else{$affiche_units_association_length = NULL; $associations_units_lenght = 0;}
/*======================= SIZE UNITS ================*/
if($sizes_mesurs != NULL AND $sizes_mesurs != "" AND $sizes_mesurs != 0){
$affiche_sizes_mesurs = $sizes_mesurs;
     }else{$affiche_sizes_mesurs = NULL; $sizes_mesurs = 0;}
?>