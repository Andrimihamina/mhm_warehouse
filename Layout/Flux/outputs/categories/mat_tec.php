<?php require_once("../../php/functions/services_responsibility/services_responsibility_mat_tec.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_mat_tec"]?></td>
    <td><?=$prod["manufacturer_name"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="mat_tec_qt-<?= $prod["id_mat_tec"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="mat_tec_done-<?= $prod["id_mat_tec"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    </tr>
<?php endforeach; ?>