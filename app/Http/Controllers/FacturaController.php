<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::all();
        return view('factura.index', compact('facturas'));
    }

    public function create()
    {
        return view('factura.create');
    }

    public function store(Request $request)
    {
         Factura::create($request->all());
         return redirect()->route('factura.index');
    }

    public function edit(Factura $factura)
    {
        return view('factura.edit', compact('factura'));

    }
    public function update(Request $request, Factura $factura)
        {
        $factura->update($request->all());
        return redirect()->route('factura.index');
    }

    public function show(Factura $factura)
    {
        return view('factura.show', compact('factura'));
    }

    public function destroy( Factura $factura)
    {
        $factura->delete();
        return redirect()->route('factura.index');
    }
}
