
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_gauss))
    {
?>
    <option value= "<?php echo $row ['id_gauss']?>">
    <?php echo $row ['gauss_descriptions'] ?>
    </option>
<?php
   }
?>