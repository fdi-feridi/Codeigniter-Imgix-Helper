<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    function imgix($url, $params = array()) {
        $url = trim(str_replace(array(base_url()), '', $url), '/');
        if(base_url()=="https://yourwebsite.com/"){
            $url = 'https://yourwebsite.imgix.net/' . $url . '?' . http_build_query($params);
        }
        return $url;
    }
    //example echo imgix('assets/images/logo_light.png',array('w' => 300));