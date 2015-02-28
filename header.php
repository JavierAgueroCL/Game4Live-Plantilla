<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until <div id="main-container">
 *
 * @package NewsCore
 * @since RadiumFramework 1.0.0
 */

do_action( 'radium_doctype' );
do_action( 'radium_meta' );
do_action( 'radium_title' );
 
wp_head(); //* we need this for plugins and hooks
?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/jquery.bxslider.css" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.bxslider.min.js"></script>
<link rel='stylesheet' id='theme-mobile-css'  href="<?php bloginfo('template_url'); ?>/style.css" type='text/css' media='all' />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php do_action( 'radium_before' ); ?>

    <div id="theme-wrapper">
    	<div id="theme-wrapper-inner">
	    <?php
	    	do_action( 'radium_after_header' );
	    	//do_action( 'radium_before_header' );
	    	//do_action( 'radium_header' );
	    	//do_action( 'radium_after_header' );
	    ?>
	 	<nav class="menu-principal" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
	 			<?php
				/* Main menu */
				$args = array(
				    'container' 	=> '',
					'menu_class' 	=> '',
				    'fallback_cb' 	=> 'radium_fallback_menu',
				    'depth' 		=> 5,
					'theme_location'=> 'primary',
                    'echo' => 0,
				    'walker' 		=> new Radium_Walker()
				);

				echo radium_mega_menu( apply_filters( 'radium_main_menu_args', $args ) );
			 ?>
	 	</nav>

		<div id="main-container">
