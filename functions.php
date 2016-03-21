<?php
function theme_enqueue_styles() {

        $parent_style = 'parent-style';

            wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
            wp_enqueue_style( 'child-style',
                        get_stylesheet_directory_uri() . '/style.css',
                                array( $parent_style )
                                    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



add_filter('woocommerce_currency_symbol','aed_change_symbol',1,2);
function aed_change_symbol($currency_symbol, $currency) {
        if($currency == 'AED')
                    $currency_symbol = 'AED';
            return $currency_symbol;
}

?>
