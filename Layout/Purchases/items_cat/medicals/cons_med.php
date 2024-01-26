<?php 
    foreach($pros_cons_med as $pro_cons_med): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_cons_med["suppliers"]?></a></th>
        <td><?= $pro_cons_med["Descriptions"]?></td>
        <td><?= $pro_cons_med["Price"]?></td>
        <td><?= $pro_cons_med["Expiration_date"]?></td>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_cons_med["id_med"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_cons_med["id_med"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>
    </tr>
<?php 
    endforeach;
?> 