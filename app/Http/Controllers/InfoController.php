<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
{
    return view('components.info'); // Retorna una vista llamada "info.blade.php"
}

}
