<?php

namespace Controllers;

class Home extends Controller
{
    protected $pageTitle = 'Accueil';
    protected $view2 = 'home/index';
    protected $modelName = \models\Donation::class;
}