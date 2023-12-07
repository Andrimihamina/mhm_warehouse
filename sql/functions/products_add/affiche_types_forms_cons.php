<?php
/*==============  ==========================*/
// TYPES
if($types != NULL AND $types != "Choose..." AND $types != 0){
     $sql_types= "SELECT * FROM `cons_type` WHERE `id_types` = '$types'";
     $requete_types  = $db->query($sql_types);
     $affiche_types= $requete_types ->fetchAll();
   
    $affiche_types = $affiche_types[0]["types_descriptions"];
}else{$affiche_types = NULL; $types = 0; }

// FORMS
if($forms != NULL AND $forms != "Choose..." AND $forms != 0){
     $sql_forms = "SELECT * FROM `cons_form` WHERE `id_form` = '$forms'";
     $requete_forms  = $db->query($sql_forms);
     $affiche_forms = $requete_forms ->fetchAll();
   
    $affiche_forms= $affiche_forms[0]["form_descriptions"];
}else{$affiche_forms = NULL; $forms = 0; }

//  ================= ASSOCIATIONS =====================*/
// TYPES
if($association_types != NULL AND $association_types != "Choose..." AND $association_types != 0){
     $sql_association_types= "SELECT * FROM `cons_type` WHERE `id_types` = '$association_types'";
     $requete_association_types  = $db->query($sql_association_types);
     $affiche_association_types= $requete_association_types ->fetchAll();
   
    $affiche_association_types = $affiche_association_types[0]["types_descriptions"];
}else{$affiche_association_types = NULL; $association_types = 0; }

// FORMS
if($association_form != NULL AND $association_form != "Choose..." AND $association_form != 0){
     $sql_association_forms = "SELECT * FROM `cons_form` WHERE `id_form` = '$association_form'";
     $requete_association_forms  = $db->query($sql_association_forms);
     $affiche_association_forms = $requete_association_forms ->fetchAll();
   
    $affiche_association_forms= $affiche_association_forms[0]["form_descriptions"];
}else{$affiche_association_forms = NULL; $association_form = 0;}

?>