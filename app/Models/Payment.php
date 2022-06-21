<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'vehicle_id','payment_date', 'amount'];

    public function tax() {
        return $this->belongsTo('App\Models\Tax');
    }
}
