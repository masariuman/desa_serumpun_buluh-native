@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Event | Artikel Baru</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div>
                  {!! Form::open(['url' => 'admin/event']) !!}
                      @include('admin.form_event', ['submitButtonText' => 'Tambah Event'])
                  {!! Form::close() !!}
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop