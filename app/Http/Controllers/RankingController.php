<?php

namespace App\Http\Controllers;

use App\Models\Data1;
use App\Models\Data2;
use App\Models\Weight;
use App\Models\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $datawgh = Weight::where('id', 1)->first();
        $wgh1 = $datawgh->wgh1;
        $wgh2 = $datawgh->wgh2;
        $wgh3 = $datawgh->wgh3;
        $wgh4 = $datawgh->wgh4;
        $wgh5 = $datawgh->wgh5;
        
        $data = Data2::get();
        foreach ($data as $dat) {
            $dta['name'] = $dat->name;
            $dt1 = $dat->c1;
            $dt2 = $dat->c2;
            $dt3 = $dat->c3;
            $dt4 = $dat->c4;
            $dt5 = $dat->c5;

            $dat1 = (double) $dt1 * (double) $wgh1;
            $dat2 = (double) $dt2 * (double) $wgh2;
            $dat3 = (double) $dt3 * (double) $wgh3;
            $dat4 = (double) $dt4 * (double) $wgh4;
            $dat5 = (double) $dt5 * (double) $wgh5;

            $dta['value'] = $dat1 + $dat2 + $dat3 + $dat4 + $dat5;
            Ranking::insert($dta);
        }

        $dtranking = Ranking::orderBy('value', 'desc')->get();
        foreach ($dtranking as $dtrkg) {
            $iddtrkg = $dtrkg->id;
            Ranking::where('id', $iddtrkg)->delete();
        }
        
        return view('ranking',[
            "title" => "SAW Ranking",
            'data1s' => $dtranking
        ]);
    }
}



