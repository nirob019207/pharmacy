<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Generic;

class Medicine extends Model
{
    protected $fillable = [
        'name', 'price', 'wmg', 'generic_id','company_id', // Corrected the field name to 'pharmacist_id'
    ];

    public function generic()
    {
        return $this->belongsTo('App\Models\Generic', 'generic_id');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
