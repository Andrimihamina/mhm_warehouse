
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_color))
    {
?>
    <option value= "<?php echo $row ['id_colors']?>">
    <?php echo $row ['colors_descriptions'] ?>
    </option>
<?php
   }
?>