<?php 
/* 
Plugin Name: wpgzip Compression
Plugin URI: http://seohref.com/wpgzip/
Version: 1.0
Description: This plugin reduce page weight by using gzip compression method.Gzip is the most popular and effective compression method currently available and generally reduces the response size by about 70%.
Author: Arshid KV
Author URI: http://seohref.com/
*/
 
/* Copyright 2015 Arshid  (email : arshidkv12@gmail.com)
skype:arshidkv12

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version. */

function wpgzip_comppression(){
    if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    {
      ob_start("ob_gzhandler");
    }else{
        ob_start(); 
    }
}

add_action("init","wpgzip_comppression");

?>