<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class asset extends CI_Model
{
     public function __construct()
     {

     }

     public function version_url($path = '')
     {
        $base_url = $this->config->item('base_url');
        $version = $this->config->item('asset_version');

        return $base_url . '/' . $path . '?v=' . $version;
     }
}
