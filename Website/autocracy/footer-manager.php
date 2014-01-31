<?php

/**
 * Create the options page
 */
function footer_options_do_page() {
    global $select_options, $radio_options;

    if (!isset($_REQUEST['settings-updated']))
        $_REQUEST['settings-updated'] = false;
    ?>

    <div class="wrap">
        <?php screen_icon();
        echo "<h2>" . get_current_theme() . __(' Footer Manager', 'sampletheme') . "</h2>";
        ?>

        <?php if (false !== $_REQUEST['settings-updated']) : ?>
            <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
    <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields('footer_options'); ?>
    <?php $options = get_option('footer_theme_options'); ?>

            <table class="form-table">
                <th><h3>Footer Manager</h3></th>
                <tr valign="top">
                    <th scope="row"><?php _e('Footer Menu Item 1', 'sampletheme'); ?></th>
                    <td>
                        Name:<input id="footer_theme_options[footeritem1]" class="regular-text" type="text" name="footer_theme_options[footeritem1]" value="<?php esc_attr_e($options['footeritem1']); ?>" />
                        Link:<input id="footer_theme_options[footeritemlnk1]" class="regular-text" type="text" name="footer_theme_options[footeritemlnk1]" value="<?php esc_attr_e($options['footeritemlnk1']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php _e('Footer Menu Item 2', 'sampletheme'); ?></th>
                    <td>
                        Name:<input id="footer_theme_options[footeritem2]" class="regular-text" type="text" name="footer_theme_options[footeritem2]" value="<?php esc_attr_e($options['footeritem2']); ?>" />
                        Link:<input id="footer_theme_options[footeritemlnk2]" class="regular-text" type="text" name="footer_theme_options[footeritemlnk2]" value="<?php esc_attr_e($options['footeritemlnk2']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php _e('Footer Menu Item 3', 'sampletheme'); ?></th>
                    <td>
                        Name:<input id="footer_theme_options[footeritem3]" class="regular-text" type="text" name="footer_theme_options[footeritem3]" value="<?php esc_attr_e($options['footeritem3']); ?>" />
                        Link:<input id="footer_theme_options[footeritemlnk3]" class="regular-text" type="text" name="footer_theme_options[footeritemlnk3]" value="<?php esc_attr_e($options['footeritemlnk3']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php _e('Footer Menu Item 4', 'sampletheme'); ?></th>
                    <td>
                        Name:<input id="footer_theme_options[footeritem4]" class="regular-text" type="text" name="footer_theme_options[footeritem4]" value="<?php esc_attr_e($options['footeritem4']); ?>" />
                        Link:<input id="footer_theme_options[footeritemlnk4]" class="regular-text" type="text" name="footer_theme_options[footeritemlnk4]" value="<?php esc_attr_e($options['footeritemlnk4']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php _e('Footer Menu Item 5', 'sampletheme'); ?></th>
                    <td>
                        Name:<input id="footer_theme_options[footeritem5]" class="regular-text" type="text" name="footer_theme_options[footeritem5]" value="<?php esc_attr_e($options['footeritem5']); ?>" />
                        Link:<input id="footer_theme_options[footeritemlnk5]" class="regular-text" type="text" name="footer_theme_options[footeritemlnk5]" value="<?php esc_attr_e($options['footeritemlnk5']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php _e('Footer Menu Item 6', 'sampletheme'); ?></th>
                    <td>
                        Name:<input id="footer_theme_options[footeritem6]" class="regular-text" type="text" name="footer_theme_options[footeritem6]" value="<?php esc_attr_e($options['footeritem6']); ?>" />
                        Link:<input id="footer_theme_options[footeritemlnk6]" class="regular-text" type="text" name="footer_theme_options[footeritemlnk6]" value="<?php esc_attr_e($options['footeritemlnk6']); ?>" />
                    </td>
                </tr>
<tr valign="top">
                    <th scope="row"><?php _e('Footer Menu Item 7', 'sampletheme'); ?></th>
                    <td>
                        Name:<input id="footer_theme_options[footeritem7]" class="regular-text" type="text" name="footer_theme_options[footeritem7]" value="<?php esc_attr_e($options['footeritem7']); ?>" />
                        Link:<input id="footer_theme_options[footeritemlnk7]" class="regular-text" type="text" name="footer_theme_options[footeritemlnk7]" value="<?php esc_attr_e($options['footeritemlnk7']); ?>" />
                    </td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
            </p>
        </form>

    </div>
    <?php
}

function footer_options_validate($input) {
    global $select_options, $radio_options;
    // Our checkbox value is either 0 or 1
    if (!isset($input['option1']))
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    // Say our text option must be safe text with no HTML tags
    $input['sometext'] = wp_filter_nohtml_kses($input['sometext']);
    // Our select option must actually be in our array of select options
    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses($input['sometextarea']);
    return $input;
}
?>