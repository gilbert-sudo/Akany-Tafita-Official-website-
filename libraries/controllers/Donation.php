<?php

namespace Controllers;

require_once('libraries/autoload.php');
class Donation extends Controller
{
  public function index()
  { 
    \Renderer::render('donation/index');
  }


}
