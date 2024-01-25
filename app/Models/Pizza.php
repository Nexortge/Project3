<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'pizza_ingredients')->withPivot('quantity');
    }

    public function pizzaPrice()
    {
        return $this->hasOne(PizzaPrice::class, 'pizza_id');
    }
}
