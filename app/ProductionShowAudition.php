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
  protected $fillable = ['name', 'description', 'location'];

}
