    <a href="<?php echo get_the_permalink($page->ID); ?>" class="link_block">
        
        <div class="mb-1">
            <?php echo $page->post_title; ?>
        </div>
        
        <div class="ratio_2_3 mb-1">
            <div class="ratio_inner">
                <?php echo get_the_post_thumbnail( $page->ID ); ?>
            </div>  
        </div>

        <span class="txt-on-rgt">> En savoir plus</span>

    </a>