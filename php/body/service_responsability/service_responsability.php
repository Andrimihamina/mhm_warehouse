<?php

include_once("../../dns/connect.php");

//On traite le formulaire
if(!empty($_POST)){
    /*
    echo"<pre>";
    var_dump($_POST);
    echo"</pre>";
    */
    //RESPONSIBILITY
    $sql_resp = "SELECT * FROM `mhm_resp`  ORDER BY `id_resp` ASC";
    //On execute la requete
    $requete_resp = $db->query($sql_resp);
    //On recupere les donnes
    $responsibilities = $requete_resp->fetch();      
    //On ecrit le contenue de la page
    $id_resp = $responsibilities["id_resp"];

    foreach( $_POST as $cles =>$values)
    {
    
        echo "<pre>";
        echo $cles." = ".$values;
        echo "</pre>";
        

        /* ID SERVICE RESP
        $done = substr($cles, 0, 5);

        $id = str_replace("$done", "", $cles);


        echo "<pre>";
        print_r($id);
        echo "</pre>";

         *                                               

            /*
            ======================== INSERTION FROM =============
            */
            $sql= "UPDATE `service_responsibility` SET 
             WHERE `service_responsibility`.`id_service_resp` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql);
            //On execute la requete
            $query_medicine_auth->execute();
            
    }
}
?>