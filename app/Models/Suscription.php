<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suscription
 *
 * @property $id
 * @property $Type_Suscription
 * @property $Time
 * @property $price
 * @property $Description
 * @property $id_profiles
 * @property $created_at
 * @property $updated_at
 *
 * @property Profile $profile
 * @property Transaction[] $transactions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Suscription extends Model
{
    
    static $rules = [
		'Type_Suscription' => 'required',
		'Time' => 'required',
		'price' => 'required',
		'Description' => 'required',
		'id_profiles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Type_Suscription','Time','price','Description','id_profiles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne('App\Models\Profile', 'id', 'id_profiles');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'id_Suscription', 'id');
    }
    

}
