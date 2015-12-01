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
    'end_date',
    'production_company_id',
    'address',
    'city',
    'state',
    'zipcode'
  ];
  
  /**
   *
   * A Show is owned by a company
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function company()
  {
    return $this->belongsTo('App\ProductionCompany');
  }
  
  public function auditions()
  {
    return $this->hasMany('App\ProductionShowAudition');
  }
  
}
