@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Prasarana dan Sarana</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                  @foreach($desa as $kategori)
                    <a href="{{ url('admin/prasarana/'.$kategori->id.'/edit') }}">
                      <button type="button" class="btn btn-primary"><i class="fa fa-pencil">  Ubah Info Prasarana dan Sarana</i></button>
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
                  <div>
                  @include('_partial.flash_message')
                  @foreach($desa as $kategori)
                    {!! html_entity_decode($kategori->prasarana) !!}
                  @endforeach
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop