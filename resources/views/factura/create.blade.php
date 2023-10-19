@extends('layouts.app')

@section('content')
<div class="boton-regresar1">
<a href="{{route('factura.index')}}" class="btn btn-primary">Regresar</a>
</div>
    <div class="container" >
    <form method="POST" action="{{route('factura.store')}}" class="form-create">
        @csrf

        <div class="mb-3">
            <label class="form-label">Item:</label>
            <input type="text" class="form-control" name="item">
        </div>

        <div class="mb-3">
            <label class="form-label">Concepto:</label>
            <input type="text" class="form-control" name="concepto">
        </div>

        <div class="mb-3">
            <label class="form-label">Cantidad:</label>
            <input type="text" class="form-control" name="cantidad">
        </div>

        <div class="mb-3">
            <label class="form-label">Precio:</label>
            <input type="text" class="form-control" name="precio">
        </div>

        <input type="submit" value="Crear" class="btn btn-success">
    </form>
    </div>
@endsection
