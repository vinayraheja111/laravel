<?php

namespace App\Http\Controllers;

use App\Models\Coupen;
use Illuminate\Http\Request;

class CoupenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Coupen::all();
        return view('admin.coupen',['arr'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_coupen()
    {
        return view('admin.manage_coupen');
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
           // 'coupen_title' => 'required',
          //  'coupen_code' => 'required|unique:coupens',
           // 'coupen_value' => 'required'
         ]); 

         $data = new Coupen();
         $data->title = $request->post('coupen_title');
         $data->code = $request->post('coupen_code');
         $data->valuess = $request->post('coupen_value');
         $data->save();

         $request->session()->flash('success','coupen Add Successfully');
         return redirect('admin/coupen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function show(Coupen $coupen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupen $coupen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupen $coupen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $model = Coupen::find($id);
        $model->delete();
        $request->session()->flash('success','Category deleted sucessfully');
        return redirect('admin/coupen');
    }

     public function status(Request $request,$type,$id)
    {
        $model = Coupen::find($id);
        $model->status = $type;
        $model->save();
        $request->session()->flash('success','coupen status Updated sucessfully');
        return redirect('admin/coupen');

        //echo $type;
        //echo $id;
    }
}
