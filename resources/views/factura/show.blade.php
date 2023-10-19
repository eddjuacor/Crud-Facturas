@extends('layouts.app')

@section('content')
<div class="boton-regresar2">
<a href="{{route('factura.index')}}" class="btn btn-primary" >Regresar</a>
</div>

<div class="container">
    <h2>Detalle de factura No.{{$factura->id}}</h2>
</div>

<div class="container d-flex flex-column">

    <h3>Item: {{$factura->item}}</h3>
    <h6>Concepto: {{$factura->concepto}}</h6>
    <h6>Cantidad: {{$factura->cantidad}}</h6>
    <h6>Precio: {{$factura->precio}}Q</h6>
</div>

@endsection

