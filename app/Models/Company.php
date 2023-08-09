<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'address', 'phone', 'pharmacist_id' // Corrected the field name to 'pharmacist_id'
    ];

    public function pharmacist()
    {
        return $this->belongsTo(User::class, 'pharmacist_id');
    }
}
