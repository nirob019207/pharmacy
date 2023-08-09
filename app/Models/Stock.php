<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicine_id',  'stock', 'name','quantity', 'mfg_date', 'expiry_date', 'purchase_price', 'unit_price'
    ];

    // cast the date fields to Carbon objects
    protected $dates = ['mfg_date', 'expiry_date'];


    public function getExpiresAttribute()
    {
        return $this->expiry_date->lt(today())
            ? '<span class="badge bg-danger-lt">Expired</span>'
            : $this->expiry_date->toFormattedDateString();
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }

    


}


