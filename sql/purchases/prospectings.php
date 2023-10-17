<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     // MEDICINE
     $sql_pros_med= "SELECT medicine_id.id,medicine_id.id_code_med, medicine_id.Descriptions, medicine_quantity.stock, medicine_quantity.quantity_minimal, medicine_quantity.quantity_avarage, medicine_from.germany, medicine_from.madagaskar 
          	          FROM medicine_id 
                         INNER JOIN medicine_quantity ON medicine_id.id = medicine_quantity.id_med 
                         INNER JOIN medicine_from ON medicine_id.id = medicine_from.id_med 
                         WHERE medicine_quantity.stock < medicine_quantity.quantity_minimal";
     $requete_pros_med = $db->query($sql_pros_med);
     $pros_med= $requete_pros_med->fetchAll();

     // CONSUMABLE 
     $sql_pros_cons_med= "SELECT cons_med_id.id,cons_med_id.id_code_cons_med, cons_med_id.Descriptions, cons_med_quantity.stock, cons_med_quantity.quantity_minimal, cons_med_quantity.quantity_avarage, cons_med_from.germany, cons_med_from.madagaskar 
                              FROM cons_med_id 
                              INNER JOIN cons_med_quantity ON cons_med_id.id = cons_med_quantity.id_cons_med
                              INNER JOIN cons_med_from ON cons_med_id.id = cons_med_from.id_cons_med 
                              WHERE cons_med_quantity.stock < cons_med_quantity.quantity_minimal";
     $requete_pros_cons_med = $db->query($sql_pros_cons_med);
     $pros_cons_med= $requete_pros_cons_med->fetchAll();

     // MATERIALS 
     $sql_pros_mat_med= "SELECT mat_med_id.id,mat_med_id.id_code_mat_med, mat_med_id.Descriptions, mat_med_quantity.stock, mat_med_quantity.quantity_minimal, mat_med_quantity.quantity_avarage, mat_med_from.germany, mat_med_from.madagaskar 
                              FROM mat_med_id 
                              INNER JOIN mat_med_quantity ON mat_med_id.id = mat_med_quantity.id_mat_med
                              INNER JOIN mat_med_from ON mat_med_id.id = mat_med_from.id_mat_med 
                              WHERE mat_med_quantity.stock < mat_med_quantity.quantity_minimal";
     $requete_pros_mat_med = $db->query($sql_pros_mat_med);
     $pros_mat_med= $requete_pros_mat_med->fetchAll();

// LOGISTICS
      // CONSUMABLE 
      $sql_pros_cons_log= "SELECT cons_log_id.id,cons_log_id.id_code_cons_log, cons_log_id.Descriptions, cons_log_quantity.stock, cons_log_quantity.quantity_minimal, cons_log_quantity.quantity_avarage, cons_log_from.germany, cons_log_from.madagaskar 
                              FROM cons_log_id 
                              INNER JOIN cons_log_quantity ON cons_log_id.id = cons_log_quantity.id_cons_log
                              INNER JOIN cons_log_from ON cons_log_id.id = cons_log_from.id_cons_log 
                              WHERE cons_log_quantity.stock < cons_log_quantity.quantity_minimal";
     $requete_pros_cons_log = $db->query($sql_pros_cons_log);
     $pros_cons_log= $requete_pros_cons_log->fetchAll();

     // MATERIALS 
     $sql_pros_mat_log= "SELECT mat_log_id.id,mat_log_id.id_code_mat_log, mat_log_id.Descriptions, mat_log_quantity.stock, mat_log_quantity.quantity_minimal, mat_log_quantity.quantity_avarage, mat_log_from.germany, mat_log_from.madagaskar 
                              FROM mat_log_id 
                              INNER JOIN mat_log_quantity ON mat_log_id.id = mat_log_quantity.id_mat_log
                              INNER JOIN mat_log_from ON mat_log_id.id = mat_log_from.id_mat_log 
                              WHERE mat_log_quantity.stock < mat_log_quantity.quantity_minimal";
     $requete_pros_mat_log = $db->query($sql_pros_mat_log);
     $pros_mat_log= $requete_pros_mat_log->fetchAll();

// TECHNICALS
     // CONSUMABLE 
     $sql_pros_cons_tec= "SELECT cons_tec_id.id,cons_tec_id.id_code_cons_tec, cons_tec_id.Descriptions, cons_tec_quantity.stock, cons_tec_quantity.quantity_minimal, cons_tec_quantity.quantity_avarage, cons_tec_from.germany, cons_tec_from.madagaskar 
                              FROM cons_tec_id 
                              INNER JOIN cons_tec_quantity ON cons_tec_id.id = cons_tec_quantity.id_cons_tec
                              INNER JOIN cons_tec_from ON cons_tec_id.id = cons_tec_from.id_cons_tec 
                              WHERE cons_tec_quantity.stock < cons_tec_quantity.quantity_minimal";
     $requete_pros_cons_tec = $db->query($sql_pros_cons_tec);
     $pros_cons_tec= $requete_pros_cons_tec->fetchAll();

     // MATERIALS 
     $sql_pros_mat_tec= "SELECT mat_tec_id.id,mat_tec_id.id_code_mat_tec, mat_tec_id.Descriptions, mat_tec_quantity.stock, mat_tec_quantity.quantity_minimal, mat_tec_quantity.quantity_avarage, mat_tec_from.germany, mat_tec_from.madagaskar 
                              FROM mat_tec_id 
                              INNER JOIN mat_tec_quantity ON mat_tec_id.id = mat_tec_quantity.id_mat_tec
                              INNER JOIN mat_tec_from ON mat_tec_id.id = mat_tec_from.id_mat_tec 
                              WHERE mat_tec_quantity.stock < mat_tec_quantity.quantity_minimal";
     $requete_pros_mat_tec = $db->query($sql_pros_mat_tec);
     $pros_mat_tec= $requete_pros_mat_tec->fetchAll();

