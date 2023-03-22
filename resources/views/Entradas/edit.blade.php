@extends('default')
@section('title')
    Editar Entradas
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('EntradaUpdate') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idJuego" class="form-label">ID de Juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" required
                            value={{ $datos -> idJuego}} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="entradaAlta" class="form-label">Alta de entradas:</label>
                        <input type="text" class="form-control" name="entradaAlta" id="entradaAlta" required
                        value={{ $datos -> entradaAlta}} >
                    </div>
                    <div class="col">
                        <label for="entradaBaja" class="form-label">Baja de Entradas:</label>
                        <input type="text" name="entradaBaja" class="form-control" id="entradaBaja" required
                        value={{ $datos -> entradaBaja}} >
                    </div>
                    <div class="col">
                        <label for="carrerasAltas" class="form-label">Alta de Carrreras:</label>
                        <input type="text" name="idCampo" class="form-control" id="carrerasAltas"  
                        value={{ $datos -> carrerasAltas}} >
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="carrerasBaja" class="form-label">Baja de Carreras:</label>
                        <input type="date" name="Fecha" class="form-control" id="carrerasBaja" required
                        value={{ $datos -> carrerasBaja}} >
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