@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tambah Dusun Baru</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div>
                  {!! Form::open(['url' => 'admin/dusun', 'files' => true]) !!}
                     {!! csrf_field() !!}
@if(isset($kategori))
  {!! Form::hidden('id',$kategori->id) !!}
@endif


<!-- nama -->
{!! Form::label('nama_dusun', 'Nama Dusun :', ['class' => 'control-label']) !!}
{!! Form::text('nama_dusun', null, ['class' => 'form-control']) !!}
@if($errors->has('nama_dusun'))
  <span><i><b><font color="red">{{$errors->first('nama_dusun')}}</font></b></i></span><br>
@endif
<br>

<!-- jabatan -->
{!! Form::label('nama_kepala', 'Nama Kepala Dusun :', ['class' => 'control-label']) !!}
{!! Form::text('nama_kepala', null, ['class' => 'form-control']) !!}
@if($errors->has('nama_kepala'))
  <span><i><b><font color="red">{{$errors->first('nama_kepala')}}</font></b></i></span><br>
@endif
<br>

<br>
{!! Form::submit('Tambah Dusun Baru', ['class' => 'btn btn-primary form-control']) !!}
                  {!! Form::close() !!}
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop