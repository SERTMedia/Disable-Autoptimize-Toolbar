<?php 
/*
Plugin Name: Disable Autoptimize Toolbar
Plugin URI: https://www.sertmedia.com
Description: Disables the autoptimize toolbar from the wordpress admin bar.
Version: 1.0
Author: SERTMedia
Author URI: https://www.sertmedia.com
*/

add_filter('autoptimize_filter_toolbar_show','__return_false');