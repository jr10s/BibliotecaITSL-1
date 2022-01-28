<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'Libros';

    protected $fillable = [
        'ISBN',
        'titulo',  
        'fechaDeLanzamiento',
        'idAutor',
        'idCategoria',
        'idEditorial',
        'idTipoLibro',
        'idioma',
        'pagina',
        'descripcion',
        'portada'      
    ];

    public function autor(){
        return $this->belongsTo(Autor::class);
    }

    public function existencia(){
        return $this->belongsTo(Autor::class);
    }


}
