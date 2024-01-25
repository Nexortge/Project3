<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaPrice extends Model
{
    protected $fillable = ['pizza_id', 'price_small', 'price_medium', 'price_large'];

    public function menuItem()
    {
        return $this->belongsTo(Pizza::class, 'pizza_id');
    }
}
