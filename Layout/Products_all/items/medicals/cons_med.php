<?php 
    foreach($prods_cons_med as $prod_cons_med): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_cons_med["id_code_cons_med"]?>"><?= $prod_cons_med["id_code_cons_med"]?></a></th>
        <td><?= $prod_cons_med["brand_cons_med"]?></td>
        <td><?= $prod_cons_med["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_cons_med["used_for_cons_med"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_cons_med["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 