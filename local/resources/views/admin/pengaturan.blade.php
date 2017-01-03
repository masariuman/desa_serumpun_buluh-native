@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pengaturan</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                  @foreach($desa as $kategori)
                    <a href="{{ url('admin/pengaturan/'.$kategori->id.'/edit') }}">
                      <button type="button" class="btn btn-primary"><i class="fa fa-pencil">  Ubah Pengaturan</i></button>
                    </a>
                  @endforeach
                    
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

                   @include('_partial.flash_message')
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <tbody>
                      <?php $x=1; ?>
                      <!-- tampilkan data kategori an  -->
                      @foreach($desa as $kategori)
                        <tr>
                          <td>1.</td>
                          <td>
                            <a>Judul Web</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                            {{$kategori->judul_web}}
                          </td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>
                            <a>Nama Desa</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                            {{$kategori->nama_desa}}
                          </td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>
                            <a>Copyright</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                            {{$kategori->copyright}}
                          </td>
                        </tr>
                        

                      @endforeach
                        <!-- <tr>
                          <td>1.</td>
                          <td>
                            <a>Nama Desa</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                            Serumpun Buluh << dari DB
                          </td>
                          <td> -->
                            <!-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a> -->
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <!-- <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a> -->
                          <!-- </td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>
                            <a>Copyright</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                            Copyright &copy; 2016 Arif Setiawan.
                          </td>
                          <td> -->
                            <!-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a> -->
                            <!-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a> -->
                            <!-- <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a> -->
                          <!-- </td> -->
                        <!-- </tr> -->
                        
                      </tbody>
                    </table>
                    
                    <hr>


                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <tbody>
                      <?php $x=1; ?>
                      <!-- tampilkan data kategori an  -->
                      @foreach($login as $kategorii)
                        <tr>
                          <td>1.</td>
                          <td>
                            <a>User</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                            {{$kategorii->name}}
                          </td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>
                            <a>Email</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                            {{$kategorii->email}}
                          </td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>
                            <a>Password</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                            ************
                          </td>
                        </tr>


                      @endforeach
                       
                      </tbody>
                    </table>

                     @foreach($login as $kategori1)
                    <a href="{{ url('admin/pengaturan_login/'.$kategori1->id.'/edit') }}">
                      <button type="button" class="btn btn-primary"><i class="fa fa-pencil">  Ubah Pengaturan Masuk</i></button>
                    </a>
                  @endforeach

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@stop