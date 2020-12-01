    <div class="service_card">
        
        <a href="<?php the_permalink(); ?>" class="link_block">
            
            <h2 class="h_4 service_title mb-05">
                <?php the_title(); ?>
            </h2>

            <div class="card_cover ratio_1_2 mb-1">
                <div class="ratio_inner">
                    <?php the_post_thumbnail('service-thumb'); ?>
                </div>
            </div>


            <div class="mb-1 card_excerpt">
                <?php the_excerpt(); ?>
            </div>

            <span class="txt-on-rgt">> En savoir plus</span>

        </a>
    </div>