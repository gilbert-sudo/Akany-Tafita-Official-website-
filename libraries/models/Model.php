<?php
namespace models;
require_once('../autoload.php');
class Model
{
   protected $pdo ;
   public function __construct(){
      $this->pdo =  \Database::getPdo();       
   }
}
?>