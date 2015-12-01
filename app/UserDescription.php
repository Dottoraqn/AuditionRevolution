<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDescription extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_description';

    protected $fillable = [ 
      'description',
      'sex',
      'ethnicity',
      'weight',
      'eye_color',
      'vocal_range',
      'hair_color',
      'union'
    ];
}

?>
