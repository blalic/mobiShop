<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    private $p = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $categories = Category::all();

        $pr = Product::with('category')->get()->toArray();
        $n = count($pr);

        if ($n > $this->p){
            $products = Product::paginate($this->p);
        }
        else{
            $products = Product::all();
        }

        return view('products', compact('products', 'categories', 'n'));
    }


    public function category($category, $id)
    {
        // $products = Product::where('category_id',$id)->with('category')->get();

        $categories = Category::all();

        // dd($products);

        $pr = Product::with('category')->where('category_id',$id)->get()->toArray();
        $n = count($pr);

        if ($n > $this->p){
            $products = Product::where('category_id', $id)->paginate($this->p);
        }
        else{
            $products = Product::where('category_id',$id)->get();
        }

        return view('products', compact('products', 'categories', 'n'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('id', $id)->with('category')->firstOrFail();
        // $categories = Category::all();

        return view('show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
