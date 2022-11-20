<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Santri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Santri::all();
        $total = $users->count();
        $aktif = $users->where('status', 'Aktif')->count();
        $noaktif = $users->where('status', 'Tidak Aktif')->count();
        $putra = $users->where('gender', 'Laki - Laki')->count();
        $putri = $users->where('gender', 'Perempuan')->count();

        $widget = [
            'users' => $users,
            'total' => $total,
            'aktif' => $aktif,
            'noaktif' => $noaktif,
            'putra' => $putra,
            'putri' => $putri,
            //...
        ];

        return view('home', compact('widget'));
    }
}
