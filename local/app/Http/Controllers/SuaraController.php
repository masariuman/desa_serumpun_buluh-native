<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Suara;
use App\Desa;
use Validator;
use Session;

class SuaraController extends Controller
{
	//view
	public function index() {
    	$kategori_list = Suara::orderBy('status', 'asc')->orderBy('id', 'desc')->paginate(10);

        $kategori_count = Suara::all();
        $jumlah_kategori = $kategori_count->count();
        $jumlah_kategori2 = $kategori_list->count();


    	return view('admin.kontak.suara', compact('kategori_list','jumlah_kategori','jumlah_kategori2'));
    }

    //view kontak
    public function kontak_show() {
        $kategori_count = Suara::all();

        $kategori_list = Suara::orderBy('id', 'desc')->paginate(10);
        $jumlah_kategori = $kategori_count->count();
        $jumlah_kategori2 = $kategori_list->count();

        $desa = Desa::all();
        $nama_desa = Desa::all();

        $suara_save = Suara::where('status', 'belum dibaca')->update(['status' => 'sudah dibaca']);

        return redirect('kontak');
        // return view('client.kontak', compact('kategori_list', 'jumlah_kategori', 'jumlah_kategori2', 'desa','nama_desa'));
            // return view('client.home');
    }


    //destroy
    public function destroy($id) {
        $kategori = Suara::findOrFail($id);
        $kategori->delete();
        return redirect('admin/suara_warga');
    }

    //store
    public function store(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'nama_warga' => 'required',
            'isi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('kontak')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Suara anda berhasil ditambahkan.');
        Suara::create($request->all());
        return redirect('kontak');
    }

    //search
    public function search(Request $request) {
        $search = $request->search;
        $data = 'Suara Warga';
        if ($search!='') {
            $kategori_list = Suara::where('nama_warga','LIKE',"%$search%")->orWhere('isi','LIKE',"%$search%")->orderBy('status', 'asc')->orderBy('id', 'desc')->paginate(10);
            $jumlah_kategori2 = $kategori_list->count();

            $kategori_count = Suara::all();
            $jumlah_kategori = $kategori_count->count();
                // $query->where(function ($query) use ($keyword) {
                // $query->where("name", "LIKE","%$keyword%")
                    // ->orWhere("email", "LIKE", "%$keyword%")
                    // ->orWhere("blood_group", "LIKE", "%$keyword%")
                    // ->orWhere("phone", "LIKE", "%$keyword%");
            // });
        }
        else {
            $kategori_list = Suara::orderBy('status', 'asc')->orderBy('id', 'desc')->paginate(10);
            $jumlah_kategori2 = $kategori_list->count();
            $kategori_count = Suara::all();
            $jumlah_kategori = $kategori_count->count();
        }
        return view('admin.kontak.search', compact('query','jumlah_kategori2','kategori_list','jumlah_kategori','search','data'));
    }
}
