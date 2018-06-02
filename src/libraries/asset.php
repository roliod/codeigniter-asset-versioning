<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class asset extends CI_Model
{

     public function version_url($path = '')
     {
        $base_url = $this->config->item('base_url');
        $version = filemtime(FCPATH . $path);

        return $base_url . '/' . $path . '?v=' . $version;
     }
     
}
