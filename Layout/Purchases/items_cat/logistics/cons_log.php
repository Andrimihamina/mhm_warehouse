<?php 
    foreach($pros_cons_log as $pro_cons_log): 
?>
    <tr>   
                <!-- SUPPLIERS-->
                <th scope="row"><a href="#"><?= $pro_cons_log["suppliers"]?></a></th>
        <td><?= $pro_cons_log["Descriptions"]?></td>
        <td><?= $pro_cons_log["Price"]?></td>
        <td><?= $pro_cons_log["Expiration_date"]?></td>
        
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_cons_log["id_log"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_cons_log["id_log"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>
    </tr>
<?php 
    endforeach;
?> 