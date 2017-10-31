<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($nombre, $nickname = null)
    {
        if (empty($nickname) != true)
    return "Tu nombre es {$nombre} y tu apodo es {$nickname}";
    else
    return "Tu nombre es {$nombre} y no tienes apodo";
    }
}
