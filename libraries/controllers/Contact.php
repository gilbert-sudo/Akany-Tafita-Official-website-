<?php
namespace Controllers;
require("libraries/autoload.php");
class Contact extends Controller{
    protected $pageTitle = 'Paramètres';
    protected $view2="settings/updatecontact";
    protected $modelName = \models\Contact::class;
}
?>