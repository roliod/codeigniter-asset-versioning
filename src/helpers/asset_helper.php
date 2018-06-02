<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Codeigniter asset versioning installer
*
* @author     Roland Oduberu <https://github.com/roliod>
* @license    MIT License
* @copyright  2018 Roland Oduberu
* @link       https://github.com/roliod/codeigniter-asset-versioning/releases
*/

if (! function_exists('version_url')) {

    function version_url($path = '')
    {
        $CI =& get_instance();
        $CI->load->library('asset');

        return $CI->asset->version_url($path);
    }

}
