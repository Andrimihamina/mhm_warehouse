<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     // MEDICINE
     $sql_pros_med= "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_med = $db->query($sql_pros_med);
     $pros_med= $requete_pros_med->fetchAll();

     // CONSUMABLE 
     $sql_pros_cons_med= "SELECT * FROM catalogs WHERE categories = 2";
     $requete_pros_cons_med = $db->query($sql_pros_cons_med);
     $pros_cons_med= $requete_pros_cons_med->fetchAll();

     // MATERIALS 
     $sql_pros_mat_med= "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_mat_med = $db->query($sql_pros_mat_med);
     $pros_mat_med= $requete_pros_mat_med->fetchAll();

// LOGISTICS
      // CONSUMABLE 
      $sql_pros_cons_log= "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_cons_log = $db->query($sql_pros_cons_log);
     $pros_cons_log= $requete_pros_cons_log->fetchAll();

     // MATERIALS 
     $sql_pros_mat_log= "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_mat_log = $db->query($sql_pros_mat_log);
     $pros_mat_log= $requete_pros_mat_log->fetchAll();

// TECHNICALS
     // CONSUMABLE 
     $sql_pros_cons_tec= "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_cons_tec = $db->query($sql_pros_cons_tec);
     $pros_cons_tec= $requete_pros_cons_tec->fetchAll();

     // MATERIALS 
     $sql_pros_mat_tec= "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_mat_tec = $db->query($sql_pros_mat_tec);
     $pros_mat_tec= $requete_pros_mat_tec->fetchAll();

// IT & COM
     // CONSUMABLE 
     $sql_pros_cons_itc = "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_cons_itc = $db->query($sql_pros_cons_itc);
     $pros_cons_itc= $requete_pros_cons_itc->fetchAll();

     // MATERIALS 
     $sql_pros_mat_itc = "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_mat_itc = $db->query($sql_pros_mat_itc);
     $pros_mat_itc= $requete_pros_mat_itc->fetchAll();

// FOODS
     // CONSUMABLE 
     $sql_pros_cons_foo = "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_cons_foo = $db->query($sql_pros_cons_foo);
     $pros_cons_foo= $requete_pros_cons_foo->fetchAll();

     // MATERIALS 
     $sql_pros_mat_foo = "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_mat_foo = $db->query($sql_pros_mat_foo);
     $pros_mat_foo= $requete_pros_mat_foo->fetchAll();

// REAL ESTATE
     // MATERIALS 
     $sql_pros_mat_imo = "SELECT * FROM catalogs WHERE categories = 1";
     $requete_pros_mat_imo = $db->query($sql_pros_mat_imo);
     $pros_mat_imo= $requete_pros_mat_imo->fetchAll();


     
     
?>