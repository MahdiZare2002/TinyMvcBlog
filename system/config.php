<?php


$base_url = "http://localhost/mvcblog/";
$base_dir = "/mvcblog/";

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir,'',$tmp[0]);
unset($tmp);
