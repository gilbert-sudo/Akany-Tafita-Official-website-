<?php
namespace Controllers;

class Donation extends Controller
{
    public function index()
    {
        \Renderer::render('donation/index');
    }
}