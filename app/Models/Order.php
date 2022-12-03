<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //relacion uno a muchos (inversa)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
      //relacion muchos a muchos
      public function foods()
      {
          return $this->belongsToMany(Food::class);
      }
}
