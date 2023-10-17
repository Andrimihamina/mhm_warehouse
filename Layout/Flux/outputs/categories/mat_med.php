<?php require_once("../../php/functions/services_responsibility/services_responsibility_mat_med.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_mat_med"]?></td>
    <td><?=$prod["manufacturer_name"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="mat_med_qt-<?= $prod["id_mat_med"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="mat_med_done-<?= $prod["id_mat_med"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    </tr>
<?php endforeach; ?>