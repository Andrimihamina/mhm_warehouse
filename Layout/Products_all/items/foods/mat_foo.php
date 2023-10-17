<?php 
    foreach($prods_mat_foo as $prod_mat_foo): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_mat_foo["id_code_mat_foo"]?>"><?= $prod_mat_foo["id_code_mat_foo"]?></a></th>
        <td><?= $prod_mat_foo["manufacturer_name"]?></td>
        <td><?= $prod_mat_foo["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_mat_foo["used_for"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_mat_foo["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 