<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    public function index()
    {
        return view('weight',[
            "title" => "Add Weight",
            'weights' => Weight::get()
        ]);
        
    }

    public function update(Request $request, $id){
        
        $dataid = $request->ids;
        $data['wgh1'] = $request->weight1;
        $data['wgh2'] = $request->weight2;
        $data['wgh3'] = $request->weight3;
        $data['wgh4'] = $request->weight4;
        $data['wgh5'] = $request->weight5;
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = Weight::where('id', $dataid)->update($data);

        if($update){
            return redirect('/weight');
        }else{
            return redirect('/weight');
        }
    }
}
