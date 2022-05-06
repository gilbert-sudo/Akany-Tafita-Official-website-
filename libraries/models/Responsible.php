<?php
namespace models;
class Responsible extends Model{
    protected $table = 'responsable';
    protected $colToUpdate= "name_resp = :name_resp, firstname_resp = :firstname_resp, fonction= :fonction, image = :image";
    protected $valToInsert = " :name_resp,  :firstname_resp,  :fonction,  :image";
    protected $columns = "name_resp, firstname_resp, fonction, image";

}