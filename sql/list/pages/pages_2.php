
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($resultSet))
    {
?>
    <option value= "<?php echo $row ['id_page']?>">
        <?php echo $row ['pages'] ?>
    </option>
<?php
   }
?>