<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Artikel;
use App\Desa;
use App\Suara;
use App\Kategori;
use App\Organisasi;
use App\Dusun;
use App\Rw;
use App\Rt;
use Storage;
use App\event;
use App\Kontak;
use Session;

class ClienthomeController extends Controller
{
    //view
    public function index() {
    	$halaman = 'home';
    	$kategori_count = Artikel::all();
    	$kategori_list = Artikel::orderBy('id', 'desc')->paginate(5);
    	$jumlah_kategori = $kategori_count->count();
    	$jumlah_kategori2 = $kategori_list->count();

    	$desa = Desa::all();
    	$nama_desa = Desa::all();

    	$first = Artikel::orderBy('id', 'desc')->first();
    	$second = Artikel::orderBy('id', 'desc')->skip(1)->first();
    	$third = Artikel::orderBy('id', 'desc')->skip(2)->first();
    	return view('client.home', compact('kategori_list', 'jumlah_kategori', 'jumlah_kategori2', 'desa', 'first', 'second', 'third','halaman','nama_desa'));
    	    // return view('client.home');
    }


    //view kontak
    public function kontak() {
    	$kategori_count = Suara::all();

    	$kategori_list = Suara::orderBy('id', 'desc')->paginate(10);
    	$jumlah_kategori = $kategori_count->count();
    	$jumlah_kategori2 = $kategori_list->count();

        $halaman = "kontak";
        $desa = Desa::all();
    	$nama_desa = Desa::all();

        $kontak = Kontak::all();

        // $suara_save = Suara::where('status', 'belum dibaca')->update(['status' => 'sudah dibaca']);

    	return view('client.kontak', compact('kategori_list', 'jumlah_kategori', 'jumlah_kategori2', 'desa','nama_desa','halaman','kontak'));
    	    // return view('client.home');
    }

    
    //pendidikan
    public function pendidikan() {
        // $kategori = Artikel::findOrFail($id_kategori);
        $halaman = 'Pendidikan';
        $kategori_id = Kategori::all()->where('nama_kategori','Pendidikan')->first();
        $desa = Artikel::where('id_kategori',$kategori_id->id)->paginate(5);
        // $kategori_count = Artikel::all()->where('id_kategori',$id_kategori);
        $jumlah_kategori = $desa->count();
        $desaa = Desa::all();
        $nama_desa = Desa::all();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.filter', compact('desa','jumlah_kategori','halaman','desaa','nama_desa'));
    }

    //kesehatan
    public function kesehatan() {
        // $kategori = Artikel::findOrFail($id_kategori);
        $halaman = 'Kesehatan';
        $kategori_id = Kategori::all()->where('nama_kategori','Kesehatan')->first();
        $desa = Artikel::where('id_kategori',$kategori_id->id)->paginate(5);
        // $kategori_count = Artikel::all()->where('id_kategori',$id_kategori);
        $jumlah_kategori = $desa->count();
        $desaa = Desa::all();
        $nama_desa = Desa::all();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.filter', compact('desa','jumlah_kategori','halaman','desaa','nama_desa'));
    }

    //Sejarah
     public function sejarah() {
        $kategori = Desa::all()->where('id',1);
        $halaman = 'desa';
        $nama_desa = Desa::all();
        // $desa = Desa::all();
        // $kategori_count = Artikel::all();
        // $jumlah_kategori = $kategori->komentar->count();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.sejarah', compact('kategori','halaman','nama_desa'));
    }

    //geografis
     public function geografis() {
        $kategori = Desa::all()->where('id',1);
        $halaman = 'desa';
        $nama_desa = Desa::all();
        // $desa = Desa::all();
        // $kategori_count = Artikel::all();
        // $jumlah_kategori = $kategori->komentar->count();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.geografis', compact('kategori','halaman','nama_desa'));
    }

    //ekonomi
     public function ekonomi() {
        $kategori = Desa::all()->where('id',1);
        $halaman = 'desa';
        $nama_desa = Desa::all();
        // $desa = Desa::all();
        // $kategori_count = Artikel::all();
        // $jumlah_kategori = $kategori->komentar->count();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.ekonomi', compact('kategori','halaman','nama_desa'));
    }

    //prasarana
     public function prasarana() {
        $kategori = Desa::all()->where('id',1);
        $halaman = 'desa';
        $nama_desa = Desa::all();
        // $desa = Desa::all();
        // $kategori_count = Artikel::all();
        // $jumlah_kategori = $kategori->komentar->count();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.prasarana', compact('kategori','halaman','nama_desa'));
    }

    //pemerintahan
     public function pemerintahan() {
        $kategori = Desa::all()->where('id',1);
        $halaman = 'desa';
        $nama_desa = Desa::all();
        // $desa = Desa::all();
        // $kategori_count = Artikel::all();
        // $jumlah_kategori = $kategori->komentar->count();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.pemerintahan', compact('kategori','halaman','nama_desa'));
    }

    //Struktur
     public function struktur() {
        $organisasi = Organisasi::all();
        $dusun = Dusun::all();
        $rw = Rw::all();
        $rt = Rt::all();

        $halaman = 'desa';
        $nama_desa = Desa::all();
        // $desa = Desa::all();
        // $kategori_count = Artikel::all();
        // $jumlah_kategori = $kategori->komentar->count();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.struktur', compact('kategori','halaman','nama_desa','organisasi','dusun','rw','rt'));
    }

    //galeri
     public function galeri() {
        $organisasi = Organisasi::all();
        $dusun = Dusun::all();
        $rw = Rw::all();
        $rt = Rt::all();

        $galeri = Artikel::orderBy('id', 'desc')->paginate(6);

        $halaman = 'galeri';
        $nama_desa = Desa::all();
        // $desa = Desa::all();
        // $kategori_count = Artikel::all();
        // $jumlah_kategori = $kategori->komentar->count();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.galeri', compact('kategori','halaman','nama_desa','organisasi','dusun','rw','rt', 'galeri'));
    }

    //acara
     public function acara() {
        $organisasi = Organisasi::all();
        $dusun = Dusun::all();
        $rw = Rw::all();
        $rt = Rt::all();

        $acara = Event::all();

        $halaman = 'acara';
        $nama_desa = Desa::all();
        // $desa = Desa::all();
        // $kategori_count = Artikel::all();
        // $jumlah_kategori = $kategori->komentar->count();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.acara', compact('kategori','halaman','nama_desa','organisasi','dusun','rw','rt', 'acara'));
    }

    //visi & misi
     public function visi_misi() {

        $desa = Desa::all();

        $halaman = 'desa';
        $nama_desa = Desa::all();
        // $desa = Desa::all();
        // $kategori_count = Artikel::all();
        // $jumlah_kategori = $kategori->komentar->count();
        // $komentar = $kategori->komentar->sortByDesc('id');
        // $id_kategori = $kategori->kategori;
        // $Komentar = Komentar::orderBy('id', 'desc');
        return view('client.visi', compact('halaman','nama_desa','desa'));
    }


    //search
    public function search(Request $request) {
        $search = $request->search;
        $data = 'Event';
        if ($search!='') {
            $kategori_list = Artikel::where('judul_artikel','LIKE',"%$search%")->orWhere('isi','LIKE',"%$search%")->orWhere('nama_gambar','LIKE',"%$search%")->paginate(5);
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

        $desa = Desa::all();
        $nama_desa = Desa::all();

        return view('client.search', compact('jumlah_kategori2','kategori_list','jumlah_kategori','search','desa','nama_desa'));
    }

}