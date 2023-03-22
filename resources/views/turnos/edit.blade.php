@extends('default')
@section('title')
    Editar Turnos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('turnoUpdate') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idTurno" class="form-label">ID de Ampayer:</label>
                        <input type="text" class="form-control" name="idAmpayer" id="idTurno" required
                            value={{ $datos->idAmpayer }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required
                            value={{ $datos->nombre }}>
                    </div>
                    <div class="col">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" name="apellidos" class="form-control" id="apellidos" required
                            value={{ $datos->apellidos }}>
                    </div>
                    <div class="col">
                        <label for="abreviacion" class="form-label">Abreviación:</label>
                        <input type="text" name="abreviacion" class="form-control" id="abreviacion"
                            value={{ $datos->abreviacion }}>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" name="fechaNacimiento" class="form-control" id="fechaNacimiento" required
                            value={{ $datos->fechaNacimiento }}>
                    </div>
                    <div class="col">
                        <label for="curp" class="form-label">CURP:</label>
                        <input type="text" name="curp" class="form-control" id="curp"   
                            value={{ $datos->curp }}>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="status" class="form-label">Estatus:</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="1" {{ $datos->status == 1 ? "selected" : ""}}>Activo</option>
                            <option value="0" {{ $datos->status == 0 ? "selected" : ""}}>Inactivo</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
