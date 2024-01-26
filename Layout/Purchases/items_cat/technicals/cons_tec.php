<?php 
    foreach($pros_cons_tec as $pro_cons_tec): 
?>
    <tr>   
        <!-- SUPPLIERS-->
        <th scope="row"><a href="#"><?= $pro_cons_tec["suppliers"]?></a></th>
        <td><?= $pro_cons_tec["Descriptions"]?></td>
        <td><?= $pro_cons_tec["Price"]?></td>
        <td><?= $pro_cons_tec["Expiration_date"]?></td>
        
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_cons_tec["id_tec"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_cons_tec["id_tec"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>
    </tr>
<?php 
    endforeach;
?> 