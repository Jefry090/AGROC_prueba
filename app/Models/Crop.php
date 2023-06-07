<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Crop
 *
 * @property $id
 * @property $Name
 * @property $Type
 * @property $Quantity
 * @property $Datesowing
 * @property $created_at
 * @property $updated_at
 *
 * @property Getin[] $getins
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Crop extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Type' => 'required',
		'Quantity' => 'required',
		'Datesowing' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Type','Quantity','Datesowing'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getins()
    {
        return $this->hasMany('App\Models\Getin', 'id_crops', 'id');
    }
    

}
