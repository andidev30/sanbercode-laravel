<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data = DB::table('questions')->get();
        // dd($data);
        return view('pertanyaan.index', compact('data'));
    }

    public function show($id)
    {
        $data = DB::table('questions')->where('id', $id)->first();
        return view('pertanyaan.show', compact('data'));
    }

    public function create()
    {
        return view('pertanyaan/create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title'     => 'required',
            'isi'       => 'required'
        ]);

        $query = DB::table('questions')->insert([
            "judul"     => $request->title,
            "isi"       => $request->isi
        ]);

        return redirect('/pertanyaan/create');
    }

    public function edit($id)
    {
        $data = DB::table('questions')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'isi'       => 'required'
        ]);

        $query = DB::table('questions')
                            ->where('id', $id)
                            ->update([
                                'judul' => $request->title,
                                'isi'   => $request->isi
                            ]);
        return redirect('/pertanyaan')->with('success', 'berhasil update');
    }

    public function destroy($id)
    {
        $query = DB::table('questions')->where('id', $id)->delete();

        return redirect('/pertanyaan')->with('success', 'berhasil update');
    }
}
