<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        if (request()->has('empty')){
            $users = [];
        }
        else {
            $users = [
                'Marcos', 'Juan', 'Israel', 'Pepe', 'Angel'
            ];
        }

        $title = "Listado de Usuarios";
        
        /*
        ***FORMA 1 de pasar valores a la vista
        return view ('users', [
            'users' => $users,
            'title' => "Listado de Usuarios"
        ]);
        */

        /**FORMA 2 de pasar valores a la vista (usando with())
        return view ('users') -> with([
            'users' => $users,
            'title' => "Listado de Usuarios"
        ]);
        */

        /**FORMA 3 de pasar valores a la vista (usando with() independientes) 
        return view ('users')
            -> with ('users', $users)
            -> with ('title', "Listado de Usuarios");
        */

        /**FORMA 4 de pasar valores a la vista (usando with() independientes) */
        //dd(compact('title', 'users')); FUNCION usada para crear un arreglo asociativo de manera automatica, siempre y cuando ya se cuente con las variables.
        return view ('users', compact('title', 'users'));
    }

    public function show($id)
    {
        return view('users-show',compact('id')); //Pasar valores a la vista
    }

    public function create()
    {
        return "Crear nuevo usuario";
    }
}
