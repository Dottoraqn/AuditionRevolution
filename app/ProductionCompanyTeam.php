<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionCompanyTeam extends Model
{
  protected $table = "production_company_team";

  protected $fillable = [
    'user_id',
    'production_company_id',
    'role',
    'created_at',
  ];
  
  /**
   *
   * A ProducitonCompany is owned by a User
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function owner()
  {
    return $this->belongsTo('App\ProductionCompany');
  }

  /**
   * user can have many production companies
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
    public function get_users()
    {
        return $this->hasMany('App\User', 'user_id');
    }
}
