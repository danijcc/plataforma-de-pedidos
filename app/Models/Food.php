<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Food extends Model
{
    use HasFactory;

    //relacion muchos a muchos 
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

   
}
