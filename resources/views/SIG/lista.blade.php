@extends('includes.panel.menu')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h3 mb-2 text-gray-800">Sistema de información geográfico</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="mb-4">Catálogo de herramientas geográficas para consultar la cartografía producida para los diferentes proyectos que gestiona la Agencia APP desde sus distintas Subdirecciones.</p>
                        </div>
                    </div>

<!-- Content Row -->
<div class="row d-flex justify-content-around mt-6">             

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Expediente geográfico</h6>
                        <a href="{{ url('/SIG/create') }}" class="btn-get-started" style="position: absolute; top: 0; right: 10px;">Añadir</a>
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
                                    <th>Categoría</th>
                                    <th>Título</th> 
                                    <th>Enlace</th>
                                    <th>Archivo</th>
                                    <th>Imagen</th>
                                    <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sig as $si)
                                        <tr>
                                            <td>
                                                {{ $si->id }}
                                            </td>
                                            <td>
                                            {{ !empty($si->categoria ) ? substr($si->categoria, 0, 18) . (strlen($si->categoria ) > 18 ? '...' : '') : 'N/A' }}                                                
                                            </td>
                                            <td>
                                            {{ !empty($si->titulo ) ? substr($si->titulo, 0, 18) . (strlen($si->titulo ) > 18 ? '...' : '') : 'N/A' }}
                                            </td>    
                                            <td>
                                            {{ !empty($si->enlace ) ? substr($si->enlace, 0, 18) . (strlen($si->enlace ) > 18 ? '...' : '') : 'N/A' }}
                                            </td>  
                                            <td>
                                            {{ !empty($si->archivo ) ? substr($si->archivo, 0, 18) . (strlen($si->archivo ) > 18 ? '...' : '') : 'N/A' }}
                                            </td>                    
                                            <td>
                                            {{ !empty($si->imagen ) ? substr($si->imagen, 0, 18) . (strlen($si->imagen ) > 18 ? '...' : '') : 'N/A' }}
                                            </td>
                                        
                                            <td class="text-center">
                                                <form action="{{ url('/SIG/'.$si->id) }}" method="POST" class="d-flex justify-content-center">
                                                    @csrf 
                                                    @method('DELETE') 
                                                    <a href="{{ url('/SIG/'.$si->id.'/edit') }}" class="btn-get-started">Editar</a>
                                                    <button type="submit" class="btn-get-red">Eliminar</button>
                                                </form>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7"> {{$sig->appends(['busqueda'=>$busqueda])}}  </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
</div>                    
@endsection



