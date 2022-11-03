<?php

namespace App\Http\Controllers;
use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index(){
        return view('santri', [
            "title" => "santri",
            "data" => Santri::all()
        ]);
    }

    public function show(Santri $data){
        return view('edit', [
            "title" => "edit",
            "data" => $data
        ]);
    }
// ini belom selesai buat add santri
    // public function create(){
    //     return view('add',);

    // }
}
