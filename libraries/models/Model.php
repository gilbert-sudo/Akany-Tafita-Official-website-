<?php
namespace models;

class Model
{
   protected $pdo ;
   protected $table;
   public function __construct(){
      $this->pdo =  \Database::getPdo();       
   }

   public function findAll()
   {
     $selectAll = $this->pdo->query("SELECT * FROM $this->table");
     return $selectAll->fetchAll();
   }
   public function findOneById($id)
   {
     $selectOne = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = ?");
     $selectOne->execute(compact('id'));
     return $selectOne->fetch();
   }
}
?>