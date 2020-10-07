<?php
    // VARIABLES
    $title = get_sub_field('section_title');
    $image = get_sub_field('section_image');

?>

<section class="section widepanel">
    <div class="section_inner">

        <div class="wrap ">
            <div class="section_content">
                <h2 class="section_title"><?php echo $title; ?></h2>
                <div class="">
                    cioehfhehf 
                </div>     
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