<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //LECTURA

    public function index()
    {
        $products = Product::all(); //guardamos todas las filas en una variable para recorrerla en la vista

        return view('products.index', compact('products'));//Retornamos la vista y pasamos el array asociativo 'products a la vista'
    }


    //CREAR


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request) //Utilizamos request para sacar datos del formulario
    {

         //validamos los datos del $request

        $request->validate([
            'name' =>  'required|max:20',
            'description' => 'required|min:10',
            'price' =>  'required'
        ]);

        // Crear el nuevo producto
        Product::create($request->all());

        // Redireccionar a la página de listado de productos o a donde desees

        return redirect('/products');
    }


    //ELIMINAR

    public function delete(Request $request) //Utilizamos request para sacar datos del formulario
    {
        $productId = strip_tags(trim($request->input('product_id')));

        $product = Product::find($productId);
        $product->delete();

        // Redireccionar a la página de listado de productos o a donde desees
        return redirect('/products');
    }


    //MOSTRADO DE UN PRODUCTO ELEGIDO


    public function show(Request $request)
    {
        $products = Product::all(); // Obtener todos los productos para el menú desplegable

        $selectedProductId = strip_tags(trim($request->input('product_id')));//Seleccionamos el producto traido del select, 

       /*  QUITAMOS ESPACIOS EN BLANCO Y ETIQUETAS HTML CON TRIM() Y STRIPTAGS() */

        $product = Product::find($selectedProductId);

        return view('products.show', compact('products', 'product'));//Retornamos la vista y pasamos el array asociativo 'products' y 'product' a la vista'
    }


    //ACTUALIZACIÓN DE PRODUCTO

    //Creamos el select en la vista 


    public function selectUpdate(Request $request)
    {
        $products1 = Product::all(); // Obtener todos los productos para el menú desplegable Select

        //seleccionamos una fila con su Id sacado del select para ponerlo en los values del formulario de modificacion

        $selectedProductId = strip_tags(trim($request->input('product_id')));

         /*  QUITAMOS ESPACIOS EN BLANCO Y ETIQUETAS HTML CON TRIM() Y STRIPTAGS() */


        $product = Product::find($selectedProductId);

        return view('products.update', compact('products1', 'product'));//Retornamos la vista y pasamos el array asociativo 'products' y 'product' a la vista'
    }


    public function update(Request $request)
    {


        //validamos los datos del $request

        $request->validate([
            'name' =>  'required|max:20',
            'description' => 'required|min:10',
            'price' =>  'required'
        ]);

        //seleccionamos el id del producto a modificar

        $selectedProductId = strip_tags(trim($request->input('id')));
        $product = Product::find($selectedProductId);

        //Modificamos los valores traidos del formulario

        $product->name = strip_tags($request->input('name'));
        $product->price = $request->input('price');
        $product->description = strip_tags($request->input('description'));

         /*  QUITAMOS ESPACIOS EN BLANCO Y ETIQUETAS HTML CON TRIM() Y STRIPTAGS() */

        $product->save(); //salvamos

        return redirect('/products'); //redirijimos
    }
}
