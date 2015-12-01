<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserResume extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_resume';

    protected $fillable = [ 
      'biography',
      'skills'
    ];

}

?>
