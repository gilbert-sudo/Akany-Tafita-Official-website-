<?php
 namespace models;
 class Events extends Model{
    protected $table = ' ad_event';
    protected $colToUpdate= "title_event = :title_event, date_event = :date_event, time_event = :time_event, description_event = :description_event, image = :image";
    protected $valToInsert = " :title_event,  :date_event,  :time_event,  :description_event,  :image";
    protected $columns = "title_event, date_event, time_event, description_event, image";
 }
?>