<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    protected $fillable = [
            'customer_id',
            'name',
            'contact_name',
            'country'

    ];
    public  function orders(): Hasmany
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

}


