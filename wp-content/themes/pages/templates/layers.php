<?php /* Template Name: Layers (full-width / no padding / no margin / no title) */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<?php edit_post_link(); ?>
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( !post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>