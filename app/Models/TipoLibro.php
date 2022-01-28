<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLibro extends Model
{
    use HasFactory;

    protected $table = 'TipoLibros';

    protected $fillable = [
        'ISBN',
        'titulo',  
        'fechaDeLanzamiento',
        'idioma',
        'pagina',
        'descripcion',
        'portada'      
    ];

    public function libros(){
        return $this->hasMany(Libro::class);
    }
}
