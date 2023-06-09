<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property $id
 * @property $Name
 * @property $Type_Product
 * @property $Price
 * @property $description
 * @property $Archives
 * @property $Date
 * @property $id_profiles
 * @property $created_at
 * @property $updated_at
 *
 * @property Category[] $categories
 * @property Chat[] $chats
 * @property Profile $profile
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Type_Product' => 'required',
		'Price' => 'required',
		'description' => 'required',
		'Archives' => 'required',
		'Date' => 'required',
		'id_profiles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Type_Product','Price','description','Archives','Date','id_profiles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'id_post', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chats()
    {
        return $this->hasMany('App\Models\Chat', 'id_post', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne('App\Models\Profile', 'id', 'id_profiles');
    }
    

}
