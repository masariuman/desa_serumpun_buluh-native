@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Struktur Organisasi Pemerintah Desa</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    @include('_partial.flash_message')
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                        
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                        
                      </li>
                      <li><a class="close-link"></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    

 
                      @foreach($desa as $desa_list)
                    <div class="product-image" style="margin-left: 1em; margin-right: 1em; text-align: center;">
                        <img class="CSS_LIGHTBOX_SCALED_IMAGE_IMG" src="{{ asset('fotoupload/'.$desa_list->gambar)}}" style="font-family: &#39;&#39;; text-align: center;"></div>


{!! Form::model($desa_list, ['method' => 'PATCH', 'action' => ['DesaController@update_foto_organisasi', $desa_list->id], 'files' => true]) !!}
                      {!! csrf_field() !!}

  {!! Form::hidden('id',$desa_list->id) !!}
{!! Form::label('gambar', 'Ubah Gambar Struktur Organisasi Desa :', ['class' => 'control-label']) !!}
{!! Form::file('gambar') !!}<br>

<div class="form-group">
  {!! Form::submit('Ubah Gambar Struktur', ['class' => 'btn btn-primary form-control','style' => 'width: 17%; font-size:12px;']) !!}
</div>
                  {!! Form::close() !!}

                        @endforeach
                        @if($errors->has('gambar'))
  <span><i><b><font color="red">{{$errors->first('gambar')}}</font></b></i></span><br>
@endif
                        
      <!-- start project list --><br><hr><br>
                  <h2>Daftar Keorganisasian</h2>
                    <!-- start project list -->
                    <table class="table table-striped projects">
                    <thead>
                        <tr>
                          <th style="width: 20%">Foto</th>
                          <th style="width: 27%">Jabatan</th>
                          <th style="width: 1%"></th><th>Nama</th>
                          <th style="width: 25%">Pengaturan</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($organisasi as $organisasi_list)
                      <tr>
                          <td>
                            @if(isset($organisasi_list->foto))
                              <img src="{{asset('fotoupload/'.$organisasi_list->foto)}}" height="130" width="100">
                            @else
                              <img src="{{asset('fotoupload/person_dummy.jpg')}}" height="130" width="100">
                            @endif
                          </td>
                          <td class="org_center">
                            <a>{{$organisasi_list->jabatan}}</a>
                          </td>
                          <td>
                            
                          </td>
                          <td>
                          
                            {{$organisasi_list->nama}}
                          
                          </td>

                          <td>
                            <a href="{{ url('admin/struktur_organisasi/'.$organisasi_list->id.'/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                           
                          </td>
                          
                        </tr>
                        @endforeach
                        
                        
                        
                      </tbody>
                    </table><hr>


                    
                    <!-- Dusun -->
                    <p style="font-size: 20px;"><b><i><u>Dusun Desa</u></i></b></p>
                    <a href="{{ url('admin/dusun/tambah_baru') }}">
                      <button type="button" class="btn btn-primary"><i class="fa fa-pencil"> Tambah Dusun Baru</i></button>
                    </a>
                    <table class="table table-striped projects">
                    <thead>
                        <tr>
                          <th>Nama Dusun</th>
                          <th>Nama Kepala Dusun</th>
                          <th>Pengaturan</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($dusun as $dusun_list)
                      <tr>
                          <td class="org_center">
                            <a>{{$dusun_list->nama_dusun}}</a>
                          </td>
                          <td>
                          
                            {{$dusun_list->nama_kepala}}
                          
                          </td>

                          <td>
                            <a href="{{ url('admin/dusun/'.$dusun_list->id.'/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                           <button class="delete-dusun btn btn-danger btn-xs" data-photo-id="{{$dusun_list->id}}">Delete</button>
                          </td>
                          
                        </tr>
                        @endforeach
                        
                        
                        
                      </tbody>
                    </table>
                    
                    <hr>

                    <!-- RW -->
                    <p style="font-size: 20px;"><b><i><u>RW Desa</u></i></b></p>
                    <a href="{{ url('admin/rw/tambah_baru') }}">
                      <button type="button" class="btn btn-primary"><i class="fa fa-pencil"> Tambah RW Baru</i></button>
                    </a>
                    <table class="table table-striped projects">
                    <thead>
                        <tr>
                          <th>Asal Dusun</th>
                          <th>Nama RW</th>
                          <th>Nama Kepala RW</th>
                          <th>Pengaturan</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($rw as $rw_list)
                      <tr>
                          <td class="org_center">
                            <a>{{$rw_list->dusun->nama_dusun}}</a>
                          </td>
                          <td>
                          
                            {{$rw_list->nama_rw}}
                          
                          </td>
                          <td>
                          
                            {{$rw_list->nama_kepala}}
                          
                          </td>

                          <td>
                            <a href="{{ url('admin/rw/'.$rw_list->id.'/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                           <button class="delete-rw btn btn-danger btn-xs" data-photo-id="{{$rw_list->id}}">Delete</button>
                          </td>
                          
                        </tr>
                        @endforeach
                        
                        
                        
                      </tbody>
                    </table>


                    <hr>

                    
                    <!-- Rt -->
                    <p style="font-size: 20px;"><b><i><u>RT Desa</u></i></b></p>
                    <a href="{{ url('admin/rt/tambah_baru') }}">
                      <button type="button" class="btn btn-primary"><i class="fa fa-pencil"> Tambah RT Baru</i></button>
                    </a>
                    <table class="table table-striped projects">
                    <thead>
                        <tr>
                          <th>Asal RW</th>
                          <th>Nama RT</th>
                          <th>Nama Kepala RT</th>
                          <th>Pengaturan</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($rt as $rt_list)
                      <tr>
                          <td class="org_center">
                            <a>{{$rt_list->rw->nama_rw}}</a>
                          </td>
                          <td>
                          
                            {{$rt_list->nama_rt}}
                          
                          </td>
                          <td>
                          
                            {{$rt_list->nama_kepala}}
                          
                          </td>

                          <td>
                            <a href="{{ url('admin/rt/'.$rt_list->id.'/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                           <button class="delete-rt btn btn-danger btn-xs" data-photo-id="{{$rt_list->id}}">Delete</button>
                          </td>
                          
                        </tr>
                        @endforeach
                        
                        
                        
                      </tbody>
                    </table>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@stop