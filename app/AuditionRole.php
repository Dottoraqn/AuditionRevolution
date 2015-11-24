<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditionRole extends Model
{
    //
  protected $table = "production_company_show_audition_role";

  protected $fillable = [
    'character_name',
    'character_ethnicity',
    'character_sex',
    'character_height',
    'character_weight',
    'character_vocal_range'
  ];
}
