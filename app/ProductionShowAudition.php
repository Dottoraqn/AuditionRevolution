<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionShowAudition extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'production_company_show_audition';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 
    'description',
    'audition_date',
    'audition_time',
    'organizer_id',
    'show_id',
  ];
  
  public function get_show()
  {
    return $this->belongsTo('App\ProductionShow');
  }
  public function get_roles()
  {
    return $this->hasMany('App\ProductionShowAuditionRole');
  }

}
