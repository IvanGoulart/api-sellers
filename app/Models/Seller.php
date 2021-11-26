<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Seller extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     *@var array
     */
    protected $fillable = [
        'name',
        'email',
    ];


    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
