<?php
/**
 * The template for displaying all pages
 *
 * @package WP Fashion Storefront
 */

get_header();
?>
<div class="container">
	<div class="site-wrapper">
		<main id="primary" class="site-main lay-width">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'revolution/template-parts/content', 'page' );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main>
		<?php if ( is_active_sidebar( 'sidebar-1' )) { ?>
		<aside id="secondary" class="widget-area sidebar-width">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>
		<?php } else { ?>
			<aside id="secondary" class="widget-area sidebar-width">
				<div class="default-sidebar">
					<aside id="search-3" class="widget widget_search">
			            <h2 class="widget-title"><?php esc_html_e('Search', 'wp-fashion-storefront'); ?></h2>
			            <form method="get" id="searchform" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
				            <input placeholder="<?php esc_attr_e('Type here...', 'wp-fashion-storefront'); ?>" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
				            <input type="submit" class="search-field" value="<?php esc_attr_e('Search …', 'wp-fashion-storefront');?>" />
				        </form>
			        </aside>
			        <aside id="categories-2" class="widget widget_categories">
			            <h2 class="widget-title"><?php esc_html_e('Categories', 'wp-fashion-storefront'); ?></h2>
			            <ul>
			                <?php
			                wp_list_categories(array(
			                    'title_li' => '',
			                ));
			                ?>
			            </ul>
			        </aside>
			        <aside id="pages-2" class="widget widget_pages">
			            <h2 class="widget-title"><?php esc_html_e('Pages', 'wp-fashion-storefront'); ?></h2>
			            <ul>
			                <?php
			                wp_list_pages(array(
			                    'title_li' => '',
			                ));
			                ?>
			            </ul>
			        </aside>
			        <aside id="archives-2" class="widget widget_archive">
			            <h2 class="widget-title"><?php esc_html_e('Archives', 'wp-fashion-storefront'); ?></h2>
			            <ul>
			            <?php
			            wp_get_archives(array(
			                'type' => 'postbypost',
			                'format' => 'html',
			                'before' => '<li>',
			                'after' => '</li>',
			            ));
			            ?>
			        </ul>
			       </aside>
			   </div>
			</aside>
	<?php } ?>
	</div>
</div>
<?php
get_footer();