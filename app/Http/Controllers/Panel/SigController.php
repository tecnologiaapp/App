<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SIG;

class SigController extends Controller
{
    public function index(Request $request)
    {   
        $busqueda = $request->busqueda;

        $Story = SIG::where('categoria', '=', 'Story Maps')
        ->orderBy('id','desc')
                            ->paginate(9);
        $Mapa = SIG::where('categoria', '=', 'Mapa Web')
        ->orderBy('id','desc')
                            ->paginate(9);
        $Aplicacion = SIG::where('categoria', '=', 'Aplicacion Web')
        ->orderBy('id','desc')
                            ->paginate(9);
        $Dashboard = SIG::where('categoria', '=', 'Dashboard')
        ->orderBy('id','desc')
                            ->paginate(9);

        $App = SIG::where('categoria', '=', 'App Movil')
        ->orderBy('id','desc')
                            ->paginate(9);
        $Ortofoto = SIG::where('categoria', '=', 'Ortofoto')
        ->orderBy('id','desc')
                            ->paginate(9);
        $Modelo = SIG::where('categoria', '=', 'Modelo 3D')
        ->orderBy('id','desc')
                            ->paginate(9);
        $Colecciones = SIG::where('categoria', '=', 'colecciones')
        ->orderBy('id','desc')
                            ->paginate(9);
        $data = [
            'Story' =>$Story,
            'Mapa' =>$Mapa,
            'Aplicacion' =>$Aplicacion,
            'Dashboard' =>$Dashboard,
            'App' =>$App,
            'Ortofoto' =>$Ortofoto,
            'Modelo' =>$Modelo,
            'Colecciones' =>$Colecciones,
            'busqueda' =>$busqueda,
            ];
        return view('user.projects.SigExpediente', $data);
    }

    public function lista(Request $request)
    {  
        $texto = trim($request->get('texto'));
        $sig = SIG::where('titulo','LIKE','%'.$texto.'%')
                      ->orderBy('id', 'desc')
                      ->paginate(8);
        $data = [
            'sig' =>$sig,
            'texto' =>$texto,
            ];
        return view('SIG.lista', $data);
    }

    public function create()
    {   
        $sig = SIG::all();
        return view('SIG.create', compact('sig'));
    }

    public function store(Request $request)
    {     

        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,gif', // Validación para imagen
        ]);
        $sig = new SIG();
        $sig->categoria = $request->categoria;
        $sig->titulo = $request->titulo;
        $sig->enlace = $request->enlace;
        $sig->recurso = $request->recurso;
        if ($request->hasFile('modelo') && $request->file('modelo')->isValid()) {
            $archivo = $request->file('modelo');
            $modeloNombre = $archivo->getClientOriginalName();
            $archivo->storeAs('public/recurso', $modeloNombre);
            $sig->archivo = $modeloNombre;
        }
        if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
            $archivo = $request->file('imagen');
            $imagenNombre = $archivo->getClientOriginalName();
            $archivo->storeAs('public/recurso', $imagenNombre);
            $sig->imagen = $imagenNombre;
        }
        if ($request->hasFile('gif') && $request->file('gif')->isValid()) {
            $archivo = $request->file('gif');
            $imagenNombre = $archivo->getClientOriginalName();
            $archivo->storeAs('public/recurso', $imagenNombre);
            $sig->gif = $imagenNombre;
        }
    
        $sig->save();
    
        $notificacion = 'El contenido se ha registrado correctamente';
        return redirect()->route('SIG.lista')->with(compact('notificacion'));
    }

    public function edit(string $id)
    {
        $sig = SIG::find($id);
        $data = [
            'sig' =>$sig,
        ];
        return view('SIG.edit',$data);
    }

    public function update(Request $request, string $id)
    {   
        $sig = SIG::find($id);
        $sig->categoria = $request->categoria;
        $sig->titulo = $request->titulo;
        $sig->enlace = $request->enlace;
        $sig->recurso = $request->recurso;
        
        if ($request->hasFile('modelo') && $request->file('modelo')->isValid()) {
            $archivo = $request->file('modelo');
            $modeloNombre = $archivo->getClientOriginalName();
            $archivo->storeAs('public/recurso', $modeloNombre);
            $sig->archivo = $modeloNombre;
        }
        if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
            $archivo = $request->file('imagen');
            $imagenNombre = $archivo->getClientOriginalName();
            $archivo->storeAs('public/recurso', $imagenNombre);
            $sig->imagen = $imagenNombre;
        }
        if ($request->hasFile('gif') && $request->file('gif')->isValid()) {
            $archivo = $request->file('gif');
            $imagenNombre = $archivo->getClientOriginalName();
            $archivo->storeAs('public/recurso', $imagenNombre);
            $sig->gif = $imagenNombre;
        }
        $notificacion = 'El contenido se ha actualizado correctamente';
        $sig->save();      
        return redirect()->route('SIG.lista')->with(compact('notificacion'));
    }

    public function destroy(string $id)
    {
        $sig = SIG::find($id);        
        $sig->delete();
        $notificacion = 'El contenido se ha eliminado correctamente';
        return redirect()->route('SIG.lista')->with(compact('notificacion'));
    }
}
