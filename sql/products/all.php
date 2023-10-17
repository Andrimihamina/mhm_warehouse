<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     // MEDICINE
     $sql_prods_med= "SELECT medicine_id.id,medicine_id.id_code_med,medicine_id.commercial_name, medicine_id.Descriptions, med_form.forms_description, medicine_application.med_affiche_application, medicine_classification.med_affiche_classification, medicine_quantity.stock
                         FROM medicine_id
                         JOIN med_form ON medicine_id.form = med_form.id_form
                         JOIN medicine_application ON medicine_id.id = medicine_application.id_med 
                         JOIN medicine_classification ON medicine_id.id = medicine_classification.id_med 
                         JOIN medicine_quantity ON medicine_id.id = medicine_quantity.id_med";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods_med= $requete_prods_med->fetchAll();

     // CONSUMABLE 
     $sql_prods_cons_med= "SELECT cons_med_id.id,cons_med_id.id_code_cons_med,cons_med_id.brand_cons_med, cons_med_id.Descriptions, cons_med_used.used_for_cons_med, cons_med_quantity.stock
                                   FROM cons_med_id
                                   JOIN cons_med_used ON cons_med_id.id = cons_med_used.id_cons_med 
                                   JOIN cons_med_quantity ON cons_med_id.id = cons_med_quantity.id_cons_med";
     $requete_prods_cons_med = $db->query($sql_prods_cons_med);
     $prods_cons_med= $requete_prods_cons_med->fetchAll();

     // MATERIALS 
     $sql_prods_mat_med= "SELECT mat_med_id.id,mat_med_id.id_code_mat_med,mat_med_id.manufacturer_name, mat_med_id.Descriptions, mat_med_used.used_for_mat_med, mat_med_quantity.stock
                                   FROM mat_med_id
                                   JOIN mat_med_used ON mat_med_id.id = mat_med_used.id_mat_med 
                                   JOIN mat_med_quantity ON mat_med_id.id = mat_med_quantity.id_mat_med";
     $requete_prods_mat_med = $db->query($sql_prods_mat_med);
     $prods_mat_med= $requete_prods_mat_med->fetchAll();

// LOGISTICS
      // CONSUMABLE 
      $sql_prods_cons_log= "SELECT cons_log_id.id,cons_log_id.id_code_cons_log,cons_log_id.brand_cons_log, cons_log_id.Descriptions, cons_log_used.used_for, cons_log_quantity.stock
                                   FROM cons_log_id
                                   JOIN cons_log_used ON cons_log_id.id = cons_log_used.id_cons_log 
                                   JOIN cons_log_quantity ON cons_log_id.id = cons_log_quantity.id_cons_log";
     $requete_prods_cons_log = $db->query($sql_prods_cons_log);
     $prods_cons_log= $requete_prods_cons_log->fetchAll();

     // MATERIALS 
     $sql_prods_mat_log= "SELECT mat_log_id.id,mat_log_id.id_code_mat_log,mat_log_id.manufacturer_name, mat_log_id.Descriptions, mat_log_used.used_for, mat_log_quantity.stock
                                   FROM mat_log_id
                                   JOIN mat_log_used ON mat_log_id.id = mat_log_used.id_mat_log 
                                   JOIN mat_log_quantity ON mat_log_id.id = mat_log_quantity.id_mat_log";
     $requete_prods_mat_log = $db->query($sql_prods_mat_log);
     $prods_mat_log= $requete_prods_mat_log->fetchAll();

// TECHNICALS
     // CONSUMABLE 
     $sql_prods_cons_tec= "SELECT cons_tec_id.id,cons_tec_id.id_code_cons_tec,cons_tec_id.brand_cons_tec, cons_tec_id.Descriptions, cons_tec_used.used_for, cons_tec_quantity.stock
                                   FROM cons_tec_id
                                   JOIN cons_tec_used ON cons_tec_id.id = cons_tec_used.id_cons_tec 
                                   JOIN cons_tec_quantity ON cons_tec_id.id = cons_tec_quantity.id_cons_tec";
     $requete_prods_cons_tec = $db->query($sql_prods_cons_tec);
     $prods_cons_tec= $requete_prods_cons_tec->fetchAll();

     // MATERIALS 
     $sql_prods_mat_tec= "SELECT mat_tec_id.id,mat_tec_id.id_code_mat_tec,mat_tec_id.manufacturer_name, mat_tec_id.Descriptions, mat_tec_used.used_for, mat_tec_quantity.stock
                                   FROM mat_tec_id
                                   JOIN mat_tec_used ON mat_tec_id.id = mat_tec_used.id_mat_tec 
                                   JOIN mat_tec_quantity ON mat_tec_id.id = mat_tec_quantity.id_mat_tec";
     $requete_prods_mat_tec = $db->query($sql_prods_mat_tec);
     $prods_mat_tec= $requete_prods_mat_tec->fetchAll();

