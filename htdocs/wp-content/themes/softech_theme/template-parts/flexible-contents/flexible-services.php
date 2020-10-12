<?php
    // VARIABLES
    if( isset($title) ) {
        if( $title === '' ) {
            $title = get_sub_field('section_title');
        }
    }
    else {
        $title = get_sub_field('section_title');
    }
    
    if( !isset($services) ) {
        $services = get_sub_field('section_pages');
    }
?>

<section class="section services">
    <div class="section_inner">

        <div class="wrap txt-ctr ">
            <h2 class="section_title"><?php echo $title; ?></h2>
        </div>

        <div class="section_cards flex wrap">

            <?php if( $services ): ?>
                <?php foreach( $services as $post ): ?>

                    <?php setup_postdata($post); ?>


                    <div class="service_card">
                        <a href="<?php the_permalink(); ?>" class="link_block">
                            <div class="card_cover ratio_1_2">
                                <div class="ratio_inner">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <h2 class="h_21 service_title txt-ctr"><?php the_title(); ?></h2>
                            <div>
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>



        </div>


    </div>
</section>