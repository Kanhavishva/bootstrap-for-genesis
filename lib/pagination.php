<?php
/**
 * Pagination
 *
 * @package      B4Genesis
 * @since        1.0
 * @link         http://rotsenacob.com
 * @author       Rotsen Mark Acob <rotsenacob.com>
 * @copyright    Copyright (c) 2017, Rotsen Mark Acob
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Remove default pagination class
// remove_filter( 'genesis_attr_archive-pagination', 'genesis_attributes_pagination' );

// Pagination Numeric
add_filter( 'genesis_prev_link_text', 'bfg_genesis_prev_link_text_numeric' );
add_filter( 'genesis_next_link_text', 'bfg_genesis_next_link_text_numeric' );

function bfg_genesis_prev_link_text_numeric( $text ) {
    if ( 'numeric' === genesis_get_option( 'posts_nav' ) ) {
        return '<span aria-hidden="true">&laquo;</span>'
            . '<span class="sr-only">' . __( 'Previous Page', 'b4genesis' ) . '</span>';
    }
    return $text;
}

function bfg_genesis_next_link_text_numeric( $text ) {
    if ( 'numeric' === genesis_get_option( 'posts_nav' ) ) {
        return '<span class="sr-only">' . __( 'Next Page', 'b4genesis' ) . '</span>'
            . '<span aria-hidden="true">&raquo;</span>';
    }
    return $text;
}