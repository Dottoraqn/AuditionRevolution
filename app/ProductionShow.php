<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionShow extends Model
{
  protected $table = "production_company_show";

  protected $fillable = [
    'name',
    'description',
    'payment_type',
    'website',
    'union',
    'start_date',
    'end_date'
  ];
}
