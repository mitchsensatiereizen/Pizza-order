<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      protected $fillable=['categorie','subcategorie','productnaam','productomschrijving','prijs','spicy','vegetarisch'];
}
