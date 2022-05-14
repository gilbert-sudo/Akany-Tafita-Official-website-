<?php
namespace models;
class Responsible extends Model{
    protected $table = 'responsable';
    protected $colToUpdate= "name_resp = :name_resp, firstname_resp = :firstname_resp, function= :function, image = :image";
    protected $valToInsert = " :name_resp,  :firstname_resp,  :function,  :image";
    protected $columns = "name_resp, firstname_resp, function, image";

}