<?Php
$check = mysqli_query($dbc,"SELECT * FROM `$tbl_check` WHERE `$colums_check` ='$Descriptions'");
$checkrows_id = mysqli_num_rows($check);

?>