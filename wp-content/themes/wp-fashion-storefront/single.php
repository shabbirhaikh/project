<?php
/**
 * The template for displaying all single posts
 *
 * @package WP Fashion Storefront
 */

get_header();
?>

<div class="container">
	<div class="main-wrapper">
		<main id="primary" class="site-main lay-width">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'revolution/template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wp-fashion-storefront' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wp-fashion-storefront' ) . '</span> <span class="nav-title">%title</span>',
					)
				);
				?>

				<?php 
				do_action('wp_fashion_storefront_related_posts');
				?>
				
				<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main>

		<?php
		get_sidebar();	?>
	</div>
</div>
<?php
get_footer();