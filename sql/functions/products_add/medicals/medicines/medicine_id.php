<?php
$sql_medicine_id= "INSERT INTO `medicine_id` 
(
/*ABREV*/`med_abrev`,`med_nbr_abrev`, 
/*CODE*/`id_code_med`,
/*DESCRIPTIONS*/`Descriptions`,`assoc_name`,`commercial_name`,
/*actival name 0*/`actival_name_0`,`dosage_0`,`dosage_unit_0`,`dosage_package_0`,`dosage_package_unit_0`,`dosage_package_quantity_0`,`dosage_package_quantity_unit_0`,
/*PACKAGE*/`package`,`package_unit`,
/*actival name 1*/`actival_name_1`,`dosage_1`,`dosage_unit_1`,`dosage_package_1`,`dosage_package_unit_1`,`dosage_package_quantity_1`,`dosage_package_quantity_unit_1`,
/*actival name 2*/`actival_name_2`,`dosage_2`,`dosage_unit_2`,`dosage_package_2`,`dosage_package_unit_2`,`dosage_package_quantity_2`,`dosage_package_quantity_unit_2`,
/* epiration date*/`expiration_date`,
/*form*/`form`,
/*name adding*/`name_adding`,
/*IMAGE*/`med_img`
) 
VALUES 
(
/*ABREV*/'$MAJ_abrev','$NBR_abreviations',
/*CODE*/'$ID',
/*DESCRIPTIONS*/'$Descriptions','$assoc_name','$commercial_name', 
/*actival name 0*/'$actival_name_0','$dosage_0','$dosage_unit_0','$dosage_package_0','$dosage_package_unit_0','$dosage_package_quantity_0','$dosage_package_quantity_unit_0',
/*PACKAGE*/'$package','$package_unit',
/*actival name 1*/'$actival_name_1','$dosage_1','$dosage_unit_1','$dosage_package_1','$dosage_package_unit_1','$dosage_package_quantity_1','$dosage_package_quantity_unit_1',
/*actival name 2*/'$actival_name_2','$dosage_2','$dosage_unit_2','$dosage_package_2','$dosage_package_unit_2','$dosage_package_quantity_2','$dosage_package_quantity_unit_2',
/* epiration date*/'$expiration_date',
/*form*/'$form',
/*name adding*/'$name_adding',
/*IMAGE*/'$file_name'
)";

$query_medicine_id = $db->prepare($sql_medicine_id);
$query_medicine_id->execute();

$medicine_id = $db->lastInsertId();
?>