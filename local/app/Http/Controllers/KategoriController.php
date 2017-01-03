<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kategori;
use App\Artikel;
use App\Desa;
use Validator;
use Session;

class KategoriController extends Controller
{
    //view
    public function index() {
    	$kategori_count = Kategori::all();
    	$kategori_list = Kategori::orderBy('id', 'desc')->paginate(5);
    	$jumlah_kategori = $kategori_count->count();
    	$jumlah_kategori2 = $kategori_list->count();
    	return view('admin.artikel.kategori', compact('kategori_list', 'jumlah_kategori', 'jumlah_kategori2'));
    }

    //create
    public function create() {
    	return view('admin.artikel.create_category');
    }

    //store
    public function store(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'nama_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/artikel/tambah_kategori_baru')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Kategori baru berhasil disimpan.');
    	Kategori::create($request->all());
    	return redirect('admin/artikel/kategori');
    }

    //edit
    public function edit($id) {
        $kategori = Kategori::findOrFail($id);
        return view('admin.artikel.edit_category', compact('kategori'));
    }

    //update
    public function update($id, Request $request) {
        $kategori = Kategori::findOrFail($id);
        $input = $request->all();

        $validator = Validator::make($input, [
            'nama_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/artikel/kategori/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Kategori berhasil diubah.');
        $kategori->update($request->all());
        return redirect('admin/artikel/kategori');
    }

    //destroy
    public function destroy($id) {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect('admin/artikel/kategori');
    }

    //show
    public function show($id_kategori) {
        // $kategori = Artikel::findOrFail($id_kategori);
        // $halaman = $id_kategori;

        $kategori_id = Kategori::all()->where('nama_kategori',$id_kategori)->first();
        $desa = Artikel::where('id_kategori',$kategori_id->id)->paginate(5);
        // $kategori_count = Artikel::all()->where('id_kategori',$id_kategori);
        $jumlah_kategori = $desa->count();
        $desaa = Desa::all();

        $halaman = 'berita';
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.filter', compact('desa','jumlah_kategori','halaman','desaa','kategori_id'));
    }

    //search
    public function search(Request $request) {
        $search = $request->search;
        $data = 'Kategori';
        if ($search!='') {
            $kategori_list = Kategori::where('nama_kategori','LIKE',"%$search%")->orWhere('deskripsi_kategori','LIKE',"%$search%")->paginate(5);
            $jumlah_kategori2 = $kategori_list->count();

            $kategori_count = Kategori::all();
            $jumlah_kategori = $kategori_count->count();
                // $query->where(function ($query) use ($keyword) {
                // $query->where("name", "LIKE","%$keyword%")
                    // ->orWhere("email", "LIKE", "%$keyword%")
                    // ->orWhere("blood_group", "LIKE", "%$keyword%")
                    // ->orWhere("phone", "LIKE", "%$keyword%");
            // });
        }
        else {
            $kategori_list = Kategori::orderBy('id', 'desc')->paginate(5);
            $jumlah_kategori2 = $kategori_list->count();
            $kategori_count = Kategori::all();
            $jumlah_kategori = $kategori_count->count();
        }
        return view('admin.artikel.search_kategori', compact('query','jumlah_kategori2','kategori_list','jumlah_kategori','search','data'));
    }

}
