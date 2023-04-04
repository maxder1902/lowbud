<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function importCsv(Request $request)
    {
        // Verificar si se envió un archivo
        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');

            // Verificar que el archivo no sea nulo
            if (!is_null($file)) {
                $fileName = $file->getClientOriginalName();
                Product::importFromCsv($file->getRealPath(), $fileName);

                return redirect()->back()->with('success', 'Archivo CSV importado correctamente');
            }
        }

        return redirect()->back()->with('error', 'No se seleccionó ningún archivo CSV');
    }

    public function indexProducts(){
        $products = Product::showProducts();
        return view('products', ['products' => $products]);
    }
}
