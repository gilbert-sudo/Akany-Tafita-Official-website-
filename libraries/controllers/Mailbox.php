<?php
namespace Controllers;
require("libraries/autoload.php");
class Mailbox extends Controller{
    protected $pageTitle = 'Mail-box';
    protected $view2 = 'email';
    protected $modelName = \models\Mailbox::class;
  
}
?>