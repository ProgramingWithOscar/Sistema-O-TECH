<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        return Producto::all();
    }

    public function store (Request $request) {
        return Producto::create($request->all());
    }

    public function destroy ($id) {
         $producto = Producto::findOrFail($id);

         if(!$producto) {
            return response()->json(['message' => 'not found'], 404);
         }

         $producto->delete();

         return response()->json(['message', "success deleted"], 200);
    }
    public function update (Request $request, $id) {
        $producto = Producto::findOrFail($id);

        if($producto){
            $producto->update($request->all());
        }

        return response()->json(['message', "success santiago fo"], 200);
    }
}
