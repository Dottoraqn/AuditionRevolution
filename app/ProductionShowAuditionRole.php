<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionShowAuditionRole extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'production_company_show_audition_role';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [ 
    'audition_id',
    'character_name',
    'character_sex',
    'character_ethnicity',
    'character_weight',
    'character_height',
    'character_vocal_range',
  ];
  public function get_audition()
  {
    return $this->belongsTo('App\ProductionShowAudition');
  }
}
