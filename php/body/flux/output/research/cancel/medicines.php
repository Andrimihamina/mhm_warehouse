<?php

        if($abbrev_value == "MED"){

            //ON REMPLACE LE ID LES 13 LETTRE PAR VIDE POUR AVOIR LE LES
    
            $code_flux = str_replace("$id", "", $cles);

            //ID du code flux
            $code_flux_out = "code-flux-" . $code_flux;
  
            //ID DU FLUX IN
            $id_flux_out = $_POST["$code_flux_out"];

            /*
            CANCEL MEDCINE
            */
            $sql_flux_out_cancel_med = "UPDATE `flux_out` SET `done_order` = '1', `cancel` = '1' WHERE `flux_out`.`id_flux_out` = '$id_flux_out'";
            $query_flux_out_cancel_med = $db->prepare($sql_flux_out_cancel_med);
                //On execute la requete
            $query_flux_out_cancel_med ->execute();
            
          
        }//CONSUMABLES

?>