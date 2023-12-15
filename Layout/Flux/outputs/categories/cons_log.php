<?php require_once("../../php/functions/services_responsibility/services_responsibility_cons_log.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_cons_log"]?></td>
    <td><?=$prod["brand_cons_log"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="cos_log_qt-<?= $prod["id_cons_log"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="cos_log_done-<?= $prod["id_cons_log"]?>" value ="done" class="btn btn-info"><i class="bi bi-check-circle"></i></button></td>
    </tr>
<?php endforeach; ?>