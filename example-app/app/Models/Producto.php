<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\HasFactory;

class Producto extends Model
{

    protected $table = "productos";

    protected $fillable = ['nombre','precio','stock','categoria_id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function ventas(){
        return $this->hasMany(Venta::class);
    }
    
}
