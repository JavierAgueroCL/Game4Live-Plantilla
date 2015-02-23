<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

?>
<div class="row woocommerce-cart-empty">
<div class="large-7 columns large-centered">
<h1><span class="icon-shopping-cart"></span></h1>
<h3><?php _e( 'Your cart is currently empty.', 'radium' ) ?></h3>

<?php do_action('woocommerce_cart_is_empty'); ?>

<p  class="return-to-shop"><a class="button transparent red wc-backward" href="<?php echo get_permalink(wc_get_page_id('shop')); ?>"><?php _e( '&larr; Return To Shop', 'radium' ) ?></a></p>
</div>

</div>
