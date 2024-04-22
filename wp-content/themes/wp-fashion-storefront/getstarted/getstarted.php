<?php
//about theme info
add_action( 'admin_menu', 'wp_fashion_storefront_gettingstarted' );
function wp_fashion_storefront_gettingstarted() {    	
	add_theme_page( esc_html__('About WP Fashion Storefront', 'wp-fashion-storefront'), esc_html__('About WP Fashion Storefront', 'wp-fashion-storefront'), 'edit_theme_options', 'wp_fashion_storefront_guide', 'wp_fashion_storefront_mostrar_guide');   
}
function wp_fashion_storefront_admin_theme_style() {
   wp_enqueue_style('wp-fashion-storefront-custom-admin-style', esc_url(get_template_directory_uri()) . '/getstarted/getstarted.css');
   wp_enqueue_script('wp-fashion-storefront-tabs', esc_url(get_template_directory_uri()) . '/getstarted/js/tab.js');
}
add_action('admin_enqueue_scripts', 'wp_fashion_storefront_admin_theme_style');
function wp_fashion_storefront_mostrar_guide() { 
	$return = add_query_arg( array()) ;
	$wp_fashion_storefront_theme = wp_get_theme( 'wp-fashion-storefront' );
?>
<?php $wp_fashion_storefront_theme = wp_get_theme(); ?>
<div class="theme-about-wrap">
    <div class="about-header">
        <div class="about-header-column">
            <h1><?php esc_html_e('WP Fashion Storefront!', 'wp-fashion-storefront'); ?></h1>
        </div>
        <div class="about-header-column">
           <a class="btn btn-default btn2" target="_blank" href="<?php echo esc_url(WP_FASHION_STOREFRONT_BUY_NOW ); ?>"><?php esc_html_e('Get WP Fashion Storefront Pro', 'wp-fashion-storefront'); ?></a>
            <a class="btn btn-default btn1" target="_blank" href="<?php echo esc_url(WP_FASHION_STOREFRONT_LITE_DOC ); ?>"><?php esc_html_e('Documentation', 'wp-fashion-storefront'); ?></a>
        </div>
    </div>
    <div class="tab-section">
          <h2><?php esc_html_e('More About WP Fashion Storefront', 'wp-fashion-storefront'); ?></h2>
        <div class="theme-content-wrap">
        		<div class="col-md-7">
              <div class="tab-container">
                <div class="tabs">
                  <button class="tab active"><?php esc_html_e('Essential Links', 'wp-fashion-storefront'); ?></button>
                  <button class="tab"> <?php esc_html_e('Lite Vs Premium', 'wp-fashion-storefront'); ?></button>
                </div>
                <div class="tab-content">
                  <div class="gre-box">
			            <h3><?php esc_html_e('Editing Homepage', 'wp-fashion-storefront'); ?></h3>
			            <p> <?php esc_html_e('Go to Apearance > Customizer > WP Fashion Storefront Theme Options edit our lite version', 'wp-fashion-storefront'); ?>
			            </p>
			            <a class="btn btn-default" href="<?php echo esc_url( admin_url( 'customize.php' ) ) ?>"><?php esc_html_e('Go to Customizer', 'wp-fashion-storefront'); ?></a>
			        </div>
                  <div class="gre-box">
                    <h3><?php esc_html_e('Demo for WP Fashion Storefront (Premium) ', 'wp-fashion-storefront'); ?></h3>
                    <p><?php esc_html_e('Check out the amazing WP Fashion Storefront premium version demo.', 'wp-fashion-storefront'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url(WP_FASHION_STOREFRONT_LIVE_DEMO ); ?>"><?php esc_html_e('View Demo', 'wp-fashion-storefront'); ?></a>
                  </div>
                  <div class="gre-box">
                    <h3><?php esc_html_e('Our Lite Theme Documentation', 'wp-fashion-storefront'); ?></h3>
                    <p><?php esc_html_e('Take a look at our guides and start customizing themes with ease. With the help of our documentation, which offers insightful information on every facet of theme functioning, you can confidently build a website that realizes your idea.', 'wp-fashion-storefront'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url(WP_FASHION_STOREFRONT_LITE_DOC ); ?>"><?php esc_html_e('View Documentation', 'wp-fashion-storefront'); ?></a>
                  </div>
                  <div class="gre-box">
                    <h3><?php esc_html_e('Support Ticket', 'wp-fashion-storefront'); ?></h3>
                    <p><?php esc_html_e('Take a look at our guides and start customizing themes with ease. With the help of our documentation, which offers insightful information on every facet of theme functioning, you can confidently build a website that realizes your idea.', 'wp-fashion-storefront'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url(WP_FASHION_STOREFRONT_FREE_SUPPORT ); ?>"><?php esc_html_e('Contact Support', 'wp-fashion-storefront'); ?></a>
                  </div>
                </div>
                <div class="tab-content hidden">
                        <table>
                          <tr>
                            <th><?php esc_html_e('Features', 'wp-fashion-storefront'); ?></th>
                            <th><?php esc_html_e('Free Version', 'wp-fashion-storefront'); ?></th>
                            <th><?php esc_html_e('Premium Version', 'wp-fashion-storefront'); ?></th>
                          </tr>
                           <tr>
                            <td><?php esc_html_e('Priority Support', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Responsive Design', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Easy Setup', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('One Click Demo Import', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('SEO Optimized', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Cross Browser Compatible', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Translation Ready', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Change Footer Copyright', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Better Homepage Design', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Banner Image Slider', 'wp-fashion-storefront'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                        </table>
                </div>
                <div class="tab-content hidden"></div>
              </div>
            </div>
        		<div class="col-md-5">
    					<div class="gre-box side">
 							<h3><?php esc_html_e('Checkout WP Fashion Storefront Premium Version', 'wp-fashion-storefront'); ?></h3>
                    <p><?php esc_html_e('WP Fashion Storefront Premium version comes with lot more features and better designs. Also We provide priority support to Premium version users.', 'wp-fashion-storefront'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url(WP_FASHION_STOREFRONT_BUY_NOW ); ?>"><?php esc_html_e('Get WP Fashion Storefront Pro', 'wp-fashion-storefront'); ?></a>
                  </div>
                  <div class="gre-box side">
                    <h3><?php esc_html_e('Admire the WP Fashion Storefront Theme?', 'wp-fashion-storefront'); ?></h3>
                    <p><?php esc_html_e('Give us your support by leaving a 5-star review; it only takes a few minutes. It will be of great assistance to us.', 'wp-fashion-storefront'); ?></p>
                    <a class="btn btn-default btn1" target="_blank" href="<?php echo esc_url(WP_FASHION_STOREFRONT_REVIEW ); ?>"><?php esc_html_e('Add a Review', 'wp-fashion-storefront'); ?></a>
                 </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>