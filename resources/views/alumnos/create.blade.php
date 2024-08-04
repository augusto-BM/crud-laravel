@extends('layout.template')

@section('title', 'Registrar alumnos | Escuela')

@section('contenido')

    <main>
        <div class="container py-5">
            <h2>Registrar Alumno</h2>

            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ url('alumnos') }}" method="POST">
                @csrf 
                <div class="row mb-3">
                    <label for="matricula" class="col-sm-2 col-form-label">Matricula:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="matricula" name="matricula"
                            value="{{ old('matricula') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre completo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fecha" class="col-sm-2 col-form-label">Fecha de nacimiento:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="telefono" class="col-sm-2 col-form-label">Telefono:</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}"
                          required>
                  </div>
              </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nivel" class="col-sm-2 col-form-label">Nivel:</label>
                    <div class="col-sm-5">
                        <select name="nivel" id="nivel" class="form-select" required>
                            <option value="">Seleccionar nivel</option>
                            @foreach ($niveles as $nivel)
                                <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <a href="{{ url('alumnos') }}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </main>

@endsection
