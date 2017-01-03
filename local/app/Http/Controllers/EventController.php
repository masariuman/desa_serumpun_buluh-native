<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event; 
use Validator;                                                          
use Session;

class EventController extends Controller
{
    //view
    public function index() {
    	$kategori_count = Event::all();
    	$kategori_list = Event::orderBy('id', 'desc')->paginate(5);
    	$jumlah_kategori = $kategori_count->count();
    	$jumlah_kategori2 = $kategori_list->count();
    	return view('admin.event', compact('kategori_list', 'jumlah_kategori', 'jumlah_kategori2'));
    }

    //create
    public function create() {
    	return view('admin.create_event');
    }

    //store
    public function store(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'judul_event' => 'required',
            'isi_event' => 'required',
            'tanggal_event' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/tambah_event_baru')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Event/Acara baru berhasil disimpan.');
    	Event::create($request->all());
    	return redirect('admin/event');
    }

    //edit
    public function edit($id) {
        $kategori = Event::findOrFail($id);
        return view('admin.edit_event', compact('kategori'));
    }

    //update
    public function update($id, Request $request) {
        $kategori = Event::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'judul_event' => 'required',
            'isi_event' => 'required',
            'tanggal_event' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/event/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Event/Acara berhasil diubah.');
        $kategori->update($request->all());
        return redirect('admin/event');
    }

    //destroy
    public function destroy($id) {
        $kategori = Event::findOrFail($id);
        $kategori->delete();
        return redirect('admin/event');
    }

    //search
    public function search(Request $request) {
        $search = $request->search;
        $data = 'Event';
        if ($search!='') {
            $kategori_list = Event::where('judul_event','LIKE',"%$search%")->orWhere('isi_event','LIKE',"%$search%")->paginate(5);
            $jumlah_kategori2 = $kategori_list->count();

            $kategori_count = Event::all();
            $jumlah_kategori = $kategori_count->count();
                // $query->where(function ($query) use ($keyword) {
                // $query->where("name", "LIKE","%$keyword%")
                    // ->orWhere("email", "LIKE", "%$keyword%")
                    // ->orWhere("blood_group", "LIKE", "%$keyword%")
                    // ->orWhere("phone", "LIKE", "%$keyword%");
            // });
        }
        else {
            $kategori_list = Event::orderBy('id', 'desc')->paginate(5);
            $jumlah_kategori2 = $kategori_list->count();
            $kategori_count = Event::all();
            $jumlah_kategori = $kategori_count->count();
        }
        return view('admin.search_event', compact('query','jumlah_kategori2','kategori_list','jumlah_kategori','search','data'));
    }
}                                               
