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
    <div class="section_inner">

        <div class="wrap txt-ctr ">
            <h2 class="section_title"><?php echo $title; ?></h2>
        </div>

        <div class="section_cards flex widewrapper">

            <?php if ( $the_query->have_posts() ) : ?>

                <?php while ( $the_query->have_posts() ) : ?>
                    <?php $the_query->the_post(); ?>

                    <div class="news_card">
                        <a href="<?php the_permalink(); ?>" class="link_block">
                            <div class="card_cover ratio_1_1">
                                <div class="ratio_inner">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <h2 class="h_2 news_title"><?php the_title(); ?></h2>
                            <div>
                                <span class="ft_1">Client :</span> <span class="ft_1 blue"><?php the_field('chantier_client'); ?></span>
                            </div>
                            <div>
                                <span class="ft_1">Lieu : </span> <span class="ft_1 blue"><?php the_field('chantier_lieu'); ?></span>
                            </div>
                            <div>
                                <span class="ft_1">Date :</span> <span class="ft_1 blue"><?php the_field('chantier_date'); ?></span>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>


    </div>
</section>