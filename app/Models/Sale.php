<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $Date
 * @property $Amount_Total
 * @property $id_warehouses
 * @property $created_at
 * @property $updated_at
 *
 * @property Output[] $outputs
 * @property Record[] $records
 * @property Warehouse $warehouse
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    
    static $rules = [
		'Date' => 'required',
		'Amount_Total' => 'required',
		'id_warehouses' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Date','Amount_Total','id_warehouses'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function outputs()
    {
        return $this->hasMany('App\Models\Output', 'id_sales', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Models\Record', 'id_sales', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function warehouse()
    {
        return $this->hasOne('App\Models\Warehouse', 'id', 'id_warehouses');
    }
    

}
