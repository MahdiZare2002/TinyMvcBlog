<?php

namespace System\Traits;

trait View
{
    protected function view($dir, $vars = null)
    {
        $dir = str_replace('.', '/', $dir);

        if ($vars) {
            extract($vars);
        }
        $path = realpath(dirname(__FILE__) . '/../../application/view/' . $dir . ".php");
        if(file_exists($path)){
            return require_once($path);
        } else {
            echo 'this view not exist';
        }
    }
}
