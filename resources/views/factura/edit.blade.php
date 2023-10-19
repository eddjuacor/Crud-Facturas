@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('factura.index')}}" class="btn btn-primary">Regresar</a>
</div>
    <div class="container" >
    <form method="POST" action="{{route('factura.update', $factura->id)}}">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label class="form-label">Item:</label>
            <input type="text" class="form-control" name="item" value="{{$factura->item}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Concepto:</label>
            <input type="text" class="form-control" name="concepto" value="{{$factura->concepto}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Cantidad:</label>
            <input type="text" class="form-control" name="cantidad" value="{{$factura->cantidad}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Precio:</label>
            <input type="text" class="form-control" name="precio" value="{{$factura->precio}}">
        </div>

        <input type="submit" value="Actualizar" class="btn btn-success">
    </form>
    </div>
@endsection
