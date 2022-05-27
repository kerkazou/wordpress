<?php
/**
 * The Top Bar for our theme.
 *
 * Display all information related to top bar
 *
 * @package Cars Lite
 */

$carstpbrhide = get_theme_mod('cars_tpbr_hide','1');

if( empty( $carstpbrhide ) ) {
	
	$tpbrfb = get_theme_mod('cars_tpbr_fb');
	$tpbrtw = get_theme_mod('cars_tpbr_tw');
	$tpbryt = get_theme_mod('cars_tpbr_yt');
	$tpbrin = get_theme_mod('cars_tpbr_in');
	$tpbrpi = get_theme_mod('cars_tpbr_pin');

	$tpbrphn = get_theme_mod('cars_tpbr_phn');
	$tpbrmail = get_theme_mod('cars_tpbr_mail');
 
	if( !empty( $tpbrfb || $tpbrtw || $tpbryt || $tpbrin || $tpbrpi || $tpbrphn || $tpbrmail ) ){
?>
	<div class="top-header">
		<div class="flexbox">
			<?php 
				if( !empty( $tpbrphn || $tpbrmail ) ){
					echo '<div class="topbar-left">';
						if( !empty( $tpbrphn ) ){
							echo '<span class="tpbr-phn"><i class="fa fa-phone"></i> '.esc_html($tpbrphn).'</span>';
						} if( !empty( $tpbrmail ) ){
							echo '<span class="tpbr-mail"><a href="mailto:'.$tpbrmail.'"><i class="fa fa-envelope"></i> '.esc_html($tpbrmail).'</a></span>';
						}
					echo '</div>';
				}if( !empty( $tpbrfb || $tpbrtw || $tpbryt || $tpbrin || $tpbrpi ) ){ 
					echo '<div class="topbar-right"><div class="topbar-social">';
						if( !empty( $tpbrfb ) ){
							echo '<a href="'.esc_url( $tpbrfb ).'" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
						}
						if( !empty( $tpbrtw ) ){
							echo '<a href="'.esc_url( $tpbrtw ).'" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
						}
						if( !empty( $tpbryt ) ){
							echo '<a href="'.esc_url( $tpbryt ).'" target="_blank" title="YouTube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>';
						}
						if( !empty( $tpbrin ) ){
							echo '<a href="'.esc_url( $tpbrin ).'" target="_blank" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
						}
						if( !empty( $tpbrpi ) ){
							echo '<a href="'.esc_url( $tpbrpi ).'" target="_blank" title="Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>';
						}
					echo '</div><!-- social --></div><!-- topbar left -->';
				}
			?>
		</div><!-- flex -->
	</div><!-- top bar -->
<?php 
	}
}