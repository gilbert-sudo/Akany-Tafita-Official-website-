<?php

namespace Controllers;

class Home extends Controller
{
    public function index()
    {
        \Renderer::render('home/index');
    }
}