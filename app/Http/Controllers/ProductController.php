<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.product',['arr'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function manage_product()
    {
        $data = DB::table('categories')->get();
        //echo "<pre>";
        //print_r($data);
        //die;
        return view('admin.manage_product',['arr'=>$data]);
    }

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
        //return $request->post();

        $request->validate([
            
               'product_name' => 'required',
               'product_slug' => 'required',
               'Category' => 'required',
               'image' => 'required',
               'model' => 'required',
               'brand' => 'required',
               'sdesc' => 'required',
               'desc' => 'required',
               'keywords' => 'required',
               'Warranty' => 'required'
        ]);

        $data = new Product();
        $data->name = $request->post('product_name');
        $data->image = $request->post('image');
        $data->slug = $request->post('product_slug');
        $data->category_id = $request->post('Category');
        $data->model = $request->post('model');
        $data->brand = $request->post('brand');
        $data->short_desc = $request->post('sdesc');
        $data->desc = $request->post('desc');
        $data->keywords = $request->post('keywords');
        $data->Warranty = $request->post('Warranty');

        $data->save();
        $request->session()->flash('success','data inseted successfully');
        return redirect('admin/product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $model = Product::find($id);
        $model->delete();
        $request->session()->flash('success', 'Product Deleted successfully');
        return redirect('admin/product');

    }

    public function status(Request $request,$type,$id)
    {
        $model = Product::find($id);
        //echo $model;
       // die;
        $model->status = $type;
        $model->save();
        $request->session()->flash('success','Product status Updated sucessfully');
        return redirect('admin/product');
    }
}
