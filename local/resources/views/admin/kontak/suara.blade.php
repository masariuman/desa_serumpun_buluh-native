@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Suara Warga</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    {!! Form::open(['url' => 'admin/suara_warga/search', 'files' => true, 'style' => 'display:inherit;']) !!}
                     {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Cari Suara...', 'style' => 'border-radius:25px 0px 0px 25px;']) !!}<br>
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
                    Daftar Suara Warga
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


                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 20%">Nama</th>
                          <th>Isi</th>
                          <th>Status</th>
                          <th>Tanggal</th>
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
                            <a><font size="2px" color="black"><b>{{ $kategori->nama_warga }}</b></font></a>
                            <br />
                            
                          </td>
                          <td >
                            <a><font size="2px" color="black"><b>{{ $kategori->isi }}</b></font></a>
                          </td>
                          <td >
                            <a><font size="2px" color="black"><b>{{ $kategori->status }}</b></font></a>
                          </td>
                          <td>
                          <font size="2px" color="black"><b>{{ $kategori->created_at }}</b></font>
                            <!-- <button type="button" class="btn btn-success btn-xs">Aktif</button> -->
                          </td>
                          <td>
                            <a href="{{ url('kontak/lihat') }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <button class="delete-suara btn btn-danger btn-xs" data-photo-id="{{$kategori->id}}">Hapus</button>
                        </tr>
                       @else
                       <tr>
                          <td><?php echo $x; $x++; ?></td>
                          <td>
                            <a>{{ $kategori->nama_warga }}</a>
                            <br />
                            
                          </td>
                          <td >
                            <a>{{ $kategori->isi }}</a>
                          </td>
                          <td >
                            <a>{{ $kategori->status }}</a>
                          </td>
                          <td>
                          {{ $kategori->created_at }}
                            <!-- <button type="button" class="btn btn-success btn-xs">Aktif</button> -->
                          </td>
                          <td>
                            <a href="{{ url('kontak/lihat') }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <button class="delete-suara btn btn-danger btn-xs" data-photo-id="{{$kategori->id}}">Delete</button>
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
                    	<!-- <div class="col-sm-7">
                    		<div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                    			<ul class="pagination">
                    				<li class="paginate_button previous disabled" id="datatable_previous">
                    					<a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">
                    						Previous
                    					</a>
                    				</li>
                    				<li class="paginate_button active">
                    					<a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">
                    					1</a>
                    				</li>
                    				<li class="paginate_button ">
                    					<a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">
                    					2</a>
                    				</li>

                    				<li class="paginate_button next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div> -->
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@stop