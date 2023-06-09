<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $Name
 * @property $Description
 * @property $PriceUnit
 * @property $created_at
 * @property $updated_at
 *
 * @property Getin[] $getins
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Description' => 'required',
		'PriceUnit' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Description','PriceUnit'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getins()
    {
        return $this->hasMany('App\Models\Getin', 'id_product', 'id');
    }
    

}
