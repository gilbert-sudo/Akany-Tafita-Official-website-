<?php
namespace models;
class Mailbox extends Model{
   protected $table = "mailbox";
   protected $colToUpdate = "name_sender = : name_sender, email_sender = : email_sender, subject =: subject, message =: message, time = :time";
   protected $valToInsert = ":name_sender, :email_sender, :subject, :time";
   protected $columns = "name_sender, email_sender, subject, message, time  ";
}