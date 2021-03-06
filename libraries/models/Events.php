<?php
 namespace models;
 class Events extends Model{
    protected $table = ' ad_event';
    public function insert(array $variable = []):void
    {
     extract($variable);
     $insert = $this->pdo->prepare("INSERT INTO ad_event(title_event, date_event, time_event, description_event, image) VALUES (:title_event, :date_event, :time_event, :description_event, :image)");
     $insert->execute([
       ':title_event' => $title_event,
       ':date_event' => $date_event,
       ':time_event' => $time_event,
       ':description_event' => $description_event,
       ':image' => $img_name
     ]);
    }
    public function update(array $variable = []): void{
      extract($variable);
      $update = $this->pdo->prepare("UPDATE {$this->table} SET title_event = :title_event, date_event = :date_event, time_event = :time_event, description_event = :description_event, image = :image WHERE id = :id");
      $update->execute([
        ':title_event' => $title_event,
        ':date_event' => $date_event,
        ':time_event' => $time_event,
        ':description_event' => $description_event,
        ':image' => $img_name,
        ':id' => $id
      ]);
  
    }
 }
?>