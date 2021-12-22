<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\kelas;

class kelascontroller extends Controller
{
    
    public function index()
    {
        $kelass = kelas::all();
        return view('kelas.index' , compact('kelass'));
    }

    
    public function create()
    {
        return view('kelas.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:kelas|max:150',
           
          ]);

          $input = $request->except( ['_token'] );

          $kelass = kelas::create($input);
         
          return back()->with('success',' data baru berhasil dibuat.');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kelas = kelas::findOrFail($id);
        return view('kelas.edit', [
             'kelas' => $kelas
           ]);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:kelas|max:150',
            
         ]);
               
         $kelass = kelas::find($id)->update($request->all()); 
                
         return back()->with('success',' Data telah diperbaharui!');
    }

    
    public function destroy($id)
    {
        $kelass = kelas::find($id);
        $kelass ->delete();

        return back() ->with('succes' , 'Penghapusan telah berhasil');
    }
}
