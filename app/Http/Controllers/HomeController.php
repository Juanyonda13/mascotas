<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use App\Models\Categorias;
use App\Models\Raza;
use App\Models\Genero;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mascotas= Mascota::simplePaginate();
        $razas= Raza::simplePaginate();
        return view('mascotas.index',compact('mascotas','razas'));
    }
}
