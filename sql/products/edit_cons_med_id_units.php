<?php
include_once ("../../env/dns_warehouse.php");
// WIDTH
     $units_sizes_width = $edits_med_id[0]["units_sizes_width"];
     if($units_sizes_width !="" AND $units_sizes_width != 0){
     $sql_width= "SELECT * FROM cons_med_id JOIN cons_measurs ON cons_med_id.units_sizes_width = cons_measurs.id_measurs  WHERE cons_med_id.units_sizes_width = '$units_sizes_width'";
     $requete_edit_width = $db->query($sql_width);
     $edits_units_width= $requete_edit_width->fetchAll();

     $units_sizes_width = $edits_units_width[0]["measurs_descriptions"];
     }else{$units_sizes_width = "Choose...";}

// LENGTH
     $units_sizes_lenght = $edits_med_id[0]["units_sizes_lenght"];
     if($units_sizes_lenght !="" AND $units_sizes_lenght !=0){
     $sql_lenght= "SELECT * FROM cons_med_id JOIN cons_measurs ON cons_med_id.units_sizes_lenght = cons_measurs.id_measurs  WHERE cons_med_id.units_sizes_lenght = '$units_sizes_lenght'";
     $requete_edit_lenght = $db->query($sql_lenght);
     $edits_units_lenght= $requete_edit_lenght->fetchAll();

     $units_sizes_lenght = $edits_units_lenght[0]["measurs_descriptions"];
     }else{$units_sizes_lenght = "Choose...";}

// THICKNESS
     $units_size_thichness = $edits_med_id[0]["units_size_thichness"];
     if($units_size_thichness !="" AND $units_size_thichness !=0){
     $sql_thichness= "SELECT * FROM cons_med_id JOIN cons_measurs ON cons_med_id.units_size_thichness = cons_measurs.id_measurs  WHERE cons_med_id.units_size_thichness = '$units_size_thichness'";
     $requete_edit_thichness = $db->query($sql_thichness);
     $edits_units_thichness= $requete_edit_thichness->fetchAll();

     $units_size_thichness = $edits_units_thichness[0]["measurs_descriptions"];
     }else{$units_size_thichness = "Choose...";}

// SPECIFIC
     $sizes_specific = $edits_med_id[0]["sizes_specific"];
     if($sizes_specific !="" AND $sizes_specific !=0){
     $sql_specific= "SELECT * FROM cons_med_id JOIN cons_sizes ON cons_med_id.sizes_specific = cons_sizes.id_sizes  WHERE cons_med_id.sizes_specific = '$sizes_specific'";
     $requete_edit_specific = $db->query($sql_specific);
     $edits_units_specific= $requete_edit_specific->fetchAll();

     $sizes_specific = $edits_units_specific[0]["sizes_descriptions"];
     }else{$sizes_specific = "Choose...";}

// CHARRIERES
     $sizes_charrieres = $edits_med_id[0]["sizes_charrieres"];
     if($sizes_charrieres !="" AND $sizes_charrieres !=0){
     $sql_charrieres= "SELECT * FROM cons_med_id JOIN cons_charrieres ON cons_med_id.sizes_charrieres = cons_charrieres.id_charrieres  WHERE cons_med_id.sizes_charrieres = '$sizes_charrieres'";
     $requete_edit_charrieres = $db->query($sql_charrieres);
     $edits_units_charrieres= $requete_edit_charrieres->fetchAll();

     $sizes_charrieres = $edits_units_charrieres[0]["charrieres_descriptions"];
     }else{$sizes_charrieres = "Choose...";}

// GAUGES
     $sizes_gauzes = $edits_med_id[0]["sizes_gauzes"];
     if($sizes_gauzes !="" AND $sizes_gauzes !=0 ){
     $sql_gauzes= "SELECT * FROM cons_med_id JOIN cons_gauss ON cons_med_id.sizes_gauzes = cons_gauss.id_gauss  WHERE cons_med_id.sizes_gauzes = '$sizes_gauzes'";
     $requete_edit_gauzes = $db->query($sql_gauzes);
     $edits_units_gauzes= $requete_edit_gauzes->fetchAll();

     $sizes_gauzes = $edits_units_gauzes[0]["gauss_descriptions"];
     }else{$sizes_gauzes = "Choose...";}

