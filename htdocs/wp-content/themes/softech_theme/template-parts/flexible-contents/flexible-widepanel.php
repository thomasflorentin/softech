<?php
    // VARIABLES
    $title = get_sub_field('section_title');
    $intro = get_sub_field('section_intro');
    $image = get_sub_field('section_image');

?>

<section class="section widepanel">
    <div class="section_inner">

        <div class="wrap ">
            <div class="section_content">
                <h2 class="section_title"><?php echo $title; ?></h2>
                <div class="">
                    <?php echo $intro; ?> 
                </div>
                <?php if( get_sub_field('section_btnlabel') != '' ) : ?>
                    <div class="section_action">
                        <a href="<?php the_sub_field('section_link'); ?>" class="btn--yellow">
                            <?php the_sub_field('section_btnlabel'); ?>
                        </a>
                    </div>
                <?php endif; ?> 
            </div>
        </div>

        <div class="section_cover">
            <?php $size = 'large'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
				echo wp_get_attachment_image( $image['id'], $size );
			} ?>
        </div>


    </div>
</section>