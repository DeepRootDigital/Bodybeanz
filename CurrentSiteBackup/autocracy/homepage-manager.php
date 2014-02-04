<?php

/**
 * Create the options page
 */
function theme_options_do_page() {
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Homepage Manager', 'sampletheme') . "</h2>";
        ?>

        <?php if (false !== $_REQUEST['settings-updated']) : ?>
            <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields('sample_options'); ?>
            <?php $options = get_option('sample_theme_options'); ?>

            <table class="form-table">                                                                                       
                <th><h3>Panel Links</h3></th>
                <tr valign="top"><th scope="row"><?php _e('Buy Now Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[buynowlink]" class="regular-text" type="text" name="sample_theme_options[buynowlink]" value="<?php esc_attr_e($options['buynowlink']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 2 Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel2link]" class="regular-text" type="text" name="sample_theme_options[panel2link]" value="<?php esc_attr_e($options['panel2link']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 3 Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel3link]" class="regular-text" type="text" name="sample_theme_options[panel3link]" value="<?php esc_attr_e($options['panel3link']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 4 Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel4link]" class="regular-text" type="text" name="sample_theme_options[panel4link]" value="<?php esc_attr_e($options['panel4link']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 5 Link', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel5link]" class="regular-text" type="text" name="sample_theme_options[panel5link]" value="<?php esc_attr_e($options['panel5link']); ?>" />
                    </td>
                </tr>
                <th><h3>Panel 1</h3></th>
                <tr valign="top"><th scope="row"><?php _e('Panel 1 Headline Image', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel1img]" class="regular-text" type="text" name="sample_theme_options[panel1img]" value="<?php esc_attr_e($options['panel1img']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Blurb Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[blurbcontent1]" class="large-text" cols="50" rows="10" name="sample_theme_options[blurbcontent1]"><?php echo esc_textarea($options['blurbcontent1']); ?></textarea>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 1 Product Image', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel1productimg]" class="regular-text" type="text" name="sample_theme_options[panel1productimg]" value="<?php esc_attr_e($options['panel1productimg']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>
                <th><h3>Panel 2</h3></th>
                <tr valign="top"><th scope="row"><?php _e('Panel 2 Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[panel2content]" class="large-text" cols="50" rows="10" name="sample_theme_options[panel2content]"><?php echo esc_textarea($options['panel2content']); ?></textarea>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 2 Video Embed Code', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel2video]" class="regular-text" type="text" name="sample_theme_options[panel2video]" value="<?php esc_attr_e($options['panel2video']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 2 Product Image', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel2productimg]" class="regular-text" type="text" name="sample_theme_options[panel2productimg]" value="<?php esc_attr_e($options['panel2productimg']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>
                <th><h3>Panel 3</h3></th>
            
                <tr valign="top"><th scope="row"><?php _e('Panel 3 Wheel Link - Top Left', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[topleftlink]" class="regular-text" type="text" name="sample_theme_options[topleftlink]" value="<?php esc_attr_e($options['topleftlink']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 3 Wheel Link - Top Right', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[toprightlink]" class="regular-text" type="text" name="sample_theme_options[toprightlink]" value="<?php esc_attr_e($options['toprightlink']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 3 Wheel Link - Bottom Left', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[botleftlink]" class="regular-text" type="text" name="sample_theme_options[botleftlink]" value="<?php esc_attr_e($options['botleftlink']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 3 Wheel Link - Bottom Right', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[botrightlink]" class="regular-text" type="text" name="sample_theme_options[botrightlink]" value="<?php esc_attr_e($options['botrightlink']); ?>" />
                    </td>
                </tr>
				<tr valign="top"><th scope="row"><?php _e('Wheel Content - Initial Title', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[inittitle]" class="regular-text" type="text" name="sample_theme_options[inittitle]" value="<?php esc_attr_e($options['inittitle']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Initial Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[initcontent]" class="large-text" cols="50" rows="10" name="sample_theme_options[initcontent]"><?php echo esc_textarea($options['initcontent']); ?></textarea>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Initial Image', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[initimg]" class="regular-text" type="text" name="sample_theme_options[initimg]" value="<?php esc_attr_e($options['initimg']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Left Top Title', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[lttitle]" class="regular-text" type="text" name="sample_theme_options[lttitle]" value="<?php esc_attr_e($options['lttitle']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Left Top Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[ltcontent]" class="large-text" cols="50" rows="10" name="sample_theme_options[ltcontent]"><?php echo esc_textarea($options['ltcontent']); ?></textarea>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Left Top Image', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[ltimg]" class="regular-text" type="text" name="sample_theme_options[ltimg]" value="<?php esc_attr_e($options['ltimg']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>		
				<tr valign="top"><th scope="row"><?php _e('Wheel Content - Right Top Title', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[rttitle]" class="regular-text" type="text" name="sample_theme_options[rttitle]" value="<?php esc_attr_e($options['rttitle']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Right Top Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[rtcontent]" class="large-text" cols="50" rows="10" name="sample_theme_options[rtcontent]"><?php echo esc_textarea($options['rtcontent']); ?></textarea>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Right Top Image', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[rtimg]" class="regular-text" type="text" name="sample_theme_options[rtimg]" value="<?php esc_attr_e($options['rtimg']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>
				
				
				<tr valign="top"><th scope="row"><?php _e('Wheel Content - Left Bottom Title', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[lbtitle]" class="regular-text" type="text" name="sample_theme_options[lbtitle]" value="<?php esc_attr_e($options['lbtitle']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Left Bottom Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[lbcontent]" class="large-text" cols="50" rows="10" name="sample_theme_options[lbcontent]"><?php echo esc_textarea($options['lbcontent']); ?></textarea>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Left Bottom Image', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[lbimg]" class="regular-text" type="text" name="sample_theme_options[lbimg]" value="<?php esc_attr_e($options['lbimg']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>
				
				<tr valign="top"><th scope="row"><?php _e('Wheel Content - Right Bottom Title', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[rbtitle]" class="regular-text" type="text" name="sample_theme_options[rbtitle]" value="<?php esc_attr_e($options['rbtitle']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Right Bottom Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[rbcontent]" class="large-text" cols="50" rows="10" name="sample_theme_options[rbcontent]"><?php echo esc_textarea($options['rbcontent']); ?></textarea>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Wheel Content - Right Bottom Image', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[rbimg]" class="regular-text" type="text" name="sample_theme_options[rbimg]" value="<?php esc_attr_e($options['rbimg']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 3 Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[panel3content]" class="large-text" cols="50" rows="10" name="sample_theme_options[panel3content]"><?php echo esc_textarea($options['panel3content']); ?></textarea>
                    </td>
                </tr>
                <th><h3>Panel 4</h3></th>
                <tr valign="top"><th scope="row"><?php _e('Panel 4 Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[panel4content]" class="large-text" cols="50" rows="10" name="sample_theme_options[panel4content]"><?php echo esc_textarea($options['panel4content']); ?></textarea>
                    </td>
                </tr>
                <th><h3>Panel 5</h3></th>
                <tr valign="top"><th scope="row"><?php _e('Panel 5 Content', 'sampletheme'); ?></th>
                    <td>
                        <textarea id="sample_theme_options[panel5content]" class="large-text" cols="50" rows="10" name="sample_theme_options[panel5content]"><?php echo esc_textarea($options['panel5content']); ?></textarea>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 5 Compare Image 1', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel5compareimg1]" class="regular-text" type="text" name="sample_theme_options[panel5compareimg1]" value="<?php esc_attr_e($options['panel5compareimg1']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Panel 5 Compare Image 2', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[panel5compareimg2]" class="regular-text" type="text" name="sample_theme_options[panel5compareimg2]" value="<?php esc_attr_e($options['panel5compareimg2']); ?>" /><a href="media-new.php">Upload</a>
                    </td>
                </tr>
<th>Homepage Table</th>
<tr valign="top"><th scope="row"><?php _e('Table Headlines', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[thead1]" class="regular-text" type="text" name="sample_theme_options[thead1]" value="<?php esc_attr_e($options['thead1']); ?>" />
						<input id="sample_theme_options[thead2]" class="regular-text" type="text" name="sample_theme_options[thead2]" value="<?php esc_attr_e($options['thead2']); ?>" />
						<input id="sample_theme_options[thead3]" class="regular-text" type="text" name="sample_theme_options[thead3]" value="<?php esc_attr_e($options['thead3']); ?>" />
                    </td>
                </tr>
<tr valign="top"><th scope="row"><?php _e('Cell Title 1', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[ct1]" class="regular-text" type="text" name="sample_theme_options[ct1]" value="<?php esc_attr_e($options['ct1']); ?>" />
						<input id="sample_theme_options[tc1]" class="regular-text" type="text" name="sample_theme_options[tc1]" value="<?php esc_attr_e($options['tc1']); ?>" />
						<input id="sample_theme_options[tc2]" class="regular-text" type="text" name="sample_theme_options[tc2]" value="<?php esc_attr_e($options['tc2']); ?>" />
						<input id="sample_theme_options[tc3]" class="regular-text" type="text" name="sample_theme_options[tc3]" value="<?php esc_attr_e($options['tc3']); ?>" />
                    </td>
                </tr>			
<tr valign="top"><th scope="row"><?php _e('Cell Title 2', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[ct2]" class="regular-text" type="text" name="sample_theme_options[ct2]" value="<?php esc_attr_e($options['ct2']); ?>" />
						<input id="sample_theme_options[tc01]" class="regular-text" type="text" name="sample_theme_options[tc01]" value="<?php esc_attr_e($options['tc01']); ?>" />
						<input id="sample_theme_options[tc02]" class="regular-text" type="text" name="sample_theme_options[tc02]" value="<?php esc_attr_e($options['tc02']); ?>" />
						<input id="sample_theme_options[tc03]" class="regular-text" type="text" name="sample_theme_options[tc03]" value="<?php esc_attr_e($options['tc03']); ?>" />
                    </td>
                </tr>
<tr valign="top"><th scope="row"><?php _e('Cell Title 3', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[ct3]" class="regular-text" type="text" name="sample_theme_options[ct3]" value="<?php esc_attr_e($options['ct3']); ?>" />
						<input id="sample_theme_options[tcc01]" class="regular-text" type="text" name="sample_theme_options[tcc01]" value="<?php esc_attr_e($options['tcc01']); ?>" />
						<input id="sample_theme_options[tcc02]" class="regular-text" type="text" name="sample_theme_options[tcc02]" value="<?php esc_attr_e($options['tcc02']); ?>" />
						<input id="sample_theme_options[tcc03]" class="regular-text" type="text" name="sample_theme_options[tcc03]" value="<?php esc_attr_e($options['tcc03']); ?>" />
                    </td>
                </tr>	
<tr valign="top"><th scope="row"><?php _e('Cell Title 4', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[ct4]" class="regular-text" type="text" name="sample_theme_options[ct4]" value="<?php esc_attr_e($options['ct4']); ?>" />
						<input id="sample_theme_options[tccc01]" class="regular-text" type="text" name="sample_theme_options[tccc01]" value="<?php esc_attr_e($options['tccc01']); ?>" />
						<input id="sample_theme_options[tccc02]" class="regular-text" type="text" name="sample_theme_options[tccc02]" value="<?php esc_attr_e($options['tccc02']); ?>" />
						<input id="sample_theme_options[tccc03]" class="regular-text" type="text" name="sample_theme_options[tccc03]" value="<?php esc_attr_e($options['tccc03']); ?>" />
                    </td>
                </tr>	
<tr valign="top"><th scope="row"><?php _e('Cell Title 5', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[ct5]" class="regular-text" type="text" name="sample_theme_options[ct5]" value="<?php esc_attr_e($options['ct5']); ?>" />
						<input id="sample_theme_options[tcccc01]" class="regular-text" type="text" name="sample_theme_options[tcccc01]" value="<?php esc_attr_e($options['tcccc01']); ?>" />
						<input id="sample_theme_options[tcccc02]" class="regular-text" type="text" name="sample_theme_options[tcccc02]" value="<?php esc_attr_e($options['tcccc02']); ?>" />
						<input id="sample_theme_options[tcccc03]" class="regular-text" type="text" name="sample_theme_options[tcccc03]" value="<?php esc_attr_e($options['tcccc03']); ?>" />
                    </td>
                </tr>
<tr valign="top"><th scope="row"><?php _e('Cell Title 6', 'sampletheme'); ?></th>
                    <td>
                        <input id="sample_theme_options[ct6]" class="regular-text" type="text" name="sample_theme_options[ct6]" value="<?php esc_attr_e($options['ct6']); ?>" />
						<input id="sample_theme_options[tccccc01]" class="regular-text" type="text" name="sample_theme_options[tccccc01]" value="<?php esc_attr_e($options['tccccc01']); ?>" />
						<input id="sample_theme_options[tccccc02]" class="regular-text" type="text" name="sample_theme_options[tccccc02]" value="<?php esc_attr_e($options['tccccc02']); ?>" />
						<input id="sample_theme_options[tccccc03]" class="regular-text" type="text" name="sample_theme_options[tccccc03]" value="<?php esc_attr_e($options['tccccc03']); ?>" />
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

function theme_options_validate($input) {
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