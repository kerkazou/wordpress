<?php
/**
 * The Second Section for our theme.
 *
 * Display all information related to second section
 *
 * @package Cars Lite
*/

$carshideser = get_theme_mod( 'cars_hide_ser','1' );

if( $carshideser == '' ){
    echo '<section class="service-section"><div class="wrapper">';

        $serttl = get_theme_mod('cars_ser_ttl','1');
        if( !empty( $serttl ) ){
          echo '<div class="section_head"><h2 class="section_title">'.esc_html($serttl).'</h2></div>';
        }
        $sermore = get_theme_mod('cars_ser_more');
        if( !empty( $sermore ) ){
          $shwsermore .= '<a href="'.get_the_permalink().'" class="read-more">'.esc_html($sermore).'</a>';
        }

        echo '<div class="flexbox">';
            for( $ser = 1; $ser<4; $ser++ ){
                if( get_theme_mod( 'ser'.$ser,true ) !='' ){
                    $serqry = new WP_Query( array( 'page_id' => get_theme_mod( 'ser'.$ser ) ) );
                    while( $serqry->have_posts() ) : $serqry->the_post();
                        $shwthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'cars-lite-homepage-thumb');
                        $image_id = get_post_thumbnail_id();
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        echo '<div class="box"><div class="service-box">';
                            if( has_post_thumbnail() ) {
                              echo '<div class="service-thumb"><img src="'.esc_url($shwthumb[0]).'" alt="'.esc_attr($image_alt).'"/></div><!-- service thumb -->';
                            }
                            echo '<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3><p>'.get_the_excerpt().'</p>'.$shwsermore.'';
                        echo '</div></div>';
                    endwhile; wp_reset_postdata();
                }
            }
    echo '</div></div></section>';
}