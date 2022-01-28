<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table = 'Prestamos';

    protected $fillable = [
        'numCont',
        'idMast',  
        'idLibro',
        'idTipoPrestamo',
        'fechaPrestamo',
        'horaPrestamo',
        'fechaEntrega',
        'horaEntrega',
        'observaciones'      
    ];

    public function libros(){
        return $this->hasMany(Libro::class);
    }

    public function tiposPrestamos(){
        return $this->hasMany(Libro::class);
    }
}
