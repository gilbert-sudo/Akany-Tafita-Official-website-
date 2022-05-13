<?php
namespace Controllers;
require("libraries/autoload.php");
class Admin extends Controller{
    protected $pageTitle = 'Paramètres';
    protected $view2 = 'settings/general';
    protected $modelName = \models\Admin::class;
  
}
?>