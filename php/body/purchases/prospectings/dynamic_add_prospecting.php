<?php
/*
echo "<pre>";
var_dump($_POST);
echo "</pre>";
*/
foreach( $_POST as $cle =>$value )
{
    //echo $cle." = ".$value;
    /*
        Si value est valide donc affiche value
    */
    if ($value == "validate"){
      $var_id ="$cle";
    /*
        Prndre l'id med
    */
    $var_id = str_replace("sub-", "", $var_id);


    $sql_affiche_id = "SELECT * FROM `medicine_id` WHERE `id_med` = $var_id";
                        
    //On excute directement la requete
    $requete_affiche_id= $db->query($sql_affiche_id);

    //On recupere les donnees (fetch ou fetchall)
    $affiche_id = $requete_affiche_id->fetch();


    $id_code_med=$affiche_id["id_code_med"];
    $med_name=$affiche_id["name"];

        /*
        LE QT a ajjouter dans le purchase
        */
    $var ="$cle";
    $var = str_replace("sub-", "qt-", $var);
        
    $prospecting_qt_needed=($_POST["$var"]);
         /*
            ======================== ID RESPONSIBLE ADDING ===================
            */
            $name_adding = $_SESSION["user"]["username"];
    /*
        On fait l'insertion
    */
    $sql_prospecting = "INSERT INTO `prospecting` 
    (`id_prospecting`, `created_date`, 
    `categories`, `id_code`, `id_abrev_code`, `descriptions`, 
    `prospecting_qt_needed`, 
    `name_adding`, 
    `done`) VALUES 
    (NULL, current_timestamp(), 
    'Medicine', '$var_id', '$id_code_med', '$med_name', 
    '$prospecting_qt_needed', '$name_adding', '0')";
    //On prerare la requete
    $query_prospecting= $db->prepare($sql_prospecting);
    //On execute la requete

   $query_prospecting->execute();

   header("Location: ../prospectings_1");
    
    }
    
}

?>