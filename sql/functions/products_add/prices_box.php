<?php
if($box!= "Choose..."){ 
    $sql_affiche_box= "SELECT * FROM `med_box` WHERE `id_box` = $box";
    $requete_affiche_box= $db->query($sql_affiche_box);
    $affiche_box = $requete_affiche_box->fetchAll();
  
    $affiche_box= $affiche_box[0]["box_description"];
}else{$affiche_box = NULL;}
?>