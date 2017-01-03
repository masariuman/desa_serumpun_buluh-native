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


                     {!! Form::open(['url' => 'admin/artikel/search_kategori', 'files' => true, 'style' => 'display:inherit;']) !!}
                     {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Cari Kategori...', 'style' => 'border-radius:25px 0px 0px 25px;']) !!}<br>
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
                    <a href="{{ url('admin/artikel/tambah_kategori_baru') }}">
                      <button type="button" class="btn btn-primary"><i class="fa fa-pencil">  Kategori Baru</i></button>
                    </a>
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
                          <th style="width: 20%">Kategori</th>
                          <th style="width: 20%">Deskripsi</th>
                          <th style="width: 25%">Pengaturan</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $x=1; ?>
                       @foreach($kategori_list as $kategori)
                        <tr>
                          <td><?php echo $x; $x++; ?></td>
                          <td>
                            <a>{{ $kategori->nama_kategori }}</a>
                            <br />
                            <small>Dibuat pada {{ $kategori->created_at }}</small>
                          </td>
                          <td>
                            {{ $kategori->deskripsi_kategori }}
                          </td>
                            
                          

                          <td>
                            <!-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a> -->
                            <a href="{{ url('admin/artikel/kategori/'.$kategori->id.'/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                           <button class="delete-kategori btn btn-danger btn-xs" data-photo-id="{{$kategori->id}}">Hapus</button>
                          </td>
                        </tr>
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