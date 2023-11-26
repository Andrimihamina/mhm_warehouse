<?php
$page = $_SESSION["user"]["pages"];
    if($page !=""){
        switch($page){  
        // ADMIN
        case 1 : require_once("API/1_case_admin.php"); break; 
        // CEO 
        case 2 : require_once("API/1_case_admin.php"); break;  
        // DEPUTY
        case 3 : require_once("API/3_case_fad.php");break; 

     // WAREHOUSE
             // WAREHOUSE RESPONSIBLE
             case 4 : require_once("API/1_case_admin.php");break;
             // STORKEEPER MEDICAL
             case 5 : require_once("API/5_case_stk_med.php");break;
             // STORKEEPER TECHNICAL
             case 6 : require_once("API/6_case_stk_tec.php");break;
             // STORKEEPER OPERATIONS
             case 7 : require_once("API/7_case_stk_op.php");break;
             // STORKEEPER IT
             case 8 : require_once("API/8_case_stk_it.php");break;
             // STORKEEPER COMMUNICATION
             case 9 : require_once("API/9_case_stk_com.php");break;

     // RESPONSIBLES
             // RESPONSIBLES NURSE
             case 10 : require_once("API/10_case_resp_medical.php");break;
             // RESPONSIBLES ANESTHESIOLOGIST
             case 11 : require_once("API/10_case_resp_medical.php"); break;

             // RESPONSIBLES COMMUNICATION
             case 12 : require_once("API/12_case_resp_com.php"); break;
             // RESPONSIBLES FINANCE
             case 13 : require_once("API/13_case_resp_finance.php"); break;
             // RESPONSIBLES HR
             case 14 : require_once("API/14_case_resp_hr.php"); break;
             // RESPONSIBLES IT
             case 15 : require_once("API/15_case_resp_it.php"); break;
             // RESPONSIBLES LOGISTIC
             case 16 : require_once("API/16_case_resp_log.php"); break;
             // RESPONSIBLES MINISTRY
             case 17 : require_once("API/17_case_resp_ministry.php"); break;

             // RESPONSIBLES OBST IN
             case 18 : require_once("API/10_case_resp_medical.php"); break;
             // RESPONSIBLES OBST OUT
             case 19 : require_once("API/10_case_resp_medical.php"); break;

             // RESPONSIBLES OFFICE
             case 20 : require_once("API/3_case_fad.php"); break;
             // RESPONSIBLES OPERATIONS
             case 21 : require_once("API/7_case_stk_op.php"); break;

             // RESPONSIBLES PEDIATRIC
             case 22 : require_once("API/10_case_resp_medical.php"); break;

              // RESPONSIBLES TRAINING
              case 23 : require_once("API/10_case_resp_medical.php"); break;


     // USERS
             // USERS OFFICE FINANCE
             case 24 : require_once("API/13_case_resp_finance.php");break;
             // USERS OFFICE HR
             case 25 : require_once("API/14_case_resp_hr.php.php");break;
             // USERS OFFICE LOGISTIC
             case 26 : require_once("API/16_case_resp_log.php");break;

             // USERS MEDICAL ANESTH
             case 27 : require_once("API/10_case_resp_medical.php");break;
             // USERS MEDICAL 
             case 28 : require_once("API/10_case_resp_medical.php");break;

             // USERS OFFICE MINISTRY
             case 29 : require_once("API/17_case_resp_ministry.php");break;
             // USERS OFFICE LOGISTIC
             case 30 : require_once("API/16_case_resp_log.php");break;

             // USERS BIOMEDICAL
             case 31 : require_once("API/30_case_user_tec.php");break;
             // USERS MECHANICAL
             case 32 : require_once("API/30_case_user_tec.php");break;
             // USERS TECHNICAL
             case 33 : require_once("API/30_case_user_tec.php");break;
    } 
}
?>