<?php
include_once "config.php";

function site_url($path){
    global $config;
    return $config['siteurl'].'/'.$path;
}
