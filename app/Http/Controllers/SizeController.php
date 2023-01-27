<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\size;

class SizeController extends Controller
{
    public function index()
    {
    	$data = size::all();
    	return view('admin.size',['arr'=>$data]);
    }
    public function manage_size()
    {
    	return view('admin.manage_size');
    }
    public function store(Request $request)
    {
    	//return $request->post();
    	$request->validate([
        'size' => 'required|unique:sizes'

    	]);

    	$data = new size();
    	$data->size = $request->post('size');
    	$data->save();

    	$request->session()->flash('success',"Size Data Inserted");
    	return redirect('admin/size');
    }

    public function destroy(Request $request,$id)
    {
    	$model = size::find($id);
        $model->delete();
        $request->session()->flash('success','Category deleted sucessfully');
        return redirect('admin/size');
    }
}
