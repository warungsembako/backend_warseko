<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_number', 'product_id', 'qty', 'total'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
