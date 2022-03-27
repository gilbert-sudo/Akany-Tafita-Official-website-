<?php

namespace models;

class Donation extends Model
{
  protected $table = 'demande_dons';

  public function insert(array $variable = [])
  {
    extract($variable);
   $insert = $this->pdo->prepare("INSERT INTO demande_dons (but, fond, description, images, created_at) VALUES (:but, :fond, :description, :images, NOW())");
   $insert->execute([
     ':but' => $sujet,
     ':fond' => $montant,
     ':description' => $motif,
     ':images' => $images
   ]);

  }

}
