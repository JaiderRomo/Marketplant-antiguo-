<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable =['id','user_id','titulo','descripcion','imagen'];


    //uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function images(){
        return $this->morphMany('App\Models\Image','imageable');
        
     }
}