// IT & COM
     // CONSUMABLE 
     $sql_pros_cons_itc = "SELECT cons_itc_id.id,cons_itc_id.id_code_cons_itc, cons_itc_id.Descriptions, cons_itc_quantity.stock, cons_itc_quantity.quantity_minimal, cons_itc_quantity.quantity_avarage, cons_itc_from.germany, cons_itc_from.madagaskar 
                              FROM cons_itc_id 
                              INNER JOIN cons_itc_quantity ON cons_itc_id.id = cons_itc_quantity.id_cons_itc
                              INNER JOIN cons_itc_from ON cons_itc_id.id = cons_itc_from.id_cons_itc 
                              WHERE cons_itc_quantity.stock < cons_itc_quantity.quantity_minimal";
     $requete_pros_cons_itc = $db->query($sql_pros_cons_itc);
     $pros_cons_itc= $requete_pros_cons_itc->fetchAll();

     // MATERIALS 
     $sql_pros_mat_itc = "SELECT mat_itc_id.id,mat_itc_id.id_code_mat_itc, mat_itc_id.Descriptions, mat_itc_quantity.stock, mat_itc_quantity.quantity_minimal, mat_itc_quantity.quantity_avarage, mat_itc_from.germany, mat_itc_from.madagaskar 
                              FROM mat_itc_id 
                              INNER JOIN mat_itc_quantity ON mat_itc_id.id = mat_itc_quantity.id_mat_itc
                              INNER JOIN mat_itc_from ON mat_itc_id.id = mat_itc_from.id_mat_itc 
                              WHERE mat_itc_quantity.stock < mat_itc_quantity.quantity_minimal";
     $requete_pros_mat_itc = $db->query($sql_pros_mat_itc);
     $pros_mat_itc= $requete_pros_mat_itc->fetchAll();

// FOODS
     // CONSUMABLE 
     $sql_pros_cons_foo = "SELECT cons_foo_id.id,cons_foo_id.id_code_cons_foo, cons_foo_id.Descriptions, cons_foo_quantity.stock, cons_foo_quantity.quantity_minimal, cons_foo_quantity.quantity_avarage, cons_foo_from.germany, cons_foo_from.madagaskar 
                              FROM cons_foo_id 
                              INNER JOIN cons_foo_quantity ON cons_foo_id.id = cons_foo_quantity.id_cons_foo
                              INNER JOIN cons_foo_from ON cons_foo_id.id = cons_foo_from.id_cons_foo 
                              WHERE cons_foo_quantity.stock < cons_foo_quantity.quantity_minimal";
     $requete_pros_cons_foo = $db->query($sql_pros_cons_foo);
     $pros_cons_foo= $requete_pros_cons_foo->fetchAll();

     // MATERIALS 
     $sql_pros_mat_foo = "SELECT mat_foo_id.id,mat_foo_id.id_code_mat_foo, mat_foo_id.Descriptions, mat_foo_quantity.stock, mat_foo_quantity.quantity_minimal, mat_foo_quantity.quantity_avarage, mat_foo_from.germany, mat_foo_from.madagaskar 
                              FROM mat_foo_id 
                              INNER JOIN mat_foo_quantity ON mat_foo_id.id = mat_foo_quantity.id_mat_foo
                              INNER JOIN mat_foo_from ON mat_foo_id.id = mat_foo_from.id_mat_foo 
                              WHERE mat_foo_quantity.stock < mat_foo_quantity.quantity_minimal";
     $requete_pros_mat_foo = $db->query($sql_pros_mat_foo);
     $pros_mat_foo= $requete_pros_mat_foo->fetchAll();

// REAL ESTATE
     // MATERIALS 
     $sql_pros_mat_imo = "SELECT mat_imo_id.id,mat_imo_id.id_code_mat_imo, mat_imo_id.Descriptions, mat_imo_quantity.stock, mat_imo_quantity.quantity_minimal, mat_imo_quantity.quantity_avarage, mat_imo_from.germany, mat_imo_from.madagaskar 
                              FROM mat_imo_id 
                              INNER JOIN mat_imo_quantity ON mat_imo_id.id = mat_imo_quantity.id_mat_imo
                              INNER JOIN mat_imo_from ON mat_imo_id.id = mat_imo_from.id_mat_imo 
                              WHERE mat_imo_quantity.stock < mat_imo_quantity.quantity_minimal";
     $requete_pros_mat_imo = $db->query($sql_pros_mat_imo);
     $pros_mat_imo= $requete_pros_mat_imo->fetchAll();


     
     
?>