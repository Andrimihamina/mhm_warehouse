<?php
  require_once("../../../../../php/dns/connect.php");
/*
=================== SIZES CHARRIERES ====================
*/
if($sizes_charriere != "NULL"){
  $sql_affiche_sizes_charrieres= "SELECT * FROM `cons_charrieres` WHERE `id_charrieres` = $sizes_charriere";

  //On excute directement la requete
  $requete_affiche_sizes_charrieres = $db->query($sql_affiche_sizes_charrieres);

  //On recupere les donnees (fetch ou fetchall)
  $affiche_sizes_charrieres  = $requete_affiche_sizes_charrieres ->fetchAll();

  $sizes_charrieres = $affiche_sizes_charrieres[0]["charrieres_descriptions"];
}else{
  $sizes_charrieres = "NULL";
} 
 
 
/*
=================== SIZES GAUZES ====================
*/
if($sizes_gauzes != "NULL"){
  $sql_affiche_sizes_gauzes= "SELECT * FROM `cons_gauss` WHERE `id_gauss` = $sizes_gauzes";

  //On excute directement la requete
  $requete_affiche_sizes_gauzes  = $db->query($sql_affiche_sizes_gauzes);

  //On recupere les donnees (fetch ou fetchall)
  $affiche_sizes_gauzes  = $requete_affiche_sizes_gauzes ->fetchAll();

  $sizes_specific_gauzes = $affiche_sizes_gauzes[0]["gauss_descriptions"];
}else{
  $sizes_specific_gauzes = "NULL";
} 

/*
=================== SIZES COLOR ====================
*/
if($sizes_color != "NULL"){
     $sql_affiche_sizes_color= "SELECT * FROM `cons_colors` WHERE `id_colors` = $sizes_color";

     //On excute directement la requete
     $requete_affiche_sizes_color  = $db->query($sql_affiche_sizes_color);

     //On recupere les donnees (fetch ou fetchall)
     $affiche_sizes_color  = $requete_affiche_sizes_color ->fetchAll();

    $sizes_specific_color = $affiche_sizes_color[0]["colors_descriptions"];
 }else{
  $sizes_specific_color = "NULL";
 }
/*
=============== SIZES SPECIFIC ===========================
*/
if($sizes_specific != "NULL"){
  $sql_affiche_sizes_specific = "SELECT * FROM `cons_sizes` WHERE `id_sizes` = '$sizes_specific'";

  //On excute directement la requete
  $requete_affiche_sizes_specific  = $db->query($sql_affiche_sizes_specific);

  //On recupere les donnees (fetch ou fetchall)
  $affiche_sizes_specific= $requete_affiche_sizes_specific ->fetchAll();

 $affiche_sizes_specific= $affiche_sizes_specific[0]["sizes_descriptions"];
}else{
$affiche_sizes_specific = "NULL";
}
/*
=============== UNITS SIZES  WIDTH ===========================
*/
if($units_size_width != "NULL"){
  $sql_affiche_units_size_width= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_size_width'";

  //On excute directement la requete
  $requete_affiche_units_sizes_witdh  = $db->query($sql_affiche_units_size_width);

  //On recupere les donnees (fetch ou fetchall)
  $affiche_units_sizes_width= $requete_affiche_units_sizes_witdh ->fetchAll();

 $affiche_units_sizes_width= $affiche_units_sizes_width[0]["measurs_descriptions"];
}else{
$affiche_units_sizes_width = "NULL";
}
/*
=============== UNITS SIZES  LENGTH ===========================
*/
if($units_size_lenght != "NULL"){
  $sql_affiche_units_size_lenght= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_size_lenght'";

  //On excute directement la requete
  $requete_affiche_units_size_lenght  = $db->query($sql_affiche_units_size_lenght);

  //On recupere les donnees (fetch ou fetchall)
  $affiche_units_size_lenght= $requete_affiche_units_size_lenght ->fetchAll();

 $affiche_units_size_lenght= $affiche_units_size_lenght[0]["measurs_descriptions"];
}else{
$affiche_units_size_lenght = "NULL";
}

/*
=============== UNITS SIZES  THICKNESS ===========================
*/
if($units_size_thickness != "NULL"){
  $sql_affiche_units_size_thickness= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_size_thickness'";

  //On excute directement la requete
  $requete_affiche_units_size_thickness  = $db->query($sql_affiche_units_size_thickness);

  //On recupere les donnees (fetch ou fetchall)
  $affiche_units_size_thickness= $requete_affiche_units_size_thickness ->fetchAll();

 $affiche_units_size_thickness= $affiche_units_size_thickness[0]["measurs_descriptions"];
}else{
$affiche_units_size_thickness = "NULL";
}

?>