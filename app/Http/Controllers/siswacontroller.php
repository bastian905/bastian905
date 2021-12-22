<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

use function Ramsey\Uuid\v3;

class siswacontroller extends Controller
{
    
    public function index()
    {
        $siswas = siswa::all();
        return view('siswa.index' ,compact ('siswas'));
    }

    
    public function create()
    {
        return view('siswa.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:siswas|max:150',
           
          ]);

          $input = $request->all();

          $siswas = siswa::create($input);
         
          return back()->with('success',' data baru berhasil dibuat.');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa/edit', [
             'siswa' => $siswa
           ]);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:siswas|max:150',
            
         ]);
               
         $siswas = siswa::find($id)->update($request->all()); 
                
         return back()->with('success',' Data telah diperbaharui!');
    }

    
    public function destroy($id)
    {
        $siswas = siswa::find($id);
        $siswas ->delete();

        return back() ->with('succes' , 'Penghapusan telah berhasil');
    }
}
