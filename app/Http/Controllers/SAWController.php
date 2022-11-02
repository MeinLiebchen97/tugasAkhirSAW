<?php

namespace App\Http\Controllers;

use App\Models\Data1;
use App\Models\Data2;
use Illuminate\Http\Request;

class SAWController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data2 = Data2::get();
        foreach ($data2 as $dt2) {
            $iddt2 = $dt2->id;
            Data2::where('id', $iddt2)->delete();
        }
        return view('saw',[
            "title" => "SAW Cumulation",
            'data1s' => Data1::get()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input',[
            "title" => "Add Data",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'c1' => 'required',
            'c2' => 'required',
            'c3' => 'required',
            'c4' => 'required',
            'c5' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Data1::create($validatedData);

        return redirect('/saw');
    }

    public function normalizing(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'c1' => 'required',
            'c2' => 'required',
            'c3' => 'required',
            'c4' => 'required',
            'c5' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Data2::create($validatedData);

        return redirect('/normalize');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data1  $data1
     * @return \Illuminate\Http\Response
     */
    public function show(Data1 $data1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data1  $data1
     * @return \Illuminate\Http\Response
     */
    public function edit(Data1 $data1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data1  $data1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
        $dataid = $request->ids;
        $data['name'] = $request->name;
        $data['c1'] = $request->c1;
        $data['c2'] = $request->c2;
        $data['c3'] = $request->c3;
        $data['c4'] = $request->c4;
        $data['c5'] = $request->c5;
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = Data1::where('id', $dataid)->update($data);

        if($update){
            return redirect('saw');
        }else{
            return redirect('saw');
        }
    }

    public function delete(Request $request) {
        
        $delete = Data1::findOrFail($request->data);
        $delete->delete();

        if($delete){
            return redirect('saw');
        }else{
            return redirect('saw');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data1  $data1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data1 $data1)
    {
        //
    }
}
