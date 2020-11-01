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

        <div class="section_cards--half flex wrap">

            <?php if( $services ): ?>
                <?php foreach( $services as $post ): ?>

                    <?php setup_postdata($post); ?>

                    <?php 
                        get_template_part( 'template-parts/blocks/block', 'service--extended' ); ?>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>



        </div>


    </div>
</section>