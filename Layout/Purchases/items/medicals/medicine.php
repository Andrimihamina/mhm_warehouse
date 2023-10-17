<?php 
    foreach($pros_med as $pro_med): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_med["id_code_med"]?></a></th>
        <td><?= $pro_med["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_med["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_med["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_med["quantity_avarage"] - $pro_med["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_med["id_med"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_med["id_med"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>                                  
    </tr>
<?php 
    endforeach;
?> 