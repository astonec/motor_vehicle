<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;
    protected $fillable = ['tax_type', 'amount'];

    public function vehicle() {
        return $this->belongsTo('App\Models\Vehicle');
    }
}
