
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($resultSet))
    {
?>
    <option value= "<?php echo $row ['id_resp']?>">
    <?php echo $row ['responsability'] ?>
    </option>
<?php
   }
?>