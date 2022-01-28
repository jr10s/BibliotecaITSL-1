<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccessController extends Controller
{
    public function alumnos(Request $request){


        //  $users = DB::connection(1)->select('select * from Alumnos'); //Mysqlite

        // DB::unprepared(file_get_contents('/Users/mac/Desktop/DBITSL/sicenetx.mdb'));


        // $alumno = Alumno::find(1);

        $users = DB::connection(0)->select('select numCont,nom,ape from Alumnos');
        // $acces = new MsAccessReader("/Users/mac/Desktop/DBITSL/sicenetx.mdb");


        /* $model = new Alumno();

        $model->setConnection('access');

        $alumno = $model->find(1); */

       /*  foreach ($users as $alumno) {
            echo $alumno->nombre;
        } */

        return $users;
        
    }
}
