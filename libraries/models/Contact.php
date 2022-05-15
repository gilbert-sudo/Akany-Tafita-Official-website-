<?php
namespace models;
class Contact extends Model{
    protected $table = "contacts";
    protected $colToUpdate = "address = :address, phone_num = :phone_num, email = :email, fb_page = :fb_page";
    protected $columns = "address, phone_num, email, fb_page";
}