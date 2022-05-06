<?php
namespace models;
class Admin extends Model {
    protected $table = 'compte_admin';
    protected $colToUpdate= "username_admin = :username_admin, password_admin = :password_admin, image_admin =: image_admin";
    protected $columns = "username_admin, password_admin, image_admin";
    
}