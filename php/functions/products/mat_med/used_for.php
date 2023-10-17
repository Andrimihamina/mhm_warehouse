<?php
include_once("../../../../../php/dns/connect.php");

    $sql_used_for = "SELECT * FROM `mat_med_used`  ORDER BY `name_mat_med` ASC";

    //On execute la requete
    $requete_used_for= $db->query($sql_used_for);

    //On recupere les donnes
         $used_for = $requete_used_for->fetchAll();
       
        //On ecrit le contenue de la page
?>