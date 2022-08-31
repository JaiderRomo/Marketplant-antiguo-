<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $fillable =['id','nombre','descripcion','price','categoria_id','cantidad','usos','preparacion','beneficios','cuidados','ubicacion','imagen'];


     //inversa uno a muchos
     public function categoria(){
        return $this->belongsTo('App\Models\Product');   

    }
public function user(){
    return $this->belongsTo('App\Models\User');
}
}