</main>
<?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>
<aside id="sidebar" role="complementary">
<div class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
</ul>
</div>
</aside>
<?php endif; ?>
</div>
<footer id="footer" role="contentinfo">
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
<aside id="sidebar-footer" role="complementary">
<div class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'footer-widget-area' ); ?>
</ul>
</div>
</aside>
<?php endif; ?>
<nav id="footer-menu">
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'fallback_cb' => false ) ); ?>
</nav>
<?php
$menu_name = esc_attr( 'social-menu' );
$locations = get_nav_menu_locations();
if ( isset( $locations[$menu_name] ) ) {
$menu = wp_get_nav_menu_object( $locations[$menu_name] );
$menu_items = $menu ? wp_get_nav_menu_items( $menu->term_id ) : array();
echo '<div id="social-menu">';
foreach ( ( array ) $menu_items as $key => $menu_item ) {
if ( !is_object( $menu_item ) ) {
continue;
}
$title = $menu_item->title;
$url = $menu_item->url;
if ( strpos( $title, 'icon' ) == false ) {
if ( strpos( $url, 'facebook' ) !== false ) {
$social = esc_url( get_stylesheet_directory_uri() ) . '/images/fb.svg';
} elseif ( strpos( $url, 'twitter' ) !== false ) {
$social = esc_url( get_stylesheet_directory_uri() ) . '/images/tw.svg';
} elseif ( strpos( $url, 'instagram' ) !== false ) {
$social = esc_url( get_stylesheet_directory_uri() ) . '/images/ig.svg';
} elseif ( strpos( $url, 'pinterest' ) !== false ) {
$social = esc_url( get_stylesheet_directory_uri() ) . '/images/pn.svg';
} elseif ( strpos( $url, 'youtube' ) !== false ) {
$social = esc_url( get_stylesheet_directory_uri() ) . '/images/yt.svg';
} else {
$social = '';
}
echo '<a href="' . esc_url( $url ) . '" rel="me"><i class="icon" style="mask:url(' . esc_url( $social ) . ')"></i></a>';
} else {
echo '<a href="' . esc_url( $url ) . '" rel="me">' . wp_kses_post( $title ) . '</a>';
}
}
echo '</div>';
}
?>
<div id="copyright">
<?php if ( esc_html( get_theme_mod( 'pages_copyright' ) ) ) { ?>
<?php echo esc_html( get_theme_mod( 'pages_copyright' ) ) ?>
<?php } else { ?>
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'pages' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
<?php } ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>