<?php
/**
 * Plugin Name: Quản lý thương hiệu sản phẩm
 * Plugin URI: https://example.com/
 * Description: Quản lý thương hiệu sản phẩm cho WooCommerce.
 * Version: 1.0
 * Author: nhloc
 * Author URI: https://example.com/
 * Text Domain: product-brand
 * Domain Path: /languages
 */

// Ngăn chặn truy cập trực tiếp
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Tạo taxonomy 'product_brand'
function register_product_brand_taxonomy() {
    $labels = array(
        'name'              => _x( 'Thương hiệu', 'taxonomy general name', 'product-brand' ),
        'singular_name'     => _x( 'Thương hiệu', 'taxonomy singular name', 'product-brand' ),
        'search_items'      => __( 'Tìm thương hiệu', 'product-brand' ),
        'all_items'         => __( 'Tất cả thương hiệu', 'product-brand' ),
        'parent_item'       => __( 'Thương hiệu cha', 'product-brand' ),
        'parent_item_colon' => __( 'Thương hiệu cha:', 'product-brand' ),
        'edit_item'         => __( 'Chỉnh sửa thương hiệu', 'product-brand' ),
        'update_item'       => __( 'Cập nhật thương hiệu', 'product-brand' ),
        'add_new_item'      => __( 'Thêm thương hiệu mới', 'product-brand' ),
        'new_item_name'     => __( 'Tên thương hiệu mới', 'product-brand' ),
        'menu_name'         => __( 'Thương hiệu', 'product-brand' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'product-brand' ),
    );

    register_taxonomy( 'product_brand', 'product', $args );
}
add_action( 'init', 'register_product_brand_taxonomy' );

// Hiển thị thương hiệu trên trang sản phẩm
function display_product_brand() {
    global $product;
    $brands = get_the_terms( $product->get_id(), 'product_brand' );

    if ( !empty( $brands ) && !is_wp_error( $brands ) ) {
        echo '<div class="product-brand">';
        echo '<strong>' . __( 'Thương hiệu:', 'product-brand' ) . '</strong> ';
        foreach ( $brands as $brand ) {
            echo '<a href="' . esc_url( get_term_link( $brand ) ) . '" rel="tag">' . esc_html( $brand->name ) . '</a>';
            if ( end( $brands ) !== $brand ) {
                echo ', ';
            }
        }
        echo '</div>';
    }
}
add_action( 'woocommerce_single_product_summary', 'display_product_brand', 25 );

// Dịch ngôn ngữ plugin
function product_brand_load_textdomain() {
    load_plugin_textdomain( 'product-brand', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'product_brand_load_textdomain' );
