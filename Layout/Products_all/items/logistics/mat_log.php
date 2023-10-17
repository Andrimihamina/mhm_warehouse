<?php 
    foreach($prods_mat_log as $prod_mat_log): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_mat_log["id_code_mat_log"]?>"><?= $prod_mat_log["id_code_mat_log"]?></a></th>
        <td><?= $prod_mat_log["manufacturer_name"]?></td>
        <td><?= $prod_mat_log["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_mat_log["used_for"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_mat_log["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 