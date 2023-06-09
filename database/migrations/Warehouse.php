<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Warehouse
 *
 * @property $id
 * @property $Name
 * @property $Address
 * @property $Capacity
 * @property $id_getins
 * @property $created_at
 * @property $updated_at
 *
 * @property Getin $getin
 * @property Inventory[] $inventorys
 * @property Sale[] $sales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Warehouse extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Address' => 'required',
		'Capacity' => 'required',
		'id_getins' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Address','Capacity','id_getins'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getin()
    {
        return $this->hasOne('App\Models\Getin', 'id', 'id_getins');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventorys()
    {
        return $this->hasMany('App\Models\Inventory', 'id_warehouses', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Models\Sale', 'id_warehouses', 'id');
    }
    

}
