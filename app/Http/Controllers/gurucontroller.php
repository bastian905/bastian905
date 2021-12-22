<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;

use function Ramsey\Uuid\v3;

class gurucontroller extends Controller
{
   
    public function index()
    {
        $gurus = guru::all(); 
        
         return view('guru.index', compact('gurus'));
    }

    
     
    public function create()
    {
        return view('guru.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:gurus|max:150',
            'nama_guru' => 'required', 
            'mapel' => 'required'
          ]);

          $input = $request->all();

          $guru = guru::create($input);
         
          return back()->with('success',' data baru berhasil dibuat.');
    }

   
    public function show($id)
    {
        
    }

  
    public function edit($id)
    {
        $guru = guru::findOrFail($id);
        return view('guru.edit', [
             'guru' => $guru
           ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required|unique:gurus|max:150',
            'nama_guru' => 'required', 
            'mapel' => 'required', 
         ]);
               
         $guru = guru::find($id)->update($request->all()); 
                
         return back()->with('success',' Data telah diperbaharui!');
    }

    public function destroy($id)
    {
        $gurus = guru::find($id);

        $gurus ->delete();
     
        return back()->with('success',' Penghapusan berhasil.');
    }
}
