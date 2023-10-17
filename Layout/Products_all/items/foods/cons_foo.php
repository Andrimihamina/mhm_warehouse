<?php 
    foreach($prods_cons_foo as $prod_cons_foo): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_cons_foo["id_code_cons_foo"]?>"><?= $prod_cons_foo["id_code_cons_foo"]?></a></th>
        <td><?= $prod_cons_foo["brand_cons_foo"]?></td>
        <td><?= $prod_cons_foo["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_cons_foo["used_for"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_cons_foo["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 