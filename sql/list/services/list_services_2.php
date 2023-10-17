
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_services))
    {
?>
    <option value= "<?php echo $row['id_service']?>">
        <?php echo $row['services_descriptions'] ?>
    </option>
<?php
   } 
?>