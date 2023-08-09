<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'product_id', 'product_name', 'product_price', // Corrected the field name to 'pharmacist_id'
    ];


    use HasFactory;
}
