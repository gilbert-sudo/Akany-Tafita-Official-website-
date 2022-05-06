<?php
namespace models;
class Blog extends Model{
    protected $table = "blog";
    protected $colToUpdate = "object = :object, contained = :contained, image = :image, contained_2 =:contained_2";
    protected $valToInsert = " :object,  :contained,  :image,  :contained_2";
    protected $columns = "object, contained, image, contained_2";
}