<?php

echo "<pre>";
var_dump($_POST);
echo "</pre>";

if(!empty($_POST)){
foreach( $_POST as $cles =>$values )
    {
    echo "<pre>";
    echo $cles." = ".$values;
    echo "</pre>";

    if ($_POST["print"] == "done"){
        /*
        On  update le donne 
        */
        include_once("../../../dns/connect.php");
        $sql_prospecting_update = "UPDATE `prospecting` SET `done` = '1' WHERE `prospecting`.`id_prospecting` = '$cles'";
        $query_prospecting_update= $db->prepare($sql_prospecting_update);
            //On execute la requete
        $query_prospecting_update->execute();

        $sql_prospecting_update_qt = "UPDATE `prospecting` SET `prospecting_qt_needed` = '$values' WHERE `prospecting`.`id_prospecting` = '$cles'";
        $query_prospecting_update_qt= $db->prepare($sql_prospecting_update_qt);
            //On execute la requete
        $query_prospecting_update_qt->execute();

        header("Location: ../../../../html/body/purchases/prospectings/prospectings_1");
    }
    }
}
?>