<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentMethod
 *
 * @property $id
 * @property $Security_Code
 * @property $Card_Holder
 * @property $Card_Number
 * @property $Card_Type
 * @property $Due_Date
 * @property $created_at
 * @property $updated_at
 *
 * @property Transaction[] $transactions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PaymentMethod extends Model
{
    
    static $rules = [
		'Security_Code' => 'required',
		'Card_Holder' => 'required',
		'Card_Number' => 'required',
		'Card_Type' => 'required',
		'Due_Date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Security_Code','Card_Holder','Card_Number','Card_Type','Due_Date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'id_PaymentMethods', 'id');
    }
    

}
