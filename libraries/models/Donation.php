<?php

namespace models;
class Donation extends Model
{
  protected $table = 'demande_dons';
  protected $colToUpdate= "but = :but, fond = :fond, description = :description, image = :images, NOW()";
  protected $valToInsert = " :but,  :fond,  :description,  :images,  NOW()";
  protected $columns = "title_event, date_event, time_event, description_event, images";

}
