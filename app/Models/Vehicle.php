<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'vehicle_no','created_at', 'name'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}
