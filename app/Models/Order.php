<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    //relacion uno a muchos (inversa) work ok!
    public function user()
    {
        return $this->belongsTo(User::class);
    }

      //relacion muchos a muchos
      public function food()
      {
          return $this->belongsToMany(Food::class);
      }
}
