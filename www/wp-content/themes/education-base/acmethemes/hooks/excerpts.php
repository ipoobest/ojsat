<?php
/**
 * Add ... for more view
 *
 * @since Education Base 1.0.0
 *
 * @param null
 * @return null
 *
 */

if ( !function_exists('education_base_excerpt_more') ) :
    function education_base_excerpt_more($more) {
        return '...';
    }
endif;
add_filter('excerpt_more', 'education_base_excerpt_more');