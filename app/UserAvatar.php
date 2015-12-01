<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAvatar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_avatar';

    protected $fillable = [ 
      'show_name',
      'role',
      'description',
      'production_company',
      'start_date',
      'end_date'
    ];
}

?>
