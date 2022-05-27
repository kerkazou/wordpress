<?php
/**
 * The Slider for our theme.
 *
 * Display all information related to slider
 *
 * @package Cars Lite
*/

if (!is_home() && is_front_page()) {

  $cars_hide_slider = get_theme_mod( 'hide_slider', '1' );
  if( $cars_hide_slider == '' ){
    $cars_lite_pages = array();

    for( $sld=1; $sld<4; $sld++ ) {
      $getsld = absint( get_theme_mod( 'slide'.$sld ) );
      if ( 'page-none-selected' != $getsld ) {
        $cars_lite_pages[] = $getsld;
      }
    }

    if( !empty( $cars_lite_pages ) ) :

      $args = array(
        'posts_per_page' => 3,
        'post_type' => 'page',
        'post__in' => $cars_lite_pages,
        'orderby' => 'post__in'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) : 
      $sld = 7;
?>
<div id="theme-slider" class="cars-slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
      <?php
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $i++;
          $cars_lite_slideno[] = $i;
          $cars_lite_slidetitle[] = get_the_title();
          $cars_lite_slidedesc[] = get_the_excerpt();
          $cars_lite_slidelink[] = esc_url(get_permalink());
          $image_id = get_post_thumbnail_id();
          $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($image_alt); ?>"/>
          <?php
          $getsld++;
        endwhile;
      ?>
    </div><!-- slider wraper -->
    <?php
      $k = 0;
      foreach( $cars_lite_slideno as $cars_lite_sln ){ ?>
      <div id="slidecaption<?php echo esc_attr( $cars_lite_sln ); ?>" class="nivo-html-caption">
        <div class="inner-caption">
          <h2><a href="<?php echo esc_url($cars_lite_slidelink[$k] ); ?>"><?php echo esc_html($cars_lite_slidetitle[$k] ); ?></a></h2>
          <p><?php echo esc_html($cars_lite_slidedesc[$k] ); ?></p>
          <?php if( !empty( get_theme_mod('slide_more',true) ) ){ ?>
          <a class="read-more" href="<?php echo esc_url($cars_lite_slidelink[$k] ); ?>">
            <?php echo esc_html(get_theme_mod('slide_more',__('Read More','cars-lite')));?>
          </a>
          <?php } ?>
        </div><!-- inner caption -->
      </div>
      <?php $k++;
      wp_reset_postdata();
      }
    ?>
  </div><!-- slider -->
</div><!-- cars slider -->
<?php endif;

    endif;

  }

}