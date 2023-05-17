
@extends('includes.panel.menu')

@section('styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection

@section('content')
<div class="row  justify-content-around mt-6">    

    <div class="col-6">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Editar Expediente</h3>
                    </div>
                    <div class="d-flex justify-content-end px-5">
                        <a href="{{ route('SIG.lista')}}" class="btn-get-started">
                            <i class="fas fa-chevron-left"></i>
                            Regresar</a>
                    </div>
                </div>
            </div>

            <div class="card-body">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-triangle"></i>
                            <strong>Por favor!!</strong> {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form action="{{ route('SIG.update',$sig->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Categoría</label>
                        <input type="text" name="categoria" class="form-control" value="{{ old('categoria', $sig->categoria) }}" readonly>
                    </div>
            
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $sig->titulo) }}" required>
                    </div>       
             
                    <div class="form-group">
                        <label>Enlace</label>
                        <input type="text" class="form-control" name="enlace" value="{{ old('enlace', $sig->enlace) }}">
                    </div>  
                    <div class="form-group">
                        <label for="enlace">Archivo (Modelos 3D)</label>
                        <input type="file" class="form-control" name="modelo">
                    </div>
                    <div class="form-group">
                        <label>Imagen</label>
                        <input type="file" class="form-control" name="imagen" required>
                    </div> 
                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn-get-started">Actualizar datos</button>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</div>

</body>

@endsection
