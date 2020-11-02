<?php


function get_related_news() {
 
    $post_id = get_the_ID();
    $cat_ids = array();

    $categories = get_the_category( $post_id );


    if ( $categories && ! is_wp_error( $categories ) ) {
         
        foreach ( $categories as $category ) {
     
            array_push( $cat_ids, $category->term_id );
     
        }
         
    }


    $current_post_type = get_post_type( $post_id );
     
    $args = array(
        'category__in' => $cat_ids,
        'post_type' => 'post',
        'posts_per_page' => '3',
        'post__not_in' => array( $post_id )
    );



    $the_query = new WP_Query( $args );
 
    if ( $the_query->have_posts() ) { ?>


        <section class="section news">

        <div class="txt-ctr mb-2">
            <h2 class="section_title">Nos chantiers</h2>
        </div>

        <div class="section_cards--third flex">

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
                        <div>
                            <span class="ft_1">Date :</span> <span class="ft_1 blue"><?php the_field('chantier_date'); ?></span>
                        </div>
                        <div>
                            <span class="ft_1">Client :</span> <span class="ft_1 blue"><?php the_field('chantier_client'); ?></span>
                        </div>
                        <div>
                            <span class="ft_1">Lieu : </span> <span class="ft_1 blue"><?php the_field('chantier_lieu'); ?></span>
                        </div>	
                    </a>
                </div>

            <?php endwhile; ?>
        </div>
        </section>



        <?php
     
    }
     
    wp_reset_postdata();

}