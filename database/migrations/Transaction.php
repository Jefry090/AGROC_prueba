<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 *
 * @property $id
 * @property $Start_Date
 * @property $Amount_Paid
 * @property $Transaction_Status
 * @property $id_PaymentMethods
 * @property $id_Suscription
 * @property $created_at
 * @property $updated_at
 *
 * @property Bill[] $bills
 * @property PaymentMethod $paymentMethod
 * @property Suscription $suscription
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transaction extends Model
{
    
    static $rules = [
		'Start_Date' => 'required',
		'Amount_Paid' => 'required',
		'Transaction_Status' => 'required',
		'id_PaymentMethods' => 'required',
		'id_Suscription' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Start_Date','Amount_Paid','Transaction_Status','id_PaymentMethods','id_Suscription'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bills()
    {
        return $this->hasMany('App\Models\Bill', 'id_transaction', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paymentMethod()
    {
        return $this->hasOne('App\Models\PaymentMethod', 'id', 'id_PaymentMethods');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function suscription()
    {
        return $this->hasOne('App\Models\Suscription', 'id', 'id_Suscription');
    }
    

}
