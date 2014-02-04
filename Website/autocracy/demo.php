<?php

/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */
/* * ******************* META BOX DEFINITIONS ********************** */

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'YOUR_PREFIX_';

global $meta_boxes;

$meta_boxes = array();

// Page CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'personal',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Decoration Photo',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('page'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        // IMAGE UPLOAD
        array(
            'name' => 'Page Slider Images',
            'desc' => '',
            'id' => "sldpphoto",
            'type' => 'plupload_image',
            'max_file_uploads' => 4,
            ),
        array(
            'name' => 'Decoration Photo',
            'desc' => '',
            'id' => "pdphoto",
            'type' => 'plupload_image',
            'max_file_uploads' => 1,
            ),
        array(
            'name' => 'Blog Slider Photos',
            'desc' => '',
            'id' => "blogphotos",
            'type' => 'plupload_image',
            'max_file_uploads' => 8,
            ),
        ),
    );

// Blog CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'blog',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Blog Image',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('post'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        // IMAGE UPLOAD
        array(
            'name' => 'Grid Images',
            'desc' => '',
            'id' => "gridimgs",
            'type' => 'plupload_image',
            'max_file_uploads' => 20,
            ),
        array(
            'name' => 'Simulate Tweet',
            'desc' => 'add some tweet text',
            'id' => 'enabletweet',
            'type' => 'text',
            ),
        array(
            'name' => 'Image Link',
            'desc' => 'link the images',
            'id' => 'imglinkplace',
            'type' => 'text',
            ),
        ),
    );
// Testimonial CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'testimonialdata',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Testimonial Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('testimonials'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        // IMAGE UPLOAD
        array(
            'name' => 'Testimonial Image',
            'desc' => '',
            'id' => "testimonialimage",
            'type' => 'plupload_image',
            'max_file_uploads' => 1,
            ),
        array(
            'name' => 'Full name',
            'id' => 'fname',
            'type' => 'text',
            ),
        array(
            'name' => 'Location',
            'id' => 'loc',
            'type' => 'text',
            ),
        ),
    );
// Products CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'productscck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Product Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('products'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        // IMAGE UPLOAD
        array(
            'name' => 'Product Image',
            'desc' => '',
            'id' => "productimage",
            'type' => 'plupload_image',
            'max_file_uploads' => 1,
            ),
        array(
            'name' => 'Supplement Facts Image',
            'desc' => '',
            'id' => "supplementfacts",
            'type' => 'plupload_image',
            'max_file_uploads' => 1,
            ),
        array(
            'name' => 'Subheader',
            'id' => 'subheader',
            'type' => 'text',
            ),
        array(
            'name' => 'Classification',
            'id' => 'class',
            'type' => 'text',
            ),
        array(
            'name' => 'Blurb',
            'id' => 'Blurb',
            'type' => 'text',
            ),
        array(
            'name' => 'Front Page Description',
            'desc' => "The Description on the Product Summary",
            'id' => "fp",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '40',
            'rows' => '8',
            ),
        array(
            'name' => 'Price',
            'id' => 'Price',
            'type' => 'text',
            ),
        array(
            'name' => 'PWC Button Code',
            'id' => 'buttoncode',
            'type' => 'text',
            ),
        array(
            'name' => 'Bean 1 Title',
            'id' => 'bean1title',
            'type' => 'text',
            ),
        array(
            'name' => 'Bean 1 Subtext',
            'id' => 'bean1subtext',
            'type' => 'text',
            ),
        array(
         'name' => 'Bean 1 Content',
         'desc' => "The content of for bean1 area",
         'id' => "beancontent1",
         'type' => 'wysiwyg',
         'std' => "",
         'cols' => '40',
         'rows' => '8',
         ),
        array(
            'name' => 'Bean 2 Title',
            'id' => 'bean2title',
            'type' => 'text',
            ),
        array(
            'name' => 'Bean 2 Subtext',
            'id' => 'bean2subtext',
            'type' => 'text',
            ),
        array(
         'name' => 'Bean 2 Content',
         'desc' => "The content of for bean2 area",
         'id' => "beancontent2",
         'type' => 'wysiwyg',
         'std' => "",
         'cols' => '40',
         'rows' => '8',
         ),
        array(
            'name' => 'Bean 3 Title',
            'id' => 'bean3title',
            'type' => 'text',
            ),
        array(
            'name' => 'Bean 3 Subtext',
            'id' => 'bean3subtext',
            'type' => 'text',
            ),
        array(
         'name' => 'Bean 3 Content',
         'desc' => "The content of for bean3 area",
         'id' => "beancontent3",
         'type' => 'wysiwyg',
         'std' => "",
         'cols' => '40',
         'rows' => '8',
         ),
        array(
            'name' => 'Bean 4 Title',
            'id' => 'bean4title',
            'type' => 'text',
            ),
        array(
            'name' => 'Bean 4 Subtext',
            'id' => 'bean4subtext',
            'type' => 'text',
            ),
        array(
         'name' => 'Bean 4 Content',
         'desc' => "The content of for bean4 area",
         'id' => "beancontent4",
         'type' => 'wysiwyg',
         'std' => "",
         'cols' => '40',
         'rows' => '8',
         ),
        
        ),
);


/* * ******************* META BOX REGISTERING ********************** */

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes() {
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as $meta_box) {
            new RW_Meta_Box($meta_box);
        }
    }
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action('admin_init', 'YOUR_PREFIX_register_meta_boxes');