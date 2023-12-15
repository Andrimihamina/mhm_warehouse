<?php require_once("../../php/functions/services_responsibility/services_responsibility_mat_log.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_mat_log"]?></td>
    <td><?=$prod["manufacturer_name"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="mat_log_qt-<?= $prod["id_mat_log"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="mat_log_done-<?= $prod["id_mat_log"]?>" value ="done" class="btn btn-info"><i class="bi bi-check-circle"></i></button></td>
    </tr>
<?php endforeach; ?>