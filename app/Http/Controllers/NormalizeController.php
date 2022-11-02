<?php

namespace App\Http\Controllers;

use App\Models\Data1;
use App\Models\Data2;
use App\Models\Weight;
use Illuminate\Http\Request;

class NormalizeController extends Controller
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
        
        $data = Data1::get();
        foreach ($data as $dat) {
            $dta['name'] = $dat->name;
            
            $dt1 = $dat->c1;
            $dtmin1 = $data->min('c1');
            $dta['c1'] = (double) $dtmin1 / (double) $dt1;

            $dt2 = $dat->c2;
            $dtmax2 = $data->max('c2');
            $dta['c2'] = (double) $dt2 / (double) $dtmax2;

            $dt3 = $dat->c3;
            $dtmax3 = $data->max('c3');
            $dta['c3'] = (double) $dt3 / (double) $dtmax3;

            $dt4 = $dat->c4;
            $dtmax4 = $data->max('c4');
            $dta['c4'] = (double) $dt4 / (double) $dtmax4;

            $dt5 = $dat->c5;
            $dtmax5 = $data->max('c5');
            $dta['c5'] = (double) $dt5 / (double) $dtmax5;

            Data2::insert($dta);
        }
        
        return view('normalize',[
             "title" => "SAW Cumulation",
             'data1s' => Data2::get()
         ]);

       
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
     * @param  \App\Models\Data2  $data2
     * @return \Illuminate\Http\Response
     */
    public function show(Data2 $data2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data2  $data2
     * @return \Illuminate\Http\Response
     */
    public function edit(Data2 $data2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data2  $data2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data2 $data2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data2  $data2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data2 $data2)
    {
        //
    }
}
