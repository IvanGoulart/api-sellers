<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     *@var array
     */
    protected $fillable = [
        'seller_id',
        'amount',
        'dt_sale',
        'total_amount'
    ];


    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
