<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 *
 * @property $id
 * @property $Date
 * @property $Description
 * @property $id_getins
 * @property $id_sales
 * @property $id_outputs
 * @property $created_at
 * @property $updated_at
 *
 * @property Getin $getin
 * @property Output $output
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Record extends Model
{
    
    static $rules = [
		'Date' => 'required',
		'Description' => 'required',
		'id_getins' => 'required',
		'id_sales' => 'required',
		'id_outputs' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Date','Description','id_getins','id_sales','id_outputs'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getin()
    {
        return $this->hasOne('App\Models\Getin', 'id', 'id_getins');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function output()
    {
        return $this->hasOne('App\Models\Output', 'id', 'id_outputs');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'id_sales');
    }
    

}
