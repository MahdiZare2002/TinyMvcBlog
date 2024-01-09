<?php

namespace Application\Controllers;

class Home extends Controller
{
    public function index()
    {
        echo 'hi mf';
        $this->view('app.index');
    }

    public function create()
    {
        echo 'create file';
    }
}
