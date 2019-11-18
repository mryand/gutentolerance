<?php

function gutentolerance_admin_body_class($classes) {
    $add_classes = array('gutentolerance-enabled');
    $options = get_option( 'gutentolerance_options' );
    if(isset($options['gutentolerance_field_suppress_preview'])) {
        $add_classes[] = 'gutentolerance-suppress-preview--'.$options['gutentolerance_field_suppress_preview'];
    } else {
        $add_classes[] = 'gutentolerance-suppress-preview--yes';
    }
    return $classes . ' ' . implode(' ', $add_classes) . ' ';
}

add_filter('admin_body_class', 'gutentolerance_admin_body_class');
