<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Getin
 *
 * @property $id
 * @property $Date
 * @property $Quantity
 * @property $id_crops
 * @property $id_product
 * @property $id_supplies
 * @property $id_animal
 * @property $id_machineries
 * @property $created_at
 * @property $updated_at
 *
 * @property Animal $animal
 * @property Crop $crop
 * @property Machinery $machinery
 * @property Product $product
 * @property Record[] $records
 * @property Supply $supply
 * @property Warehouse[] $warehouses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Getin extends Model
{
    
    static $rules = [
		'Date' => 'required',
		'Quantity' => 'required',
		'id_crops' => 'required',
		'id_product' => 'required',
		'id_supplies' => 'required',
		'id_animal' => 'required',
		'id_machineries' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Date','Quantity','id_crops','id_product','id_supplies','id_animal','id_machineries'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function animal()
    {
        return $this->hasOne('App\Models\Animal', 'id', 'id_animal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function crop()
    {
        return $this->hasOne('App\Models\Crop', 'id', 'id_crops');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function machinery()
    {
        return $this->hasOne('App\Models\Machinery', 'id', 'id_machineries');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_product');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Models\Record', 'id_getins', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supply()
    {
        return $this->hasOne('App\Models\Supply', 'id', 'id_supplies');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function warehouses()
    {
        return $this->hasMany('App\Models\Warehouse', 'id_getins', 'id');
    }
    

}
