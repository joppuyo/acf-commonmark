<?php

/*
Plugin Name: Advanced Custom Fields: CommonMark
Plugin URI: https://github.com/joppuyo/acf-commonmark
Description: Markdown (CommonMark) field for Advanced Custom Fields
Version: 1.0.11
Author: Johannes Siipola
Author URI: https://siipo.la
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// check if class already exists
if (!class_exists('npx_acf_plugin_commonmark')) {

    class npx_acf_plugin_commonmark
    {

        // vars
        var $settings;

        /*
        *  __construct
        *
        *  This function will setup the class functionality
        *
        *  @type	function
        *  @date	17/02/2016
        *  @since	1.0.0
        *
        *  @param	void
        *  @return	void
        */

        function __construct()
        {
            // settings
            // - these will be passed into the field class.
            $this->settings = [
              'version' => '1.0.0',
              'url' => plugin_dir_url(__FILE__),
              'path' => plugin_dir_path(__FILE__)
            ];

            // include field
            add_action('acf/include_field_types', array($this, 'include_field')); // v5
        }

        /*
        *  include_field
        *
        *  This function will include the field type class
        *
        *  @type	function
        *  @date	17/02/2016
        *  @since	1.0.0
        *
        *  @param	$version (int) major ACF version. Defaults to 4
        *  @return	void
        */

        function include_field($version = 4)
        {
            // load acf-commonmark
            load_plugin_textdomain('acf-commonmark', false, plugin_basename(dirname(__FILE__)) . '/lang');

            // include
            include_once('fields/class-npx-acf-field-commonmark-v5.php');
        }

    }

    // initialize
    new npx_acf_plugin_commonmark();
};

