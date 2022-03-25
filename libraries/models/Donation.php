<?php
 namespace models;
 require_once('../autoload.php');
 class Donation extends Model
 {    
      public function ask(array $variable = [])
      { 
        extract($variable);
        $insertAsking = $this->pdo->prepare("INSERT INTO demande_dons(id, but, font, description,images) VALUES (null, ?, ?, ?, ?)");  
        $insertAsking -> execute(compact('but','font','description','images'));
 }   
 }

?>