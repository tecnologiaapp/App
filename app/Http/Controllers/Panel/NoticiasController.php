<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticias;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class NoticiasController extends Controller
{
    public function index(Request $request)
    {   $busqueda = $request->busqueda;
        $noticias = Noticias::orderBy('id', 'desc')->paginate(3);
        $data = [
            'noticias' =>$noticias,
            'busqueda' =>$busqueda,
            ];
        return view('user.transparency.boletin', $data);
    }

    public function lista(Request $request)
    {   $busqueda = $request->busqueda;
        $noticias = Noticias::orderBy('id', 'desc')->paginate(3);
        $data = [
            'noticias' =>$noticias,
            'busqueda' =>$busqueda,
            ];
        return view('noticias.lista', $data);
    }
}
