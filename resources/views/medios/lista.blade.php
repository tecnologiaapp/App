@extends('includes.panel.menu')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h3 mb-2 text-gray-800">Sala de prensa</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="mb-4">Gestiona el contenido de App en medios.</p>
                        </div>
                    </div>

<!-- Content Row -->
<div class="row d-flex justify-content-around mt-6">             

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">APP en medios</h6>
                        <a href="{{ url('/medios/create') }}" class="btn-get-started" style="position: absolute; top: 0; right: 10px;">Añadir noticia</a>
                    </div>                      
                        
                    <div class="card-body px-0 pt-0 pb-2">
                        @if(session('notificacion'))
                            <div class="alert alert-success" role="alert">
                                {{ session('notificacion') }}
                            </div>
                        @endif
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Fecha</th>   
                                    <th>Enlace</th>
                                    <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($medios as $medio)
                                        <tr>
                                            <td>
                                                {{ $medio->id }}
                                            </td>
                                            <td>
                                            {{ !empty($medio->titulo ) ? substr($medio->titulo, 0, 18) . (strlen($medio->titulo ) > 18 ? '...' : '') : 'N/A' }}
                                            </td>                       
                                            <td>
                                            {{ !empty($medio->descripcion ) ? substr($medio->descripcion, 0, 18) . (strlen($medio->descripcion ) > 18 ? '...' : '') : 'N/A' }}
                                            </td>
                                            <td>
                                                {{ $medio->fecha }}
                                            </td>
                                            <td>
                                            {{ !empty($medio->enlace ) ? substr($medio->enlace, 0, 18) . (strlen($medio->enlace ) > 18 ? '...' : '') : 'N/A' }}
                                            </td>
                                        
                                            <td class="text-center">
                                                <form action="{{ url('/medios/'.$medio->id) }}" method="POST" class="d-flex justify-content-center">
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
                    </div>
</div>                    
@endsection



