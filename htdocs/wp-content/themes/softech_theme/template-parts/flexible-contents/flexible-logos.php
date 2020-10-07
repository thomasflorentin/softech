<?php

$title = get_sub_field('section_title');
$logos = get_sub_field('section_logos');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

?>


<section class="section logos">
    <div class="section_inner wrap">
    
        <div class="">
            <h2 class="txt-ctr section_title"><?php echo $title; ?></h2>
        </div>

        <div class="section_logos">
            <?php if( $logos ): ?>
                <ul class="logos_list">
                    <?php foreach( $logos as $img ): ?>
                        <li>
                            <?php echo wp_get_attachment_image( $img['id'], $size ); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>


    </div>

</section>