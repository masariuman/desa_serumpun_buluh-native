<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kontak;
use Storage;
use Validator;
use Session;

class KontakController extends Controller
{
    //kontak view
	public function kontak() {
    	$kontak = Kontak::all()->where('id', 1);
    	return view('admin.kontak.index', compact('kontak'));
    }

    
    //edit
    public function edit($id) {
        $kategori = Kontak::findOrFail($id);
        return view('admin.kontak.edit_kontak', compact('kategori'));
    }

    //update
    public function update($id, Request $request) {
        $kategori = Kontak::findOrFail($id);
        $input = $request->all();
        // return redirect('admin/kontak');
        $artikel = Kontak::findOrFail($id);

        $validator = Validator::make($input, [
            'gambar' => 'image|max:1000|mimes:jpeg,jpg,bmp,png',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect('admin/kontak/'.$id.'/edit')->withInput()->withErrors($validator);
        }

        if($request->hasFile('gambar')) {
            //hapus foto lama di folder
            $exist = Storage::disk('gambar')->exists($artikel->gambar);
            if(isset($artikel->gambar) && $exist) {
                $delete = Storage::disk('gambar')->delete($artikel->gambar);
            }

            //gambar baru
            $gambar = $request->file('gambar');
            $ext    = $gambar->getClientOriginalExtension();

            if ($request->file('gambar')->isValid()) {
                $gambar_name    = date('YmdHis').".$ext";
                $upload_path    = 'fotoupload';
                $request->file('gambar')->move($upload_path, $gambar_name);
                $input['gambar'] = $gambar_name;
            } 
        }
        Session::flash('flash_message', 'Kontak berhasil diubah.');
        $kategori->update($input);
        // $kategori->update($input);
        return redirect('admin/kontak');
        // return redirect('admin/geografis');
    }
}
