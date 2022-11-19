<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    public function index(){
        $mysantri = Santri::all();
        return view('santri', [
            "title" => "santri",
            "mysantri" => $mysantri
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'gender' => 'required|max:255',
            'alamat' => 'required|max:255',
            'pt' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        Santri::create([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'pt' => $request->pt,
            'jurusan' => $request->jurusan,
            'status' => $request->status,
        ]);

        return redirect('/santri')->with('success', 'Sanri created!');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'gender' => 'required|max:255',
            'alamat' => 'required|max:255',
            'pt' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        $santri = Santri::where('id', $id);

        Santri::where('id', $id)->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'pt' => $request->pt,
            'jurusan' => $request->jurusan,
            'status' => $request->status,
        ]);

        return redirect('/santri')->with('success', 'Santri updated');
    }

    public function destroy($id)
    {
        $santri = Santri::where('id', $id)->delete();

        return redirect('/santri')->with('success', 'Santri deleted');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $santri = Santri::where('nama', 'like', "%".$search."%")->paginate();

        return view('home', [
            'mysantri' => $mysantri
        ]);
    }
}
