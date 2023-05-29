<?php

namespace App\Http\Controllers;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class seriesController extends Controller
{
    public function Index(Request $request){
        $series = Serie::all();
        //return view('listar-series', ['series' => $series]); -> Forma menos compacta
        return view('series.index', compact('series'));
    }

    public function Create(){
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = new Serie();
        $serie->nome = $request->input('nome');
        $serie->save();

        return redirect('/series');
    }
}
