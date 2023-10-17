
<?php 
    foreach($news_med as $new_med): 
?>
    <div class="post-item clearfix">
        <!-- IMAGE -->
        <img src="../../../warehouse_img/img/med_img/<?=$new_med["med_img"];?>" alt="IMG">
        <!-- DESCRIPTIONS -->
        <h4><a href="#"> <?= $new_med["Descriptions"]?></a></h4>
        <!-- CLASSIFICATIONS -->
        <p>
            <?= $new_med["med_affiche_classification"];?>
            <br>
        <!-- LOCATIONS -->
            <?= $new_med["med_affiche_location"];?> 
        </p>
    </div>
<?php 
    endforeach;
?>
