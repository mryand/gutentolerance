<?php

/**
 * @internal never define functions inside callbacks.
 * these functions could be run multiple times; this would result in a fatal error.
 */

/**
 * custom option and settings
 */
function gutentolerance_settings_init() {
    // register a new setting for "gutentolerance" page
    register_setting( 'gutentolerance', 'gutentolerance_options' );

    // register a new section in the "gutentolerance" page
    add_settings_section(
        'gutentolerance_section_developers',
        __( 'GutenTolerance', 'gutentolerance' ),
        'gutentolerance_section_developers_cb',
        'gutentolerance'
    );

    // register a new field in the "gutentolerance_section_developers" section, inside the "gutentolerance" page
    add_settings_field(
        'gutentolerance_field_suppress_preview', // as of WP 4.6 this value is used only internally
        // use $args' label_for to populate the id inside the callback
        __( 'Suppress Preview', 'gutentolerance' ),
        'gutentolerance_field_suppress_preview_cb',
        'gutentolerance',
        'gutentolerance_section_developers',
        [
            'label_for' => 'gutentolerance_field_suppress_preview',
            'class' => 'gutentolerance_row',
            'gutentolerance_custom_data' => 'custom',
        ]
    );
}

/**
 * register our gutentolerance_settings_init to the admin_init action hook
 */
add_action( 'admin_init', 'gutentolerance_settings_init' );

/**
 * custom option and settings:
 * callback functions
 */

// developers section cb

// section callbacks can accept an $args parameter, which is an array.
// $args have the following keys defined: title, id, callback.
// the values are defined at the add_settings_section() function.
function gutentolerance_section_developers_cb( $args ) {
}

// pill field cb

// field callbacks can accept an $args parameter, which is an array.
// $args is defined at the add_settings_field() function.
// wordpress has magic interaction with the following keys: label_for, class.
// the "label_for" key value is used for the "for" attribute of the <label>.
// the "class" key value is used for the "class" attribute of the <tr> containing the field.
// you can add custom key value pairs to be used inside your callbacks.
function gutentolerance_field_suppress_preview_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'gutentolerance_options' );
    // output the field
    ?>
    <select id="<?php echo esc_attr( $args['label_for'] ); ?>"
            data-custom="<?php echo esc_attr( $args['gutentolerance_custom_data'] ); ?>"
            name="gutentolerance_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
            aria-describedby="gutentolerance_field_suppress_preview_description"
    >
        <option value="yes" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'yes', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'Yes', 'gutentolerance' ); ?>
        </option>
        <option value="no" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'no', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'No', 'gutentolerance' ); ?>
        </option>
    </select>
    <p class="description" id="gutentolerance_field_suppress_preview_description">
        <?php esc_html_e( 'The WordPress preview functionality can be confusing to novice users. By default this plugin disables previews, but you can re-enable them if you would prefer.', 'gutentolerance' ); ?>
    </p>
    <?php
}

/**
 * register our gutentolerance_options_page to the admin_menu action hook
 */
add_action( 'admin_menu', 'gutentolerance_options_page' );

/**
 * settings menu
 */
function gutentolerance_options_page() {
    // add top level menu page
    add_options_page(
        __( 'GutenTolerance Options', 'guten-tolerance' ),
        __( 'GutenTolerance', 'guten-tolerance' ),
        'manage_options',
        'gutentolerance',
        'gutentolerance_options_page_html'
    );
}

/**
 * top level menu:
 * callback functions
 */
function gutentolerance_options_page_html() {
    // check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    // add error/update messages

    // check if the user have submitted the settings
    // wordpress will add the "settings-updated" $_GET parameter to the url
    if ( isset( $_GET['settings-updated'] ) ) {
        // add settings saved message with the class of "updated"
        add_settings_error( 'gutentolerance_messages', 'gutentolerance_message', __( 'Settings Saved', 'gutentolerance' ), 'updated' );
    }

    // show error/update messages
    settings_errors( 'gutentolerance_messages' );
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "gutentolerance"
            settings_fields( 'gutentolerance' );
            // output setting sections and their fields
            // (sections are registered for "gutentolerance", each field is registered to a specific section)
            do_settings_sections( 'gutentolerance' );
            // output save settings button
            submit_button( 'Save Settings' );
            ?>
        </form>
    </div>
    <?php
}
