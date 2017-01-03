@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ubah Data</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div>
                  {!! Form::model($kategori, ['method' => 'PATCH', 'action' => ['DesaController@update_struktur_organisasi', $kategori->id], 'files' => true]) !!}
                      @include('admin.desa.form_struktur_organisasi', ['submitButtonText' => 'Ubah Data'])
                  {!! Form::close() !!}
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop