<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chat
 *
 * @property $id
 * @property $DateTime
 * @property $Text
 * @property $Images
 * @property $Videos
 * @property $Audios
 * @property $id_profiles
 * @property $id_post
 * @property $created_at
 * @property $updated_at
 *
 * @property Post $post
 * @property Profile $profile
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Chat extends Model
{
    
    static $rules = [
		'DateTime' => 'required',
		'Text' => 'required',
		'Images' => 'required',
		'Videos' => 'required',
		'Audios' => 'required',
		'id_profiles' => 'required',
		'id_post' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['DateTime','Text','Images','Videos','Audios','id_profiles','id_post'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function post()
    {
        return $this->hasOne('App\Models\Post', 'id', 'id_post');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne('App\Models\Profile', 'id', 'id_profiles');
    }
    

}