// COLORS
     $sizes_color = $edits_med_id[0]["sizes_color"];
     if($sizes_color !="" AND $sizes_color !=0 ){
     $sql_color= "SELECT * FROM cons_med_id JOIN cons_colors ON cons_med_id.sizes_color = cons_colors.id_colors  WHERE cons_med_id.sizes_color = '$sizes_color'";
     $requete_edit_color = $db->query($sql_color);
     $edits_units_color= $requete_edit_color->fetchAll();

     $sizes_color = $edits_units_color[0]["colors_descriptions"];
     }else{$sizes_color = "Choose...";}

// TYPES
     $types = $edits_med_id[0]["types"];
     if($types !="" AND $types !=0){
     $sql_types= "SELECT * FROM cons_med_id JOIN cons_type ON cons_med_id.types = cons_type.id_types  WHERE cons_med_id.types = '$types'";
     $requete_edit_types = $db->query($sql_types);
     $edits_units_types= $requete_edit_types->fetchAll();

     $types = $edits_units_types[0]["types_descriptions"];
     }else{$types = "Choose...";}

// FORMS
     $form = $edits_med_id[0]["form"];
     if($form !="" AND $form !=0){
     $sql_form= "SELECT * FROM cons_med_id JOIN cons_form ON cons_med_id.form = cons_form.id_form  WHERE cons_med_id.form = '$form'";
     $requete_edit_form = $db->query($sql_form);
     $edits_units_form= $requete_edit_form->fetchAll();

     $form = $edits_units_form[0]["form_descriptions"];
     }else{$form = "Choose...";} 


// WIDTH ASSOCIATIONS
     $units_width_associations = $edits_med_id[0]["units_association_width"];
     if($units_width_associations !="" AND $units_width_associations != 0){
     $sql_width= "SELECT * FROM cons_med_id JOIN cons_measurs ON cons_med_id.units_association_width = cons_measurs.id_measurs  WHERE cons_med_id.units_association_width = '$units_width_associations'";
     $requete_edit_width = $db->query($sql_width);
     $edits_units_width= $requete_edit_width->fetchAll();

     $units_width_associations = $edits_units_width[0]["measurs_descriptions"];
     }else{$units_width_associations = "Choose...";}

// LENGTH ASSOCIATIONS
     $units_lenght_associations = $edits_med_id[0]["units_association_length"];
     if($units_lenght_associations !="" AND $units_lenght_associations !=0){
     $sql_lenght= "SELECT * FROM cons_med_id JOIN cons_measurs ON cons_med_id.units_association_length = cons_measurs.id_measurs  WHERE cons_med_id.units_association_length = '$units_lenght_associations'";
     $requete_edit_lenght = $db->query($sql_lenght);
     $edits_units_lenght= $requete_edit_lenght->fetchAll();

     $units_lenght_associations = $edits_units_lenght[0]["measurs_descriptions"];
     }else{$units_lenght_associations = "Choose...";}

// TYPES ASSOCIATION
     $association_types = $edits_med_id[0]["association_types"];
     if($association_types !="" AND $association_types !=0){
     $sql_association_types= "SELECT * FROM cons_med_id JOIN cons_type ON cons_med_id.association_types = cons_type.id_types  WHERE cons_med_id.association_types = '$association_types'";
     $requete_edit_association_types = $db->query($sql_association_types);
     $edits_units_association_types= $requete_edit_association_types->fetchAll();

     $association_types = $edits_units_association_types[0]["types_descriptions"];
     }else{$association_types = "Choose...";}

// FORMS ASSOCIATION
     $association_form = $edits_med_id[0]["association_form"];
     if($association_form !="" AND $association_form !=0){
     $sql_association_form= "SELECT * FROM cons_med_id JOIN cons_form ON cons_med_id.association_form = cons_form.id_form  WHERE cons_med_id.association_form = '$association_form'";
     $requete_edit_association_form = $db->query($sql_association_form);
     $edits_units_association_form= $requete_edit_association_form->fetchAll();

     $association_form = $edits_units_association_form[0]["form_descriptions"];
     }else{$association_form = "Choose...";}


?>