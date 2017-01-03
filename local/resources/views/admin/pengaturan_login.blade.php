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
                  {!! Form::model($kategori, ['method' => 'PATCH', 'action' => ['DesaController@update_pengaturan_login', $kategori->id], 'files' => true]) !!}
                     {!! csrf_field() !!}
@if(isset($kategori))
  {!! Form::hidden('id',$kategori->id) !!}
@endif

<br><br>
<!-- nama -->
{!! Form::label('name', 'Nama :', ['class' => 'control-label']) !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
@if($errors->has('name'))
  <span><i><b><font color="red">{{$errors->first('name')}}</font></b></i></span><br>
@endif
<br>

<!-- jabatan -->
{!! Form::label('email', 'Email :', ['class' => 'control-label']) !!}
{!! Form::email('email', null, ['class' => 'form-control']) !!}
@if($errors->has('email'))
  <span><i><b><font color="red">{{$errors->first('email')}}</font></b></i></span><br>
@endif
<br>

<!-- jabatan -->
{!! Form::label('password', 'Password :', ['class' => 'control-label']) !!}
{!! Form::password('password', null, ['class' => 'form-control']) !!}
@if($errors->has('password'))
  <span><i><b><font color="red">{{$errors->first('password')}}</font></b></i></span><br>
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