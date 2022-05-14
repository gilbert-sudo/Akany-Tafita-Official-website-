<?php

namespace models;
class Donation extends Model
{
  protected $table = 'demande_dons';
  protected $colToUpdate= "sujet = :sujet, montant = :montant, motif = :motif, image= :image, NOW()";
  protected $valToInsert = " :sujet,  :montant,  :motif,  :image,  NOW()";
  protected $columns = "sujet, montant, motif, image, cree_a";

}
