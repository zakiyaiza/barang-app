<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko_model;

class tokoController extends Controller
{
    public function gethome (){
        $results = toko_model::all();
        return view ('toko.index', ["barang" => $results]);
    }
    public function getView ($no){
        $results = toko_model::where('no',$no)->get();
        return view ('toko.viewdetail', ["barang" => $results]);
    }
}
