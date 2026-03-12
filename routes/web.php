<?php

use Illuminate\Support\Facades\Route;

Route::get('/usuarios', function () {
    $usuarios = ["Nila arma", "Mario bros", "Arturo"];
    return view('usuarios', ['usuarios' => $usuarios]);
});