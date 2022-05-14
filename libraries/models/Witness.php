<?php
namespace models;
class Witness extends Model{
    protected $table = 'temoignage';
    protected $colToUpdate= "name_witness= :name_witness, title = :title, function= :function,link_video =: link_video,NOW(), image = :image";
    protected $valToInsert = " :name_witness,  :title,  :function, :link_video, NOW(),  :image";
    protected $columns = "nom_resp, prenom_resp, function,date_publication,  image";
}