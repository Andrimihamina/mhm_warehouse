<?php
$page = $_SESSION["user"]["pages"];
    if($page !=""){
        switch($page){  
        // ADMIN
        case 1 :
            $dashboard  = "../../Layout/dashboard/admin.php";
            $purchases = "../../Layout/Purchases/prospecting.php";
            $suppliers = "../../Layout/Purchases/suppliers.php";
            $fuel = "../../Layout/Purchases/fuel.php";
            $prods_all = "../../Layout/Products_all/all.php";
            $prods_add = "../../Layout/Products_add/add.php";
            $prods_edit = "../../Layout/Products_edit/edit.php";
            $orders_history = "../../Layout/Analytics/orders_history.php";
            $purchases_history = "../../Layout/Analytics/Purchases_history.php";
            $inputs = "../../Layout/Flux/inputs_suppliers.php";
            $outputs = "../../Layout/Flux/outputs_services.php";
            $profile ="../../Layout/Profile/Profile.php";
            $users ="../../Layout/Users/users.php";
            $settings ="../../Layout/Settings/settings.php";
            $responsibilities ="../../Layout/Responsibility/responsibility.php";
            $services = "../../Layout/Services/services.php";
            break; 
        // CEO 
        case 2 :
            $dashboard  = "../../Layout/dashboard/admin.php";
            $purchases = "../../Layout/Purchases/prospecting.php";
            $suppliers = "../../Layout/Purchases/suppliers.php";
            $fuel = "../../Layout/Purchases/fuel.php";
            $prods_all = "../../Layout/Products_all/all.php";
            $prods_add = "../../Layout/Products_add/add.php";
            $prods_edit = "../../Layout/Products_edit/edit.php";
            $orders_history = "../../Layout/Analytics/orders_history.php";
            $purchases_history = "../../Layout/Analytics/Purchases_history.php";
            $inputs = "../../Layout/Flux/inputs_suppliers.php";
            $outputs = "../../Layout/Flux/outputs_services.php";
            $profile ="../../Layout/Profile/Profile.php";
            $users ="../../Layout/Users/users.php";
            $settings ="../../Layout/Settings/settings.php";
            $responsibilities ="#";
            $services = "#";
            break;  
        // DEPUTY
        case 3 :
            $dashboard  ="../../Layout/dashboard/deputy.php";
            $purchases = "../../Layout/Purchases/prospecting.php";
            $suppliers = "../../Layout/Purchases/suppliers.php";
            $fuel = "../../Layout/Purchases/fuel.php";
            $prods_all = "../../Layout/Products_all/all.php";
            $prods_add = "#";
            $prods_edit = "#";
            $orders_history = "../../Layout/Analytics/orders_history.php";
            $purchases_history = "../../Layout/Analytics/Purchases_history.php";
            $inputs = "#";
            $outputs = "../../Layout/Flux/outputs_services.php";
            $profile ="../../Layout/Profile/Profile.php";
            $users ="../../Layout/Users/users.php";
            $settings ="#";
            $responsibilities ="#";
            $services = "#";
            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                    $dashboard  = "../../Layout/dashboard/admin.php";
                    $purchases = "../../Layout/Purchases/prospecting.php";
                    $suppliers = "../../Layout/Purchases/suppliers.php";
                    $fuel = "../../Layout/Purchases/fuel.php";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "../../Layout/Products_add/add.php";
                    $prods_edit = "../../Layout/Products_edit/edit.php";
                    $orders_history = "../../Layout/Analytics/orders_history.php";
                    $purchases_history = "../../Layout/Analytics/Purchases_history.php";
                    $inputs = "../../Layout/Flux/inputs_suppliers.php";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="../../Layout/Users/users.php";
                    $settings ="../../Layout/Settings/settings.php";
                    $responsibilities ="../../Layout/Responsibility/responsibility.php";
                    $services = "../../Layout/Services/services.php";
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                    $dashboard  ="../../Layout/dashboard/w_medical.php";
                    $purchases = "../../Layout/Purchases/prospecting_w_medical.php";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "../../Layout/Analytics/orders_history.php";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                    $dashboard  ="../../Layout/dashboard/w_technical.php";
                    $purchases = "../../Layout/Purchases/prospecting_w_technical.php";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "../../Layout/Products_add/add_tec.php";
                    $prods_edit = "#";
                    $orders_history = "../../Layout/Analytics/orders_history.php";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                    $dashboard  ="../../Layout/dashboard/w_logistic.php";
                    $purchases = "../../Layout/Purchases/prospecting_w_logistic.php";
                    $suppliers = "#";
                    $fuel = "../../Layout/Purchases/fuel.php";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "../../Layout/Products_add/add_log.php";
                    $prods_edit = "#";
                    $orders_history = "../../Layout/Analytics/orders_history.php";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // STORKEEPER IT
                case 8 :
                    $dashboard  ="../../Layout/dashboard/w_itc.php";
                    $purchases = "../../Layout/Purchases/prospecting_w_itc.php";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "../../Layout/Products_add/add_itc.php";
                    $prods_edit = "#";
                    $orders_history = "../../Layout/Analytics/orders_history.php";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                    $dashboard  ="../../Layout/dashboard/w_itc.php";
                    $purchases = "../../Layout/Purchases/prospecting_w_itc.php";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "../../Layout/Analytics/orders_history.php";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    $dashboard  ="../../Layout/dashboard/R_medical.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                     $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    $dashboard  ="../../Layout/dashboard/R_medical.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    $dashboard  ="../../Layout/dashboard/R_medical.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // RESPONSIBLES PEDIATRIC INPATIENTS
                case 14 :
                    $dashboard  ="../../Layout/dashboard/R_medical.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // RESPONSIBLES PEDIATRIC OUTPATIENTS
                case 14 :
                    $dashboard  ="../../Layout/dashboard/R_medical.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    $dashboard  ="../../Layout/dashboard/R_office.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
        // USERS
                // USERS MEDICAL
                case 16 :
                    $dashboard  ="../../Layout/dashboard/U_medical.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // USERS OFFICE
                case 17 :
                    $dashboard  ="../../Layout/dashboard/U_office.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // USERS TECHNICAL
                case 18 :
                    $dashboard  ="../../Layout/dashboard/U_technical.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // USERS ITC
                case 19 :
                    $dashboard  ="../../Layout/dashboard/U_foods.php";
                    $purchases = "#";
                    $suppliers = "#";
                    $fuel = "#";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
                // USERS DRIVERS
                case 20 :
                    $dashboard  ="../../Layout/dashboard/U_foods.php";
                    $purchases = "../../Layout/Purchases/fuel.php";
                    $suppliers = "#";
                    $fuel = "../../Layout/Purchases/fuel.php";
                    $prods_all = "../../Layout/Products_all/all.php";
                    $prods_add = "#";
                    $prods_edit = "#";
                    $orders_history = "#";
                    $purchases_history = "#";
                    $inputs = "#";
                    $outputs = "../../Layout/Flux/outputs_services.php";
                    $profile ="../../Layout/Profile/Profile.php";
                    $users ="#";
                    $settings ="#";
                    $responsibilities ="#";
                    $services = "#";
                    break;
    } 
}
?>