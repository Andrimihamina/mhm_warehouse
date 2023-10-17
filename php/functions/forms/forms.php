<?php
include_once("../../../../../php/dns/connect.php");

    //FORMS MEDICALE
    $sql_forms = "SELECT * FROM `med_form`  ORDER BY `forms_description` ASC";

    //On execute la requete
    $requete_forms = $db->query($sql_forms);

    //On recupere les donnes
         $forms = $requete_forms->fetchAll();
       
        //On ecrit le contenue de la page

?>