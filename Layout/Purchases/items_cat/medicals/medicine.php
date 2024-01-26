<?php 
    foreach($pros_med as $pro_med): 
?>
    <tr>   
        <!-- SUPPLIERS-->
        <th scope="row"><a href="#"><?= $pro_med["suppliers"]?></a></th>
        <td><?= $pro_med["Descriptions"]?></td>
        <td><?= $pro_med["Price"]?></td>
        <td><?= $pro_med["Expiration_date"]?></td>

        <td><div class="col-md-5"><input type="number" name="qt-<?=$pro_med["id_med"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_med["id_med"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>                                  
    </tr>
<?php 
    endforeach;
?> 