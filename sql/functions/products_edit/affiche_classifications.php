<?php
/* ===================== CLASSIFICATIONS =========================*/
// CLASSIFICATION 0
if($classification_0 != "" OR $classification_0 != "Choose..." ){
    $sql_affiche_classificiation_0= "SELECT * FROM `med_classification` WHERE `id_class` = $classification_0";
    $requete_affiche_classificiation_0= $db->query($sql_affiche_classificiation_0);
    $affiche_classificiation_0 = $requete_affiche_classificiation_0->fetchAll();

    $affiche_classificiation_0= $affiche_classificiation_0[0]["classifications_descriptions"];
}else{$affiche_classificiation_0 = NULL;}

// CLASSIFICATION 1
if($classification_1 != "" OR $classification_1 != "Choose..." ){
    $sql_affiche_classificiation_1= "SELECT * FROM `med_sub_classifications` WHERE `id_med_sub_class` = $classification_1";
    $requete_affiche_classificiation_1= $db->query($sql_affiche_classificiation_1);
    $affiche_classificiation_1 = $requete_affiche_classificiation_1->fetchAll();

    $affiche_classificiation_1 = $affiche_classificiation_1[0]["med_subclassification_description"];
}else{$affiche_classificiation_1 = NULL;}

// CLASSIFICATION 2
if($classification_2!= "" OR $classification_2 != "Choose..."){
    $sql_affiche_classificiation_2= "SELECT * FROM `med_sub_classifications` WHERE `id_med_sub_class` = $classification_2";
    $requete_affiche_classificiation_2= $db->query($sql_affiche_classificiation_2);
    $affiche_classificiation_2 = $requete_affiche_classificiation_2->fetchAll();

    $affiche_classificiation_2 = $affiche_classificiation_2[0]["med_subclassification_description"];
}else{$affiche_classificiation_2 = NULL;}
?>
