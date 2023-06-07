<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profile
 *
 * @property $id
 * @property $User_Rol
 * @property $id_users
 * @property $created_at
 * @property $updated_at
 *
 * @property Chat[] $chats
 * @property Post[] $posts
 * @property Suscription[] $suscriptions
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profile extends Model
{
    
    static $rules = [
		'User_Rol' => 'required',
		'id_users' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['User_Rol','id_users'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chats()
    {
        return $this->hasMany('App\Models\Chat', 'id_profiles', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'id_profiles', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suscriptions()
    {
        return $this->hasMany('App\Models\Suscription', 'id_profiles', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_users');
    }
    

}
