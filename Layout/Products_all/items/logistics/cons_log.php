<?php 
    foreach($prods_cons_log as $prod_cons_log): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_cons_log["id_code_cons_log"]?>"><?= $prod_cons_log["id_code_cons_log"]?></a></th>
        <td><?= $prod_cons_log["brand_cons_log"]?></td>
        <td><?= $prod_cons_log["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_cons_log["used_for"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_cons_log["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 