// IT & COM
     // CONSUMABLE 
     $sql_prods_cons_itc = "SELECT cons_itc_id.id,cons_itc_id.id_code_cons_itc,cons_itc_id.brand_cons_itc, cons_itc_id.Descriptions, cons_itc_used.used_for, cons_itc_quantity.stock
                                   FROM cons_itc_id
                                   JOIN cons_itc_used ON cons_itc_id.id = cons_itc_used.id_cons_itc 
                                   JOIN cons_itc_quantity ON cons_itc_id.id = cons_itc_quantity.id_cons_itc";
     $requete_prods_cons_itc = $db->query($sql_prods_cons_itc);
     $prods_cons_itc= $requete_prods_cons_itc->fetchAll();

     // MATERIALS 
     $sql_prods_mat_itc = "SELECT mat_itc_id.id,mat_itc_id.id_code_mat_itc,mat_itc_id.manufacturer_name, mat_itc_id.Descriptions, mat_itc_used.used_for, mat_itc_quantity.stock
                                   FROM mat_itc_id
                                   JOIN mat_itc_used ON mat_itc_id.id = mat_itc_used.id_mat_itc 
                                   JOIN mat_itc_quantity ON mat_itc_id.id = mat_itc_quantity.id_mat_itc";
     $requete_prods_mat_itc = $db->query($sql_prods_mat_itc);
     $prods_mat_itc= $requete_prods_mat_itc->fetchAll();

// FOODS
     // CONSUMABLE 
     $sql_prods_cons_foo = "SELECT cons_foo_id.id,cons_foo_id.id_code_cons_foo,cons_foo_id.brand_cons_foo, cons_foo_id.Descriptions, cons_foo_used.used_for, cons_foo_quantity.stock
                              FROM cons_foo_id
                              JOIN cons_foo_used ON cons_foo_id.id = cons_foo_used.id_cons_foo 
                              JOIN cons_foo_quantity ON cons_foo_id.id = cons_foo_quantity.id_cons_foo";
     $requete_prods_cons_foo = $db->query($sql_prods_cons_foo);
     $prods_cons_foo= $requete_prods_cons_foo->fetchAll();

     // MATERIALS 
     $sql_prods_mat_foo = "SELECT mat_foo_id.id,mat_foo_id.id_code_mat_foo,mat_foo_id.manufacturer_name, mat_foo_id.Descriptions, mat_foo_used.used_for, mat_foo_quantity.stock
                                   FROM mat_foo_id
                                   JOIN mat_foo_used ON mat_foo_id.id = mat_foo_used.id_mat_foo 
                                   JOIN mat_foo_quantity ON mat_foo_id.id = mat_foo_quantity.id_mat_foo";
     $requete_prods_mat_foo = $db->query($sql_prods_mat_foo);
     $prods_mat_foo= $requete_prods_mat_foo->fetchAll();

// REAL ESTATE
     // MATERIALS 
     $sql_prods_mat_imo = "SELECT mat_imo_id.id,mat_imo_id.id_code_mat_imo,mat_imo_id.manufacturer_name, mat_imo_id.Descriptions, mat_imo_used.used_for, mat_imo_quantity.stock
                                   FROM mat_imo_id
                                   JOIN mat_imo_used ON mat_imo_id.id = mat_imo_used.id_mat_imo 
                                   JOIN mat_imo_quantity ON mat_imo_id.id = mat_imo_quantity.id_mat_imo";
     $requete_prods_mat_imo = $db->query($sql_prods_mat_imo);
     $prods_mat_imo= $requete_prods_mat_imo->fetchAll();


     
     
?>