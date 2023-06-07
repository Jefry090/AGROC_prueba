<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Output
 *
 * @property $id
 * @property $id_sales
 * @property $created_at
 * @property $updated_at
 *
 * @property Record[] $records
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Output extends Model
{
    
    static $rules = [
		'id_sales' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_sales'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Models\Record', 'id_outputs', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'id_sales');
    }
    

}
