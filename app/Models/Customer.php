<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'p_numb',
        'address',
        'notes',
    ];

    public function logs() {
        return $this->hasMany(Log::class, 'cust_id', 'id');
    }

    public function tickets() {
        return $this->hasMany(Ticket::class, 'cust_id', 'id');
    }
}
