<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Machinery
 *
 * @property $id
 * @property $Type
 * @property $Model
 * @property $Brand
 * @property $YearManuFactured
 * @property $Status
 * @property $created_at
 * @property $updated_at
 *
 * @property Getin[] $getins
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Machinery extends Model
{
    
    static $rules = [
		'Type' => 'required',
		'Model' => 'required',
		'Brand' => 'required',
		'YearManuFactured' => 'required',
		'Status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Type','Model','Brand','YearManuFactured','Status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getins()
    {
        return $this->hasMany('App\Models\Getin', 'id_machineries', 'id');
    }
    

}
