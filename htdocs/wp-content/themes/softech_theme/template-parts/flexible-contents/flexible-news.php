<?php
    // VARIABLES
    $title = get_sub_field('section_title');
    $args = array(
        'post_type' => 'post',
        'posts_per_page'  => 4
    );
    $the_query = new WP_Query( $args );
?>

<section class="section news">
    <div class="section_inner widewrapper">

        <div class=" txt-ctr ">
            <h2 class="section_title"><?php echo $title; ?></h2>
        </div>

        <div class="section_cards flex ">

            <?php if ( $the_query->have_posts() ) : ?>

                <?php while ( $the_query->have_posts() ) : ?>
                    <?php $the_query->the_post(); ?>

                    <div class="news_card">
                        <a href="<?php the_permalink(); ?>" class="link_block">
                            <div class="card_cover ratio_2_3">
                                <div class="ratio_inner">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <h2 class="h_4 news_title"><?php the_title(); ?></h2>

                            <?php if( get_field('chantier_date') != '' ) : ?>
                                <div>
                                    <span class="ft_1">Date :</span> <span class="ft_1 blue"><?php the_field('chantier_date'); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if( get_field('chantier_client') != ''  ) : ?>
                                <div>
                                    <span class="ft_1">Client :</span> <span class="ft_1 blue"><?php the_field('chantier_client'); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if( get_field('chantier_lieu') != ''  ) : ?>
                                <div>
                                    <span class="ft_1">Lieu : </span> <span class="ft_1 blue"><?php the_field('chantier_lieu'); ?></span>
                                </div>
                            <?php endif; ?>



                        </a>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>


    </div>
</section>