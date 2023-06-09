<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventory
 *
 * @property $id
 * @property $Total_Cost
 * @property $Cost_unit
 * @property $Quantity
 * @property $Date_Input
 * @property $id_warehouses
 * @property $created_at
 * @property $updated_at
 *
 * @property Warehouse $warehouse
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventory extends Model
{
    
    static $rules = [
		'Total_Cost' => 'required',
		'Cost_unit' => 'required',
		'Quantity' => 'required',
		'Date_Input' => 'required',
		'id_warehouses' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Total_Cost','Cost_unit','Quantity','Date_Input','id_warehouses'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function warehouse()
    {
        return $this->hasOne('App\Models\Warehouse', 'id', 'id_warehouses');
    }
    

}
