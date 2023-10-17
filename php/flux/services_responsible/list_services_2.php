
<?php
    while ($row= mysqli_fetch_array($list_services))
    {
?>
    <option value= "<?=$row['id_service'];?>">
        <?=$row['services'];?>
    </option>
<?php
   } 
?>