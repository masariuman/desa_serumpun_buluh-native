<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Komentar;
use App\Artikel;
use Validator;
use Session;

class KomentarController extends Controller
{
     //view
    public function index() {
    	$kategori_count = Komentar::all();
    	$kategori_list = Komentar::orderBy('status', 'asc')->orderBy('id', 'desc')->paginate(10);
    	$jumlah_kategori = $kategori_count->count();
    	$jumlah_kategori2 = $kategori_list->count();
    	return view('admin.artikel.komentar', compact('kategori_list', 'jumlah_kategori', 'jumlah_kategori2'));
    }

    //create
    public function create() {
    	$list_kategori = Artikel::lists('judul_artikel', 'id');
    	return view('admin.artikel.create_kometar');
    }

    //store
    public function store(Request $request) {
        $artikelID = $request->id_artikel;

        $input = $request->all();
        $validator = Validator::make($input, [
            'nama' => 'required',
            'isi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('artikel/'.$artikelID)->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Komentar berhasil ditambahkan.');
    	Komentar::create($request->all());
    	return redirect('artikel/'.$artikelID);
    }

    //edit
    public function edit($id) {
    	$list_kategori = Artikel::lists('judul_artikel', 'id');
        $kategori = Komentar::findOrFail($id);
        return view('admin.artikel.edit_komentar', compact('kategori'));
    }

    //update
    public function update($id, Request $request) {
        $kategori = Komentar::findOrFail($id);
        $kategori->update($request->all());
        return redirect('admin/artikel/komentar');
    }

    //destroy
    public function destroy($id) {
        $kategori = Komentar::findOrFail($id);
        $kategori->delete();
        return redirect('admin/artikel/komentar');
    }

    //search
    public function search(Request $request) {
        $search = $request->search;
        $data = 'Komentar';
        if ($search!='') {
            $kategori_list = Komentar::where('nama','LIKE',"%$search%")->orWhere('isi','LIKE',"%$search%")->orderBy('status', 'asc')->orderBy('id', 'desc')->paginate(5);
            $jumlah_kategori2 = $kategori_list->count();

            $kategori_count = Komentar::all();
            $jumlah_kategori = $kategori_count->count();
                // $query->where(function ($query) use ($keyword) {
                // $query->where("name", "LIKE","%$keyword%")
                    // ->orWhere("email", "LIKE", "%$keyword%")
                    // ->orWhere("blood_group", "LIKE", "%$keyword%")
                    // ->orWhere("phone", "LIKE", "%$keyword%");
            // });
        }
        else {
            $kategori_list = Komentar::orderBy('status', 'asc')->orderBy('id', 'desc')->paginate(10);
            $jumlah_kategori2 = $kategori_list->count();
            $kategori_count = Komentar::all();
            $jumlah_kategori = $kategori_count->count();
        }
        return view('admin.artikel.search_komentar', compact('query','jumlah_kategori2','kategori_list','jumlah_kategori','search','data'));
    }
}
