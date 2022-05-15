<?php
namespace models;
class Blog extends Model{
    protected $table = "blog";
    protected $colToUpdate = "object = :object, contain_1 = :contain_1, image = :image, contain_2 =:contain_2";
    protected $valToInsert = " :object,  :contain_1,  :image,  :contain_2";
    protected $columns = "object, contain_1, image, contain_2";
}