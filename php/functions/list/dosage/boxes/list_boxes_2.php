
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_box))
    {
?>
    <option value= "<?php echo $row ['id_box']?>">
    <?php echo $row ['box_description'] ?>
    </option>
<?php
   }
?>