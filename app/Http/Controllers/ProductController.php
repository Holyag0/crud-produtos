<?php

namespace App\Http\Controllers;


use App\Models\Product;
use \App\Http\Requests\StoreProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function modelProduct()
    {
        return $this->product;
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->modelProduct()->paginate('20');

        return view('productList', compact('products'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('productCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreProduct $request){

        if($request->file('photo')->isValid()){
            $request->file('photo')->store('photoProducts');
            dd($request->all());

        }


    }

    public function edit(Request $id){

        return view('productEdit',compact('id'));
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $id){

        dd("Editando o produtudo:{$id}");

    }
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show(Request $id){
        if(!$product = Product::find($id))
            redirect()->back();
        return view('ProductShow',['product' => $product],compact('id'));
    }
            /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(){

    }
}
