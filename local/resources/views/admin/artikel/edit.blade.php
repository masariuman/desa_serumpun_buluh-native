@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ubah Artikel</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div>
                  {!! Form::model($kategori, ['method' => 'PATCH', 'action' => ['ArtikelController@update', $kategori->id], 'files' => true]) !!}
                      @include('admin.artikel.form', ['submitButtonText' => 'Ubah Artikel'])
                  {!! Form::close() !!}
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop