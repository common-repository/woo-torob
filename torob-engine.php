<?php
if ( ! function_exists('wootooplu_kanithemes_add_meta_tags') )  {
	function wootooplu_kanithemes_add_meta_tags(){
		if (is_singular('product')) {
			global $post;
			$product = wc_get_product($post->ID);
			$product_type = $product->get_type();
			$price = 0;
			$oldprice = 0;
			$availability = 'false';
			if ($product->is_in_stock()){
				$availability = 'true';
			}
			switch ($product_type) {
				case 'simple':
				{
					if( $product->is_on_sale() ) {
						$oldprice = $product->get_regular_price();
						$price = $product->get_sale_price();
					} else {
						$price = $product->get_regular_price();
					}
				}
				break;
				
				case 'variable':
				{
					$default_variation = get_post_meta(  $product->get_id(), '_default_attributes' );

					$newarr = array();
					foreach ($default_variation as $value) {
						if( is_array($value) ) {
							foreach ($value as $k => $v) {
								// $newarr[$v] = '[attribute_' . $k . ']';
								$newarr['attribute_' . $k ] = $v;
							}

						}
					}


					$all_variations = $product->get_available_variations();

					$arr_variations_id = array();
					foreach ($all_variations as $variation) {
						if( $variation['attributes'] === $newarr ) {
							
							if ($variation['display_price'] == $variation['display_regular_price']) {
								$price = $variation['display_price'];
							} else {
								$price = $variation['display_price'];
								$oldprice = $variation['display_regular_price'];
							}

							break;
						}
					}

				}
				break;
			}

			echo '<meta name="price" content="'. $price .'" />' . "\n";
			if ( $oldprice != 0 ) {
				echo '<meta name="oldprice" content="'. $oldprice .'" />' . "\n";
			}
			echo '<meta name="availability" content="'. $availability .'" />' . "\n";

		}
	}
}
add_action( 'wp_head', 'kanithemes_add_meta_tags_for_torob_engine' , 2 );
?>