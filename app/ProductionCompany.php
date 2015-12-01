<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionCompany extends Model
{
  protected $table = "production_company";

  protected $fillable = [
    'name',
    'website',
    'address',
    'city',
    'state',
    'union',
    'owner_id'
  ];

  /**
   *
   * A ProducitonCompany is owned by a User
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function owner()
  {
    return $this->belongsTo('App\User');
  }

  /**
   * user can have many production companies
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
    public function get_shows()
    {
        return $this->hasMany('App\ProductionShow', 'production_company_id');
    }
    
    /**
     * user can have many production companies
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
      public function get_teams()
      {
          return $this->hasMany('App\ProductionCompanyTeam', 'production_company_id');
      }
}
