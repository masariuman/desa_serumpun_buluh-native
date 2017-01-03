@extends('template')

@section('main')
	<div class="right_col" role="main">
          <div class="">
           
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <!-- <div class="x_title">
                    
                  </div> -->
                  <div class="x_content">
                  <div class="title_left">

                    <h2 style="font-size: 40px"><i><b>SELAMAT DATANG</b></i></h2>
                  </div>
                  <hr>
                  <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-file-text-o"></i></div>
                  <div class="count">{{$total_artikel}}</div>
                  <h3>Artikel</h3>
                  <p>Anda memiliki artikel dengan total {{$total_artikel}} Artikel.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-th-list"></i></div>
                  <div class="count">{{$total_kategori}}</div>
                  <h3>Kategori</h3>
                  <p>Anda memiliki kategori dengan total {{$total_kategori}} Kategori.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">{{$jumlah_komentar_belum_dibaca}}</div>
                  <h3>Komentar Baru</h3>
                  <p>Anda memiliki {{$jumlah_komentar_belum_dibaca}} Komentar yang belum dibaca.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-bullhorn"></i></div>
                  <div class="count">{{$jumlah_suara_belum_dibaca}}</div>
                  <h3>Suara Warga Baru</h3>
                  <p>Anda memiliki {{$jumlah_suara_belum_dibaca}} Suara Warga yang belum dibaca.</p>
                </div>
              </div>
            </div>
                  <!-- <p>Anda memiliki artikel dengan total Artikel.</p> -->
                  <!-- <p>Anda memiliki kategori dengan total  Kategori.</p> -->
                  <!-- <p>Anda memiliki komentar dengan total Komentar dan Anda memiliki  Komentar yang belum dibaca.</p> -->
                  <hr>
                  <h2><i>Komentar</i></h2>
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
                       @foreach($komentar_list as $kategori)
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
                            
                            <a href="{{ url('artikel/komentar/'.$artikel=$kategori->id_artikel.'/'.$kategori->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <button class="delete-komentar2 btn btn-danger btn-xs" data-photo-id="{{$kategori->id}}">Hapus</button>
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
                            <a href="{{ url('artikel/'.$kategori->id_artikel) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <button class="delete-komentar2 btn btn-danger btn-xs" data-photo-id="{{$kategori->id}}">Hapus</button>
                          </td>
                        </tr>
                       @endif
                        
                        @endforeach
                      </tbody>
                    </table>
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                          <!-- Menampilkan  dari  data -->
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <div class="paging">
                          {{ $komentar_list->links() }}
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
                    <!-- </div> -->
                    <!-- end project list -->

                  </div>


                  <!-- <p>Anda memiliki Suara Warga dengan total  Suara Warga dan Anda memiliki  Suara yang belum dibaca.</p> -->
                  <hr>
                  <h2><i>Suara Warga</i></h2>
                  <!-- start suara list -->
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
                       @foreach($suara_list as $suara)
                       @if($suara->status == 'belum dibaca')
                       <tr>
                          <td><font size="2px" color="black"><b><?php echo $x; $x++; ?></b></font></td>
                          <td>
                            <a><font size="2px" color="black"><b>{{ $suara->nama_warga }}</b></font></a>
                            <br />
                            
                          </td>
                          <td >
                            <a><font size="2px" color="black"><b>{{ $suara->isi }}</b></font></a>
                          </td>
                          <td >
                            <a><font size="2px" color="black"><b>{{ $suara->status }}</b></font></a>
                          </td>
                          <td>
                          <font size="2px" color="black"><b>{{ $suara->created_at }}</b></font>
                            <!-- <button type="button" class="btn btn-success btn-xs">Aktif</button> -->
                          </td>
                          <td>
                            <a href="{{ url('kontak/lihat') }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <button class="delete-suara2 btn btn-danger btn-xs" data-photo-id="{{$suara->id}}">Delete</button>
                        </tr>
                       @else
                       <tr>
                          <td><?php echo $x; $x++; ?></td>
                          <td>
                            <a>{{ $suara->nama_warga }}</a>
                            <br />
                            
                          </td>
                          <td >
                            <a>{{ $suara->isi }}</a>
                          </td>
                          <td >
                            <a>{{ $suara->status }}</a>
                          </td>
                          <td>
                          {{ $suara->created_at }}
                            <!-- <button type="button" class="btn btn-success btn-xs">Aktif</button> -->
                          </td>
                          <td>
                            <a href="{{ url('kontak/lihat') }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <button class="delete-suara2 btn btn-danger btn-xs" data-photo-id="{{$suara->id}}">Delete</button>
                        </tr>
                       @endif
                        
                        @endforeach
                        
                      </tbody>
                    </table>
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                          
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <div class="paging">
                          {{ $suara_list->links() }}
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
                    <!-- <div class="row">
                      <div class="col-sm-5">
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                          
                        </div>
                      </div> -->
                      
                      

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@stop