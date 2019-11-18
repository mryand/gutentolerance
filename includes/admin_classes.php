<?php

function gutentolerance_admin_body_class($classes) {
    $add_classes = array('gutentolerance-enabled');
    $options = get_option( 'gutentolerance_options' );
    echo '<pre>';
    print_r($options);
    echo '</pre>';
    if(isset($options['field-suppress-preview'])) {
        $add_classes[] = 'gutentolerance-suppress-preview--'.$options['field-suppress-preview'];
    } else {
        $add_classes[] = 'gutentolerance-suppress-preview--yes';
    }
    return $classes . ' ' . implode(' ', $add_classes) . ' ';
}

add_filter('admin_body_class', 'gutentolerance_admin_body_class');
