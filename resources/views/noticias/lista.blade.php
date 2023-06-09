@extends('includes.panel.menu')

@section('styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection

@section('content')

        <div class="card shadow mt-6">
            <div class="card-header border-0">
                <div class="row align-items-start justify-content-between">
                    <div class="col">
                        <h3 class="mb-0">Noticias</h3>
                    </div>
                    <div class="col float-right">
                        <a href="{{ url('/noticias/create') }}" class="btn-get-started" style="position: absolute; top: 0; right: 10;">Añadir noticia</a>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                @if(session('notificacion'))
                    <div class="alert alert-success" role="alert">
                         {{ session('notificacion') }}
                    </div>
                @endif
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead">
                        <tr>
                        <th class="text-capitalize font-weight-bolder">Id</th>
                        <th class="text-capitalize font-weight-bolder">Titulo</th>
                        <th class="text-capitalize font-weight-bolder">Descripción</th>
                        <th class="text-capitalize font-weight-bolder">Contenido</th>
                        <th class="text-capitalize font-weight-bolder">video</th>
                        <th class="text-capitalize font-weight-bolder">recurso1</th>
                        <th class="text-capitalize font-weight-bolder">recurso2</th>
                        <th class="text-capitalize font-weight-bolder">recurso3</th>
                        <th class="text-capitalize font-weight-bolder">recurso4</th>
                        <th class="text-capitalize font-weight-bolder">Fecha</th>   
                        <th class="text-capitalize font-weight-bolder">Imagen</th>
                        <th class="text-center text-capitalize font-weight-bolder">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($noticias as $noticia)
                        <tr>
                            <td>
                                {{ $noticia->id }}
                            </td>
                            <td>
                                {{ $noticia->titulo }}
                            </td>                       
                            <td>
                                {{ $noticia->descripcion }}
                            </td>
                            <td>
                                {{ $noticia->contenido }}
                            </td>
                            <td>
                                {{ $noticia->video }}
                            </td>
                            <td>
                                {{ $noticia->recurso1 }}
                            </td>
                            <td>
                                {{ $noticia->recurso2 }}
                            </td>
                            <td>
                                {{ $noticia->recurso3 }}
                            </td>
                            <td>
                                {{ $noticia->recurso4 }}
                            </td>
                            <td>
                                {{ $noticia->fecha }}
                            </td>
                            <td>
                                {{ $noticia->imagen }}
                            </td>
                           
                            <td class="d-flex justify-content-center btn-group">
                                
                                <form action="{{ url('/medios/'.$medio->id) }}" method="POST">
                                    @csrf 
                                    @method('DELETE') 
                                    
                                    <a href="{{ url('/medios/'.$medio->id.'/edit') }}" class="btn-get-started">Editar</a>
                                    <button type="submit" class="btn-get-red">Eliminar</button>

                                </form>
                                
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                          <td colspan="6"> {{$medios->appends(['busqueda'=>$busqueda])}}  </td>
                      </tr>
                  </tfoot>
                </table>
            </div>
        </div> 
</body>
@endsection



