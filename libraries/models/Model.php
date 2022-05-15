<?php

namespace models;

class Model
{
  protected $pdo;
  protected $table;
  protected $colToUpdate;
  protected $valToInsert;
  protected $columns;
  public function __construct()
  {
    $this->pdo =  \Database::getPdo();
  }

  public function findAll()
  {
    $selectAll = $this->pdo->query("SELECT * FROM {$this->table}");
    return $selectAll->fetchAll();
  }
  public function findOne(int $id)
  {
    $selectOne = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
    $selectOne->execute(compact('id'));
    return $selectOne->fetch();
  }
  public function deleteOne(int $id): void
  {

    $delete = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
    $delete->execute([$id]);
  }
  public function updateOne( array $td = [])
  {
    $update = $this->pdo->prepare("UPDATE {$this->table} SET $this->colToUpdate WHERE id = :id ");
    $update->execute($td);
  }
  public function insertOne(array $td = [])
  {
    
    $insert = $this->pdo->prepare("INSERT INTO {$this->table}($this->columns)VALUES ($this->valToInsert)");
    $insert->execute($td);
  }
  public function search(array $td = []){
    extract($td);
    $search = $this->pdo->query("SELECT * FROM {$this->table} WHERE $col LIKE '%$keywords%'");
    $results = $search->fetch();
    return $results;
  }

}
