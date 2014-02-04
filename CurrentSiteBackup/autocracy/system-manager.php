<?php

/**
 * Create the options page
 */
function system_options_do_page() {
    global $select_options, $radio_options;

    if (!isset($_REQUEST['settings-updated']))
        $_REQUEST['settings-updated'] = false;
    ?>

    <div class="wrap">
        <?php screen_icon();
        echo "<h2>" . get_current_theme() . __(' System Manager', 'sampletheme') . "</h2>"; ?>

        <?php if (false !== $_REQUEST['settings-updated']) : ?>
            <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
            <?php endif; ?>

        <form method="post" action="options.php">
    <?php settings_fields('system_options'); ?>
    <?php $options = get_option('system_theme_options'); ?>

            <table class="form-table">
                <th><h3>System Manager</h3></th>
            <tr><h3>E-Commerce Options</h3></tr>
                <tr valign="top"><th scope="row"><?php _e('Store Page Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="system_theme_options[storepage]" class="regular-text" type="text" name="system_theme_options[storepage]" value="<?php esc_attr_e($options['storepage']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Checkout Page Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="system_theme_options[checkoutpage]" class="regular-text" type="text" name="system_theme_options[checkoutpage]" value="<?php esc_attr_e($options['checkoutpage']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('My Account Page Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="system_theme_options[myaccountpage]" class="regular-text" type="text" name="system_theme_options[myaccountpage]" value="<?php esc_attr_e($options['myaccountpage']); ?>" />
                    </td>
                </tr>
<tr valign="top"><th scope="row"><?php _e('Facebook Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="system_theme_options[facebookurl]" class="regular-text" type="text" name="system_theme_options[facebookurl]" value="<?php esc_attr_e($options['facebookurl']); ?>" />
                    </td>
                </tr>
<tr valign="top"><th scope="row"><?php _e('Twitter Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="system_theme_options[twitterurl]" class="regular-text" type="text" name="system_theme_options[twitterurl]" value="<?php esc_attr_e($options['twitterurl']); ?>" />
                    </td>
                </tr>
<tr valign="top"><th scope="row"><?php _e('Pinterest Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="system_theme_options[pinterestlink]" class="regular-text" type="text" name="system_theme_options[pinterestlink]" value="<?php esc_attr_e($options['pinterestlink']); ?>" />
                    </td>
                </tr>
<tr valign="top"><th scope="row"><?php _e('Google + Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="system_theme_options[gpluslink]" class="regular-text" type="text" name="system_theme_options[gpluslink]" value="<?php esc_attr_e($options['gpluslink']); ?>" />
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

function system_options_validate($input) {
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