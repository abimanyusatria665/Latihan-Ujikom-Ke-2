<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_id',
        'total_price',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function sellingDetails(){
        return $this->hasMany(SellingDetail::class);
    }
}
