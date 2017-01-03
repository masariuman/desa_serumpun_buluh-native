<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Desa;
use App\Organisasi;
use App\Dusun;
use App\Rw;
use App\Rt;
use App\User;
use Hash;
use Storage;
use Validator;
use Session;

class DesaController extends Controller
{
	//sejarah
	public function sejarah() {
    	$desa = Desa::all();
    	return view('admin.desa.sejarah', compact('desa'));
    }
    //edit Sejarah
    public function edit_sejarah($id) {
        $kategori = Desa::findOrFail($id);
        return view('admin.desa.edit_sejarah', compact('kategori'));
    }
    //update Sejarah
    public function update_sejarah($id, Request $request) {
        $kategori = Desa::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'sejarah_desa' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/sejarah/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Sejarah berhasil diubah.');
        $kategori->update($request->all());
        return redirect('admin/sejarah');
    }



    //visi misi
	public function visi_misi() {
    	$desa = Desa::all();
    	return view('admin.desa.visimisi', compact('desa'));
    }
    //edit visi misi
    public function edit_visi_misi($id) {
        $kategori = Desa::findOrFail($id);
        return view('admin.desa.edit_visimisi', compact('kategori'));
    }
    //update visi misi
    public function update_visi_misi($id, Request $request) {
        $kategori = Desa::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'visi_misi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/visi&misi/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Visi & Misi berhasil diubah.');
        $kategori->update($request->all());
        return redirect('admin/visi&misi');
    }

    //organisasi
    public function struktur() {
        $desa = Desa::all();
        $foto_struktur = desa::findOrFail(1);
        $organisasi = Organisasi::all();
        $dusun = Dusun::all();
        $rw = Rw::all();
        $rt = Rt::all();

        return view('admin.desa.struktur',compact('desa','organisasi','dusun','rw','rt','foto_struktur'));
    }
    //edit organisasi
    public function edit_struktur_organisasi($id) {
        $kategori = Organisasi::findOrFail($id);
        return view('admin.desa.edit_struktur_organisasi', compact('kategori'));
    }
    //update organisasi
    public function update_struktur_organisasi($id, Request $request) {
        $input = $request->all();
        $kategori = Organisasi::findOrFail($id);

        $input = $request->all();
        $validator = Validator::make($input, [
            'foto' => 'image|max:1000|mimes:jpeg,jpg,bmp,png',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/struktur_organisasi/'.$id.'/edit')->withInput()->withErrors($validator);
        }

        

        if($request->hasFile('foto')) {
            //hapus foto lama di folder
            $exist = Storage::disk('foto')->exists($kategori->foto);
            if(isset($kategori->foto) && $exist) {
                $delete = Storage::disk('foto')->delete($kategori->foto);
            }

            //gambar baru
            $foto = $request->file('foto');
            $ext    = $foto->getClientOriginalExtension();

            if ($request->file('foto')->isValid()) {
                $foto_name    = date('YmdHis').".$ext";
                $upload_path    = 'fotoupload';
                $request->file('foto')->move($upload_path, $foto_name);
                $input['foto'] = $foto_name;
            } 
        }
        Session::flash('flash_message', 'Data '.$input['jabatan'].' berhasil diubah.');
        $kategori->update($input);
        return redirect('admin/struktur');
    }

     //update foto struktur organisasi
    public function update_foto_organisasi($id, Request $request) {
        $input = $request->all();
        $kategori = Desa::findOrFail($id);
        $artikel = Desa::where('id',1)->first();;
        $input = $request->all();
        $validator = Validator::make($input, [
            'gambar' => 'required|image|max:1000|mimes:jpeg,jpg,bmp,png',
        ]);

        if ($validator->fails()) {
            return redirect('admin/struktur')->withInput()->withErrors($validator);
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
        Session::flash('flash_message', 'Gambar struktur berhasil diubah.');
        $kategori->update($input);
        return redirect('admin/struktur');
    }

    //destroy organisasi
    public function destroy_organisasi($id) {
        $kategori = Organisasi::findOrFail($id);
        $kategori->delete();
        return redirect('admin/struktur');
    }

    //create dusun
    public function create_dusun() {
        return view('admin.desa.new_dusun');
    }

    //store dusun
    public function store_dusun(Request $request) {
        $input = $request->all();
        $input = $request->all();
        $validator = Validator::make($input, [
            'nama_dusun' => 'required',
            'nama_kepala' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/dusun/tambah_baru')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Dusun baru berhasil ditambahkan.');
        $artikel = Dusun::Create($input);
        return redirect('admin/struktur');
    }

    //edit dusun
    public function edit_dusun($id) {
        $kategori = Dusun::findOrFail($id);
        return view('admin.desa.edit_dusun', compact('kategori'));
    }

    //update dusun
    public function update_dusun($id, Request $request) {
        $input = $request->all();
        $artikel =  Dusun::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'nama_dusun' => 'required',
            'nama_kepala' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/dusun/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Data dusun '.$input['nama_dusun'].' berhasil diubah.');
        $artikel->update($input);
        return redirect('admin/struktur');
    }

    //destroy dusun
    public function destroy_dusun($id) {
        $kategori = Dusun::findOrFail($id);
        $kategori->delete();
        return redirect('admin/struktur');
    }




    //create rw
    public function create_rw() {
        $list_dusun = Dusun::lists('nama_dusun', 'id');
        return view('admin.desa.new_rw',compact('list_dusun'));
    }

    //store rw
    public function store_rw(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'id_dusun' => 'required',
            'nama_rw' => 'required',
            'nama_kepala' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/rw/tambah_baru')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'RW baru berhasil ditambahkan.');
        $artikel = Rw::Create($input);
        return redirect('admin/struktur');
    }

    //edit rw
    public function edit_rw($id) {
        $kategori = Rw::findOrFail($id);
        $list_rw = Dusun::lists('nama_dusun', 'id');
        return view('admin.desa.edit_rw', compact('kategori','list_rw'));
    }

    //update rw
    public function update_rw($id, Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'id_dusun' => 'required',
            'nama_rw' => 'required',
            'nama_kepala' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/rw/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        $artikel =  Rw::findOrFail($id);
        $artikel->update($input);
        Session::flash('flash_message', 'Data '.$input['nama_rw'].' berhasil diubah.');
        return redirect('admin/struktur');
    }

    //destroy rw
    public function destroy_rw($id) {
        $kategori = Rw::findOrFail($id);
        $kategori->delete();
        return redirect('admin/struktur');
    }




    //create rt
    public function create_rt() {
        $list_rw = Rw::lists('nama_rw', 'id');
        return view('admin.desa.new_rt',compact('list_rw'));
    }

    //store rt
    public function store_rt(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'id_rw' => 'required',
            'nama_rt' => 'required',
            'nama_kepala' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/rt/tambah_baru')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'RT baru berhasil ditambahkan.');
        $artikel = Rt::Create($input);
        return redirect('admin/struktur');
    }

    //edit rt
    public function edit_rt($id) {
        $kategori = Rt::findOrFail($id);
        $list_rw = Rw::lists('nama_rw', 'id');
        return view('admin.desa.edit_rt', compact('kategori','list_rw'));
    }

    //update rt
    public function update_rt($id, Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'id_rw' => 'required',
            'nama_rt' => 'required',
            'nama_kepala' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/rt/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        $artikel =  Rt::findOrFail($id);
        $artikel->update($input);
        Session::flash('flash_message', 'Data '.$input['nama_rt'].' berhasil diubah.');
        return redirect('admin/struktur');
    }

    //destroy rt
    public function destroy_rt($id) {
        $kategori = Rt::findOrFail($id);
        $kategori->delete();
        return redirect('admin/struktur');
    }





    //geografis
    public function geografis() {
        $desa = Desa::all();
        return view('admin.desa.geografis', compact('desa'));
    }
    //edit geografis
    public function edit_geografis($id) {
        $kategori = Desa::findOrFail($id);
        return view('admin.desa.edit_geografis', compact('kategori'));
    }
    //update geografis
    public function update_geografis($id, Request $request) {
        $input = $request->all();
        $kategori = Desa::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'peta' => 'image|max:1000|mimes:jpeg,jpg,bmp,png',
            'geografis' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/geografis/'.$id.'/edit')->withInput()->withErrors($validator);
        }

        if($request->hasFile('peta')) {
            //hapus foto lama di folder
            $exist = Storage::disk('peta')->exists($kategori->peta);
            if(isset($kategori->peta) && $exist) {
                $delete = Storage::disk('peta')->delete($kategori->peta);
            }

            //gambar baru
            $peta = $request->file('peta');
            $ext    = $peta->getClientOriginalExtension();

            if ($request->file('peta')->isValid()) {
                $peta_name    = date('YmdHis').".$ext";
                $upload_path    = 'fotoupload';
                $request->file('peta')->move($upload_path, $peta_name);
                $input['peta'] = $peta_name;
            } 
        }
        Session::flash('flash_message', 'Kondisi Geografis berhasil diubah.');
        $kategori->update($input);
        return redirect('admin/geografis');
    }

    //ekonomi
    public function ekonomi() {
        $desa = Desa::all();
        return view('admin.desa.ekonomi', compact('desa'));
    }
    //edit ekonomi
    public function edit_ekonomi($id) {
        $kategori = Desa::findOrFail($id);
        return view('admin.desa.edit_ekonomi', compact('kategori'));
    }
    //update ekonomi
    public function update_ekonomi($id, Request $request) {
        $kategori = Desa::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'ekonomi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/ekonomi/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Keadaan Ekonomi berhasil diubah.');
        $kategori->update($request->all());
        return redirect('admin/ekonomi');
    }

    //prasarana
    public function prasarana() {
        $desa = Desa::all();
        return view('admin.desa.prasarana', compact('desa'));
    }
    //edit prasarana
    public function edit_prasarana($id) {
        $kategori = Desa::findOrFail($id);
        return view('admin.desa.edit_prasarana', compact('kategori'));
    }
    //update prasarana
    public function update_prasarana($id, Request $request) {
        $kategori = Desa::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'prasarana' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/prasarana/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Prasarana dan Sarana berhasil diubah.');
        $kategori->update($request->all());
        return redirect('admin/prasarana');
    }

    //pemerintahan
    public function pemerintahan() {
        $desa = Desa::all();
        return view('admin.desa.pemerintahan', compact('desa'));
    }
    //edit pemerintahan
    public function edit_pemerintahan($id) {
        $kategori = Desa::findOrFail($id);
        return view('admin.desa.edit_pemerintahan', compact('kategori'));
    }
    //update pemerintahan
    public function update_pemerintahan($id, Request $request) {
        $kategori = Desa::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'pemerintahan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/pemerintahan/'.$kategori->id.'/edit')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Pemerintahan Umum berhasil diubah.');
        $kategori->update($request->all());
        return redirect('admin/pemerintahan');
    }





    //pengaturan
    public function pengaturan() {
        $desa = Desa::all();
        $login = User::all();
        return view('admin.pengaturan', compact('desa','login'));
    }
    //edit pengaturan
    public function edit_pengaturan($id) {
        $kategori = Desa::findOrFail($id);
        return view('admin.edit_pengaturan', compact('kategori'));
    }
    //update pengaturan
    public function update_pengaturan($id, Request $request) {
        $kategori = Desa::findOrFail($id);
        $input = $request->all();

        $validator = Validator::make($input, [
            'judul_web' => 'required',
            'nama_desa' => 'required',
            'copyright' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/pengaturan/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        Session::flash('flash_message', 'Pengaturan berhasil diubah.');
        $kategori->update($request->all());
        return redirect('admin/pengaturan');
    }

    //edit pengaturan_login
    public function edit_pengaturan_login($id) {
        $kategori = User::findOrFail($id);
        return view('admin.pengaturan_login', compact('kategori'));
    }
    //update pengaturan_login
    public function update_pengaturan_login($id, Request $request) {
        $kategori = User::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/pengaturan_login/'.$id.'/edit')->withInput()->withErrors($validator);
        }

        $pass = $input['password'];
        $passs = Hash::make($pass);
        $input['password'] = $passs;
        Session::flash('flash_message', 'Pengaturan berhasil diubah.');
        $kategori->update($input);
        // $kategori->update($request->all());
        return redirect('admin/pengaturan');
    }


}


 