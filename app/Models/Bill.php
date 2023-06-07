<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bill
 *
 * @property $id
 * @property $Time
 * @property $Type_Bagde
 * @property $cost
 * @property $id_transaction
 * @property $created_at
 * @property $updated_at
 *
 * @property Transaction $transaction
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bill extends Model
{
    
    static $rules = [
		'Time' => 'required',
		'Type_Bagde' => 'required',
		'cost' => 'required',
		'id_transaction' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Time','Type_Bagde','cost','id_transaction'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transaction()
    {
        return $this->hasOne('App\Models\Transaction', 'id', 'id_transaction');
    }
    

}
