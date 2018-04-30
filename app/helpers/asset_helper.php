<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('version_url')) {

    function version_url($path = '')
    {
        $CI =& get_instance();
        $CI->load->library('asset');

        return $CI->asset->version_url($path);
    }

}
