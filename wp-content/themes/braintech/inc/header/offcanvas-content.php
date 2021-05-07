<?php 

global $braintech_option;
if(!empty($braintech_option['facebook']) || !empty($braintech_option['twitter']) || !empty($braintech_option['rss']) || !empty($braintech_option['pinterest']) || !empty($braintech_option['google']) || !empty($braintech_option['instagram']) || !empty($braintech_option['vimeo']) || !empty($braintech_option['tumblr']) ||  !empty($braintech_option['youtube'])){
?>

    <ul class="offcanvas_social">  
        <?php
        if(!empty($braintech_option['facebook'])) { ?>
        <li> 
        <a href="<?php echo esc_url($braintech_option['facebook'])?>" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
        </li>
        <?php } ?>
        <?php if(!empty($braintech_option['twitter'])) { ?>
        <li> 
        <a href="<?php echo esc_url($braintech_option['twitter']);?> " target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
        </li>
        <?php } ?>
        <?php if(!empty($braintech_option['rss'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($braintech_option['rss']);?> " target="_blank"><span><i class="fa fa-rss"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($braintech_option['pinterest'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($braintech_option['pinterest']);?> " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($braintech_option['linkedin'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($braintech_option['linkedin']);?> " target="_blank"><span><i class="fa fa-linkedin"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($braintech_option['google'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($braintech_option['google']);?> " target="_blank"><span><i class="fa fa-google-plus-square"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($braintech_option['instagram'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($braintech_option['instagram']);?> " target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
        </li>
        <?php } ?>
        <?php if(!empty($braintech_option['vimeo'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($braintech_option['vimeo'])?> " target="_blank"><span><i class="fa fa-vimeo"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($braintech_option['tumblr'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($braintech_option['tumblr'])?> " target="_blank"><span><i class="fa fa-tumblr"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($braintech_option['youtube'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($braintech_option['youtube'])?> " target="_blank"><span><i class="fa fa-youtube"></i></span></a> 
        </li>
        <?php } ?>     
    </ul>
<?php }

