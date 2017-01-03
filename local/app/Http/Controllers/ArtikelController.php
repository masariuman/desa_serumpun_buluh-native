<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Artikel;
use App\Kategori;
use App\Desa;
use App\Komentar;
use App\Suara;
use Storage;
use Validator;
use Session;

class ArtikelController extends Controller
{
   
    //view
    public function index() {
    	$kategori_count = Artikel::all();
    	$kategori_list = Artikel::orderBy('id', 'desc')->paginate(5);
    	$jumlah_kategori = $kategori_count->count();
    	$jumlah_kategori2 = $kategori_list->count();
    	return view('admin.artikel.index', compact('kategori_list', 'jumlah_kategori', 'jumlah_kategori2'));
    }

	 //create
    public function create() {
    	$list_kategori = Kategori::lists('nama_kategori', 'id');
    	return view('admin.artikel.create', compact('list_kategori'));
    }

    //store
    public function store(Request $request) {
        $input = $request->all();
    	// Artikel::create($request->all());
         $validator = Validator::make($input, [
            'judul_artikel' => 'required',
            'id_kategori' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|max:1000|mimes:jpeg,jpg,bmp,png',
            'nama_gambar' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/artikel/tambah_baru')->withInput()->withErrors($validator);
        }

        if($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $ext    = $gambar->getClientOriginalExtension();

            if ($request->file('gambar')->isValid()) {
                $gambar_name    = date('YmdHis').".$ext";
                $upload_path    = 'fotoupload';
                $request->file('gambar')->move($upload_path, $gambar_name);
                $input['gambar'] = $gambar_name;
            } 
        }

       
        Session::flash('flash_message', 'Artikel baru berhasil disimpan.');
        $artikel = Artikel::Create($input);
    	return redirect('admin/artikel');
    }

    //edit
    public function edit($id) {
    	$list_kategori = Kategori::lists('nama_kategori', 'id');
        $kategori = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('kategori', 'list_kategori'));
    }

    //update
    public function update($id, Request $request) {
        $input = $request->all();

        $artikel = Artikel::findOrFail($id);

        $validator = Validator::make($input, [
            'judul_artikel' => 'required',
            'id_kategori' => 'required',
            'isi' => 'required',
            'gambar' => 'image|max:1000|mimes:jpeg,jpg,bmp,png',
            'nama_gambar' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/artikel/'.$id.'/edit')->withInput()->withErrors($validator);
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
        Session::flash('flash_message', 'Artikel berhasil diubah.');
        $artikel->update($input);
        return redirect('admin/artikel/');
    }

    //destroy
    public function destroy($id) {
        $kategori = Artikel::findOrFail($id);
        $exist = Storage::disk('gambar')->exists($kategori->gambar);
            if(isset($kategori->gambar) && $exist) {
                $delete = Storage::disk('gambar')->delete($kategori->gambar);
            }
        $kategori->delete();
        return redirect('admin/artikel');
    }

    //show
    public function show($id) {
        // $status = new \App\Komentar;
        // $status = Komentar::where('id_artikel',$id)->get();
        // $status->status = 'sudah dibaca';
        // $status->save();

        // $flight = App\Komentar::find(1);
        // $flight->name = 'New Flight Name';
        // $flight->save();

        $kategori = Artikel::findOrFail($id);
        $desa = Desa::all();

        $halaman = 'berita';
        // $kategori_count = Artikel::all();
        $jumlah_kategori = $kategori->komentar->count();
        $komentar = $kategori->komentar->sortByDesc('id');
        $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.isi_artikel', compact('kategori', 'desa', 'jumlah_kategori','komentar','id_kategori','halaman'));
    } 


     //show komentar on artikel
    public function show_komentar_artikel($artikel, $kategori) {
        // $status = new \App\Komentar;
        $status = Komentar::where('id',$kategori)->first();
        $status->status = 'sudah dibaca';
        $status->save();

        // $flight = App\Komentar::find(1);
        // $flight->name = 'New Flight Name';
        // $flight->save();

        $kategori = Artikel::findOrFail($artikel);
        $desa = Desa::all();
        // $kategori_count = Artikel::all();
        $jumlah_kategori = $kategori->komentar->count();
        $komentar = $kategori->komentar->sortByDesc('id');
        $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.isi_artikel', compact('kategori', 'desa', 'jumlah_kategori','komentar','id_kategori'));
    } 


    //show admin index/dashboard
    public function admin() {
        $artikel = Artikel::all();
        $total_artikel = $artikel->count();

        $kategori = Kategori::all();
        $total_kategori = $kategori->count();

        $komentar_list = Komentar::orderBy('status', 'asc')->orderBy('id', 'desc')->paginate(5);
        $jumlah_komentar_belum_dibaca = Komentar::where('status','belum dibaca')->count();

        $komentar = Komentar::all();
        $total_komentar = $komentar->count();

        $suara = Suara::all();
        $total_suara = $suara->count();
        $suara_list = Suara::orderBy('status', 'asc')->orderBy('id', 'desc')->paginate(5);
         $jumlah_suara_belum_dibaca = Suara::where('status','belum dibaca')->count();

        return view('admin.index',compact('total_artikel','total_kategori','total_komentar','komentar_list','jumlah_komentar_belum_dibaca','suara_list','total_suara','jumlah_suara_belum_dibaca'));
    }

    //search
    public function search(Request $request) {
        $search = $request->search;
        $data = 'Artikel';
        if ($search!='') {
            $kategori_list = Artikel::where('judul_artikel','LIKE',"%$search%")->orWhere('isi','LIKE',"%$search%")->orderBy('id', 'desc')->paginate(5);
            $jumlah_kategori2 = $kategori_list->count();

            $kategori_count = Artikel::all();
            $jumlah_kategori = $kategori_count->count();
                // $query->where(function ($query) use ($keyword) {
                // $query->where("name", "LIKE","%$keyword%")
                    // ->orWhere("email", "LIKE", "%$keyword%")
                    // ->orWhere("blood_group", "LIKE", "%$keyword%")
                    // ->orWhere("phone", "LIKE", "%$keyword%");
            // });
        }
        else {
            $kategori_list = Artikel::orderBy('id', 'desc')->paginate(5);
            $jumlah_kategori2 = $kategori_list->count();
            $kategori_count = Artikel::all();
            $jumlah_kategori = $kategori_count->count();
        }
        return view('admin.artikel.search', compact('query','jumlah_kategori2','kategori_list','jumlah_kategori','search','data'));
    }
}