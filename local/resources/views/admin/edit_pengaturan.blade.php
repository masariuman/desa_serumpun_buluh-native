@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ubah Data Pengaturan</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div>
                  {!! Form::model($kategori, ['method' => 'PATCH', 'action' => ['DesaController@update_pengaturan', $kategori->id], 'files' => true]) !!}
                     {!! csrf_field() !!}
@if(isset($kategori))
  {!! Form::hidden('id',$kategori->id) !!}
@endif

<br><br>
<!-- nama -->
{!! Form::label('judul_web', 'Judul Web :', ['class' => 'control-label']) !!}
{!! Form::text('judul_web', null, ['class' => 'form-control']) !!}
@if($errors->has('judul_web'))
  <span><i><b><font color="red">{{$errors->first('judul_web')}}</font></b></i></span><br>
@endif
<br>

<!-- jabatan -->
{!! Form::label('nama_desa', 'Nama Desa :', ['class' => 'control-label']) !!}
{!! Form::text('nama_desa', null, ['class' => 'form-control']) !!}
@if($errors->has('nama_desa'))
  <span><i><b><font color="red">{{$errors->first('nama_desa')}}</font></b></i></span><br>
@endif
<br>

<!-- jabatan -->
{!! Form::label('copyright', 'Copyright :', ['class' => 'control-label']) !!}
{!! Form::text('copyright', null, ['class' => 'form-control']) !!}
@if($errors->has('copyright'))
  <span><i><b><font color="red">{{$errors->first('copyright')}}</font></b></i></span><br>
@endif
<br>

<br>
{!! Form::submit('Ubah Data Pengaturan', ['class' => 'btn btn-primary form-control']) !!}
                  {!! Form::close() !!}
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop