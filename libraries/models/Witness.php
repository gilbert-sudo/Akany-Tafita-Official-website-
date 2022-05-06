<?php
namespace models;
class Witness extends Model{
    protected $table = 'temoignage';
    protected $colToUpdate= "name_witness= :name_witness, firstname_resp = :firstname_resp, fonction= :fonction, image = :image";
    protected $valToInsert = " :name_resp,  :firstname_resp,  :function,  :image";
    protected $columns = "nom_resp, prenom_resp, fonction, image";
}