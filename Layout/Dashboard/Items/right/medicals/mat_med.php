
<?php 
    foreach($news_mat_med as $new_mat_med): 
?>
    <div class="post-item clearfix">
        <!-- IMAGE -->
        <img src="../../../warehouse_img/img/mat_med_img/<?=$new_mat_med["mat_med_image"];?>" alt="IMG">
        <!-- DESCRIPTIONS -->
        <h4><a href="#"><?= $new_mat_med["Descriptions"]?></a></h4>
        <!-- USED FOR -->
        <p>
        <?= $new_mat_med["used_for_mat_med"];?>
        <br>
        <!-- LOCATION -->
        <?= $new_mat_med["mat_med_loc"];?> 

        </p>
    </div>
    
<?php 
    endforeach;
?>
