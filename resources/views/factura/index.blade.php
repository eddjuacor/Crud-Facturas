@extends('layouts.app')

@section('content')
    <div>
        <h1>Crud Facturas</h1>
        <a href="{{route('factura.create')}}" class="btn btn-primary">Crear Factura</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Item</th>
                <th scope="col">Concepto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Accion</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($facturas as $factura )

              <tr>
                <th scope="row">

                    <a href="#">{{$factura->item}}</a> <br />

                </th>
                <td>

                    <a href="#">{{$factura->concepto}}</a><br />


                </td>
                <td>

                    <a href="#">{{$factura->cantidad}}</a><br />

                </td>
                <td>

                    <a href="#">{{$factura->precio}}Q</a><br />

                </td>
                <td class="botones">
                    <a href="{{route('factura.edit', $factura->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{route('factura.show', $factura->id)}}" class="btn btn-primary">Detalle</a>
                    <form method="POST" action="{{route('factura.destroy', $factura->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
                @empty
                    <p>no data</p>
                @endforelse

            </tr>
            </tbody>
          </table>
    </div>
@endsection
