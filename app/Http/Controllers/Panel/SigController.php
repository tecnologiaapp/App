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
                            ->paginate(3);
        $Mapa = SIG::where('categoria', '=', 'Mapa Web')
        ->orderBy('id','desc')
                            ->paginate(3);
        $Aplicacion = SIG::where('categoria', '=', 'Aplicacion Web')
        ->orderBy('id','desc')
                            ->paginate(3);
        $Dashboard = SIG::where('categoria', '=', 'Dashboard')
        ->orderBy('id','desc')
                            ->paginate(3);

        $App = SIG::where('categoria', '=', 'App Movil')
        ->orderBy('id','desc')
                            ->paginate(3);
        $Ortofoto = SIG::where('categoria', '=', 'Ortofoto')
        ->orderBy('id','desc')
                            ->paginate(3);
        $Modelo = SIG::where('categoria', '=', 'Modelo 3D')
        ->orderBy('id','desc')
                            ->paginate(3);
        $data = [
            'Story' =>$Story,
            'Mapa' =>$Mapa,
            'Aplicacion' =>$Aplicacion,
            'Dashboard' =>$Dashboard,
            'App' =>$App,
            'Ortofoto' =>$Ortofoto,
            'Modelo' =>$Modelo,
            'busqueda' =>$busqueda,
            ];
        return view('user.projects.SigExpediente', $data);
    }

    public function lista(Request $request)
    {   $busqueda = $request->busqueda;
        $sig = SIG::orderBy('id', 'desc')->paginate(3);
        $data = [
            'sig' =>$sig,
            'busqueda' =>$busqueda,
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
       $sig = new SIG();
       $sig->categoria = $request->categoria;
       $sig->titulo = $request->titulo;
       $sig->enlace = $request->enlace;
       $request->validate([
        'imagen' => 'image|mimes:jpeg,png,gif,bmp,svg',
          ]);
        if($request->hasFile('imagen')){
            $archivo =$request->file('imagen');
            $archivo->move(public_path().'/recursos/',$archivo->getClientOriginalName());
            $sig->imagen = $archivo->getClientOriginalName();
            }
            if($request->hasFile('modelo')){
                $archivo =$request->file('modelo');
                $archivo->move(public_path().'/recursos/',$archivo->getClientOriginalName());
                $sig->archivo = $archivo->getClientOriginalName();
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
        $request->validate([
            'imagen' => 'image|mimes:jpeg,png,gif,bmp,svg',
              ]);
           if($request->hasFile('imagen')){
            $archivo =$request->file('imagen');
            $archivo->move(public_path().'/recursos/',$archivo->getClientOriginalName());
            $sig->imagen = $archivo->getClientOriginalName();
            }
            if($request->hasFile('modelo')){
                $archivo =$request->file('modelo');
                $archivo->move(public_path().'/recursos/',$archivo->getClientOriginalName());
                $sig->archivo = $archivo->getClientOriginalName();
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
