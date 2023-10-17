
<?php 
    foreach($news_cons_med as $new_cons_med): 
?>
    <div class="post-item clearfix">
        <!-- IMAGE -->
        <img src="../../../warehouse_img/img/cons_med_img/<?=$new_cons_med["cons_image"];?>" alt="IMG">
        <!-- DESCRIPTIONS -->
        <h4><a href="#"><?= $new_cons_med["Descriptions"]?></a></h4>
        <!-- USED FOR -->
        <p>
        <?= $new_cons_med["used_for_cons_med"];?>
        <br>
        <!-- LOCATION -->
        <?= $new_cons_med["cons_med_loc"];?> 
        </p>
    </div>
<?php 
    endforeach;
?>
