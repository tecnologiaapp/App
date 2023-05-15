
@extends('includes.panel.menu')  

@section('styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection

@section('content')
   
  
                <div class="row d-flex justify-content-around mt-6">
                  <div class="col-md-6">
                      <div class="card mb-4">
                          <div class="card-header pb-0 d-flex justify-content-between">
                            <h6>Registro de Noticias</h6>
                                <a href="{{ route('medios.lista')}}" class="btn-get-started" style="position: absolute; top: 0; right: 10px;">
                                <i class="fas fa-chevron-left"></i>
                                 Regresar
                                </a>
                          </div>
                          <div class="card-body px-5 pt-0 pb-2">
                              @if($errors->any())
                                      @foreach($errors->all() as $error)
                                      <div class="alert alert-danger" role="alert">
                                          {{ $error }}
                                      </div>
                                      @endforeach
                              @endif
                              <form action="{{ route('medios.store')}}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                          <label>Titulo</label>
                                          <div class="form-group">
                                            <input  type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" placeholder="Ingrese titulo" required>
                                          </div>

                                          <label>Descripción</label>
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" placeholder="Ingrese descripcion" required>
                                          </div>
                                          
                                          <label>Fecha</label>
                                          <div class="form-group">
                                            <input type="date" class="form-control" name="fecha" required>
                                          </div>

                                          <label>Enlace</label>
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="enlace" placeholder="Ingrese enlace" required>
                                          </div>
                                        
                                          <div class="d-flex justify-content-around">
                                          <button type="submit" class="btn-get-started">Registrar Noticia</button>
                                          </div>               
                              </form>
                          </div>
                      </div>
                    </div>
                </div>      

@endsection

