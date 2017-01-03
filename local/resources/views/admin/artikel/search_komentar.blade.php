@extends('template')

@section('main')
  
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>{{$data}}</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">


                     {!! Form::open(['url' => 'admin/artikel/search_komentar', 'files' => true, 'style' => 'display:inherit;']) !!}
                     {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Cari Komentar...', 'style' => 'border-radius:25px 0px 0px 25px;']) !!}<br>
                    <!-- <input type="text" class="form-control" placeholder="Cari Artikel..."> -->
                    <span class="input-group-btn">
                      {!! Form::submit('Cari', ['class' => 'btn btn-default', 'style' => 'border-radius:0px 25px 25px 0px;border:1px solid rgba(221,226,232,0.49);border-left:0;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);color:#93A2B2;margin-bottom:0 !important;']) !!}
                      <!-- <button class="btn btn-default" type="button">Cari</button> -->
                    </span>

                  {!! Form::close() !!}

                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    @if(count($kategori_list)>0)

                    <p>Daftar {{$data}}</p>
                      @else
                    <p>Data Tidak Ditemukan</p>
                    @endif

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

                    
                      @if(count($kategori_list)>0)

                    <p>Daftar {{$data}}</p>
                      @else
                    <p>Data Tidak Ditemukan</p>
                    @endif

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 20%">Judul Artikel</th>
                          <th>Nama</th>
                          <th>Isi Komentar</th>
                          <th>Tanggal Komentar</th>
                          <th>Status</th>
                          <th style="width: 25%">Pengaturan</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $x=1; ?>
                       @foreach($kategori_list as $kategori)
                       @if($kategori->status == 'belum dibaca')
                       <tr>
                          <td><font size="2px" color="black"><b><?php echo $x; $x++; ?></b></font></td>
                          <td>
                            <b><a><font size="2px" color="black">{{ $kategori->kategori->judul_artikel }}</font></a></b>
                          </td>
                          <td >
                            <b><a><font size="2px" color="black">{{ $kategori->nama }}</font></a></b>
                          </td>
                          <td>
                            <b><a><font size="2px" color="black">{{ $kategori->isi }}</font></a></b>
                            <!-- <button type="button" class="btn btn-success btn-xs">Aktif</button> -->
                          </td>
                          <td >
                            <b><a><font size="2px" color="black">{{ $kategori->created_at }}</font></a></b>
                          </td>
                          <td>
                            <b><a><font size="2px" color="black">{{ $kategori->status }}</font></a></b>
                            <!-- <button type="button" class="btn btn-success btn-xs">Aktif</button> -->
                          </td>
                          <td>
                            <a href="{{ url('artikel/'.$kategori->id_artikel) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <button class="delete-komentar btn btn-danger btn-xs" data-photo-id="{{$kategori->id}}">Hapus</button>
                          </td>
                        </tr>
                       @else
                       <tr>
                          <td><?php echo $x; $x++; ?></td>
                          <td>
                            <a>{{ $kategori->kategori->judul_artikel }}</a>
                          </td>
                          <td >
                            <a>{{ $kategori->nama }}</a>
                          </td>
                          <td>
                            <a>{{ $kategori->isi }}</a>
                            <!-- <button type="button" class="btn btn-success btn-xs">Aktif</button> -->
                          </td>
                          <td >
                            <a>{{ $kategori->created_at }}</a>
                          </td>
                          <td>
                            <a>{{ $kategori->status }}</a>
                            <!-- <button type="button" class="btn btn-success btn-xs">Aktif</button> -->
                          </td>
                          <td>
                            <a href="{{ url('artikel/komentar/'.$artikel=$kategori->id_artikel.'/'.$kategori->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <button class="delete-komentar btn btn-danger btn-xs" data-photo-id="{{$kategori->id}}">Delete</button>
                          </td>
                        </tr>
                       @endif
                        
                        @endforeach
                      </tbody>
                    </table>
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                          Menampilkan {{ $jumlah_kategori2 }} dari {{ $jumlah_kategori }} data
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <div class="paging">
                          {{ $kategori_list->links() }}
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@stop 