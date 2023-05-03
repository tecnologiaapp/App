<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medios;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class MedioController extends Controller
{
    public function index(Request $request)
    {   $busqueda = $request->busqueda;
        $medios = Medios::orderBy('id', 'desc')->paginate(3);
        $data = [
            'medios' =>$medios,
            'busqueda' =>$busqueda,
            ];
        return view('user.transparency.medios', $data);
    }

    public function lista(Request $request)
    {   $busqueda = $request->busqueda;
        $medios = Medios::orderBy('id', 'desc')->paginate(3);
        $data = [
            'medios' =>$medios,
            'busqueda' =>$busqueda,
            ];
        return view('medios.lista', $data);
    }

    public function create()
    {   
        $medios = Medios::all();
        return view('medios.create', compact('medios'));
    }

    public function store(Request $request)
    {
       $medios = new Medios();
       $medios->titulo = $request->titulo;
       $medios->descripcion = $request->descripcion;      
       $medios->fecha = $request->fecha;
       $medios->enlace = $request->enlace;
       $medios->save();
       

       $notificacion = 'La noticia se ha registrado correctamente';
       return redirect()->route('medios.lista')->with(compact('notificacion'));

    }

    public function edit(string $id)
    {
        $medios = Medios::find($id);
        $data = [
            'medios' =>$medios,
        ];
        return view('medios.edit',$data);
    }

    public function update(Request $request, string $id)
    {   
        $medios = Medios::find($id);
        $medios->titulo = $request->titulo;
        $medios->descripcion = $request->descripcion;
        $medios->fecha = $request->fecha;
        $medios->enlace = $request->enlace;

        $notificacion = 'La noticia se ha actualizado correctamente';
        $medios->save();      
        return redirect()->route('medios.lista')->with(compact('notificacion'));
    }

    public function destroy(string $id)
    {
        $medios = Medios::find($id);        
        $medios->delete();
        $notificacion = 'La noticia se ha eliminado correctamente';
        return redirect()->route('medios.index')->with(compact('notificacion'));
    }
}
