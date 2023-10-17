<?php
include_once ("../../env/dns_warehouse.php");

// VARIABLE TIMES
include ("../../php/functions/temps.php");

// MEDICALS
     // MEDICINE
     $sql_news_med= "SELECT medicine_id.id,medicine_id.created_date, medicine_id.Descriptions, medicine_id.med_img, medicine_classification.med_affiche_classification, medicine_location.med_affiche_location
                              FROM medicine_id
                              INNER JOIN medicine_location ON medicine_id.id = medicine_location.id_med
                              INNER JOIN medicine_classification ON medicine_id.id = medicine_classification.id_med 
                              WHERE medicine_id.created_date BETWEEN '$stt' AND CURRENT_TIMESTAMP";
     $requete_news_med = $db->query($sql_news_med);
     $news_med= $requete_news_med->fetchAll();

     // CONSUMABLE 
     $sql_news_cons_med= "SELECT cons_med_id.id,cons_med_id.created_date, cons_med_id.Descriptions, cons_med_id.cons_image, cons_med_used.used_for_cons_med, cons_med_location.cons_med_loc
                              FROM cons_med_id
                              INNER JOIN cons_med_location ON cons_med_id.id = cons_med_location.id_cons_med
                              INNER JOIN cons_med_used ON cons_med_id.id = cons_med_used.id_cons_med
                              WHERE cons_med_id.created_date BETWEEN '$stt' AND CURRENT_TIMESTAMP";
     $requete_news_cons_med = $db->query($sql_news_cons_med);
     $news_cons_med= $requete_news_cons_med->fetchAll();

     // MATERIALS 
     $sql_news_mat_med= "SELECT mat_med_id.id,mat_med_id.created_date, mat_med_id.Descriptions, mat_med_id.mat_med_image, mat_med_used.used_for_mat_med, mat_med_location.mat_med_loc
                              FROM mat_med_id
                              INNER JOIN mat_med_location ON mat_med_id.id = mat_med_location.id_mat_med
                              INNER JOIN mat_med_used ON mat_med_id.id = mat_med_used.id_mat_med
                              WHERE mat_med_id.created_date BETWEEN '$stt' AND CURRENT_TIMESTAMP";
     $requete_news_mat_med = $db->query($sql_news_mat_med);
     $news_mat_med= $requete_news_mat_med->fetchAll();

     
     
?>