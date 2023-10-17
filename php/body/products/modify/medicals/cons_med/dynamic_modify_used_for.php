<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents
             /*
            =============== USED FOR ======================
            */
            $used_for= strip_tags($_POST["used_for-$id"]);
            $_SESSION["error"] =[];
           
            if($used_for != "")
                {           

            $sql_used_for = "UPDATE `cons_med_used` SET `used_for_cons_med` = '$used_for' WHERE `cons_med_used`.`id_cons_med` = '$id'";

            //On prerare la requete
            $query_used_for = $db->prepare($sql_used_for);
            //On execute la requete
           $query_used_for->execute();

                }

            }    
            
}
}

?>