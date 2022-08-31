<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'veggo-shop' ); ?></a>

<div class="main-header-box">
	<div class="top-header text-center text-md-left py-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 align-self-center top-info-box">
					<?php if ( get_theme_mod('veggo_shop_free_delivery_link') || get_theme_mod('veggo_shop_free_delivery_text') ) : ?>
						<a href="<?php echo esc_url( get_theme_mod('veggo_shop_free_delivery_link' ) ); ?>" ><?php echo esc_html( get_theme_mod('veggo_shop_free_delivery_text' ) ); ?></a><span class="ml-2">|</span>
					<?php endif; ?>
					<?php if ( get_theme_mod('veggo_shop_live_chat_link') || get_theme_mod('veggo_shop_live_chat_text') ) : ?>
						<a href="<?php echo esc_url( get_theme_mod('veggo_shop_live_chat_link' ) ); ?>" ><?php echo esc_html( get_theme_mod('veggo_shop_live_chat_text' ) ); ?></a><span class="ml-2">|</span>
					<?php endif; ?>
					<?php if ( get_theme_mod('veggo_shop_track_order_link') || get_theme_mod('veggo_shop_track_order_text') ) : ?>
						<a href="<?php echo esc_url( get_theme_mod('veggo_shop_track_order_link' ) ); ?>" ><?php echo esc_html( get_theme_mod('veggo_shop_track_order_text' ) ); ?></a>
					<?php endif; ?>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 align-self-center">
		    		<div class="logo text-center">
			    		<div class="logo-image mr-3">
			    			<?php echo esc_url( the_custom_logo() ); ?>
				    	</div>
				    	<div class="logo-content">
					    	<?php
					    		if ( get_theme_mod('veggo_shop_display_header_title', true) == true ) :
						      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      			echo esc_attr(get_bloginfo('name'));
						      		echo '</a>';
						      	endif;

						      	if ( get_theme_mod('veggo_shop_display_header_text', true) == true ) :
					      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
					      		endif;
				    		?>
						</div>
					</div>
			   	</div>
				<div class="col-lg-5 col-md-4 col-sm-4 align-self-center">
					<?php $veggo_shop_settings = get_theme_mod( 'veggo_shop_social_links_settings' ); ?>
					<div class="social-links text-center text-md-left text-lg-right py-2 py-md-0">
						<?php if ( is_array($veggo_shop_settings) || is_object($veggo_shop_settings) ){ ?>
							<span class="mr-3"><?php esc_html_e( 'Connect with us  ','veggo-shop' ); ?></span> 
					    	<?php foreach( $veggo_shop_settings as $veggo_shop_setting ) { ?>
						        <a href="<?php echo esc_url( $veggo_shop_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $veggo_shop_setting['link_text'] ); ?> mr-3"></i>
						        </a>
					    	<?php } ?>
						<?php } ?>
						<?php if ( get_theme_mod('veggo_shop_myaccount_link') ) : ?>
							<a href="<?php echo esc_url( get_theme_mod('veggo_shop_myaccount_link' ) ); ?>" class="myacunt-url"><i class="fas fa-user-circle mr-2"></i><?php esc_html_e('My Account','veggo-shop'); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="site-navigation" class="header text-center text-md-left">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
					<?php if(has_nav_menu('main-menu')){ ?>
						<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
							<span aria-hidden="true"><?php esc_html_e( 'Menu', 'veggo-shop' ); ?></span>
						</button>
						<nav id="main-menu" class="close-panal">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container' => 'false'
								));
							?>
							<button class="close-menu my-2 p-2" type="button">
								<span aria-hidden="true"><i class="fa fa-times"></i></span>
							</button>
						</nav>
					<?php }?>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 align-self-center pb-md-3 pb-lg-0">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7 align-self-center pr-md-0">
					        <?php if(class_exists('woocommerce')){ ?>
					          <form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
					            <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'veggo-shop'); ?></label>
					            <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_html('Search Hear','veggo-shop'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
					            <button type="submit" value="" class="search-button"><i class="fas fa-search"></i></button>
					            <input type="hidden" name="post_type" value="product"/>
					          </form>
					        <?php }?>
				       	</div>
				       	<div class="col-lg-5 col-md-5 col-sm-5 align-self-center pl-md-0">
					        <?php if(class_exists('woocommerce')){ ?>
					          	<button class="product-btn"><?php echo esc_html_e('All Categories','veggo-shop'); ?><i class="fas fa-chevron-down"></i></button>
					          	<div class="product-cat">
									<?php
										$args = array(
											'orderby'    => 'title',
											'order'      => 'ASC',
											'hide_empty' => 0,
											'parent'  => 0
										);
										$product_categories = get_terms( 'product_cat', $args );
										$count = count($product_categories);
									if ( $count > 0 ){
										foreach ( $product_categories as $product_category ) {
										$product_cat_id   = $product_category->term_id;
										$cat_link = get_category_link( $product_cat_id );
										if ($product_category->category_parent == 0) { ?>
										<li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
										<?php
									}
									echo esc_html( $product_category->name ); ?></a><i class="fas fa-chevron-right ml-3"></i></li>
									<?php } } ?>
					          	</div>
					        <?php }?>
					    </div>
			       </div>
				</div>
			</div>
		</div>
	</header>
</div>
<?php if ( get_theme_mod('veggo_shop_feature_text1') || get_theme_mod('veggo_shop_feature_text2') || get_theme_mod('veggo_shop_feature_text3') ) : ?>
	<div class="features py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
					<?php if ( get_theme_mod('veggo_shop_feature_text1')) : ?>
						<p class="mb-0"><i class="fas fa-gift mr-3"></i><?php echo esc_html( get_theme_mod('veggo_shop_feature_text1' ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
					<?php if ( get_theme_mod('veggo_shop_feature_text2')) : ?>
						<p class="mb-0"><i class="fas fa-truck mr-3"></i><?php echo esc_html( get_theme_mod('veggo_shop_feature_text2' ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
					<?php if ( get_theme_mod('veggo_shop_feature_text3')) : ?>
						<p class="mb-0"><i class="fas fa-comment-alt mr-3"></i><?php echo esc_html( get_theme_mod('veggo_shop_feature_text3' ) ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>