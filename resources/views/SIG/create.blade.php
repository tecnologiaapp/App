
@extends('includes.panel.menu')  

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection

@section('content')
   
  
<div class="row d-flex justify-content-around mt-6">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Registro de expedientes</h6>
                <a href="{{ route('SIG.lista')}}" class="btn-get-started" style="position: absolute; top: 0; right: 10px;">
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
                <form action="{{ route('SIG.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <select class="form-control @error('categoria') is-invalid @enderror" name="categoria" required>
                            <option value="" selected>Elegir...</option>
                            <option value="Story Maps">Story Maps</option>
                            <option value="Mapa Web">Mapa Web</option>
                            <option value="Aplicacion Web">Aplicación Web</option>
                            <option value="Dashboard">Dashboard</option> 
                            <option value="App Movil">App Móvil</option> 
                            <option value="Ortofoto">Ortofoto</option> 
                            <option value="Modelo 3D">Modelo 3D</option>                                               
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" placeholder="Ingrese título" required>
                    </div>
                    <div class="form-group">
                        <label for="enlace">Enlace</label>
                        <input type="text" class="form-control" name="enlace" placeholder="Ingrese enlace">
                    </div>                   
                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="file" class="form-control" name="imagen" required>
                    </div>
                    <div class="form-group">
                        <label for="modelo">Archivo (Modelos 3D)</label>
                        <input type="file" class="form-control" name="modelo">
                    </div> 
                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn-get-started">Registrar Expediente</button>
                    </div>               
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

