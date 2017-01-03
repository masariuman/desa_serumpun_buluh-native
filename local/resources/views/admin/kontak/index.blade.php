@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kontak Utama</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                  @foreach($kontak as $kontak_list)
                    <a href="{{ url('admin/kontak/'.$kontak_list->id.'/edit') }}">
                      <button type="button" class="btn btn-primary"><i class="fa fa-pencil">  Ubah Kontak</i></button>
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
                    @foreach($kontak as $kontak_list)
                    <div class="product-image" style="margin-left: 1em; margin-right: 1em; text-align: center;">
                        <img class="CSS_LIGHTBOX_SCALED_IMAGE_IMG" src="{{ asset('fotoupload/'.$kontak_list->gambar)}}" style="font-family: &#39;&#39;; text-align: center;"></div>
                        @endforeach
      <!-- start project list --><br><br>
                    <table class="table table-striped projects">
                      <tbody>
                        <tr>
                          <td>
                            <a>Alamat Kantor Desa</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                          @foreach($kontak as $kontak_list)
                            {{ $kontak_list->alamat }}
                          @endforeach
                          </td>
                      <tr>
                          <td>
                            <a>Nama</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                          @foreach($kontak as $kontak_list)
                            {{ $kontak_list->nama }}
                          @endforeach
                          </td>
                          
                        </tr>
                          
                        </tr>
                          <tr>
                          <td>
                            <a>Email</a>
                          </td>
                          <td >
                            :
                          </td>
                          <td>
                          @foreach($kontak as $kontak_list)
                            {{ $kontak_list->email }}
                          @endforeach
                          </td>
                          
                       
                        </tr>
                        
                      </tbody>
                    </table>
                    

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@stop