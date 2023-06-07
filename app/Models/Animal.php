<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Animal
 *
 * @property $id
 * @property $Name
 * @property $Breed
 * @property $DateBorn
 * @property $created_at
 * @property $updated_at
 *
 * @property Getin[] $getins
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Animal extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Breed' => 'required',
		'DateBorn' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Breed','DateBorn'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getins()
    {
        return $this->hasMany('App\Models\Getin', 'id_animal', 'id');
    }
    

}
