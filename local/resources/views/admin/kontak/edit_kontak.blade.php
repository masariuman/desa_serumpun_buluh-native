@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ubah Kontak</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div>
                  {!! Form::model($kategori, ['method' => 'PATCH', 'action' => ['KontakController@update', $kategori->id],'files' => true ]) !!}
@if(isset($kategori))
  {!! Form::hidden('id',$kategori->id) !!}
@endif

{!! Form::label('gambar', 'Foto/Gambar Kantor Desa :', ['class' => 'control-label']) !!}
{!! Form::file('gambar') !!}
@if($errors->has('gambar'))
  <span><i><b><font color="red">{{$errors->first('gambar')}}</font></b></i></span><br>
@endif
<br><br>

{!! Form::label('nama', 'Nama :', ['class' => 'control-label']) !!}
{!! Form::text('nama', null, ['class' => 'form-control']) !!}
@if($errors->has('nama'))
  <span><i><b><font color="red">{{$errors->first('nama')}}</font></b></i></span><br>
@endif
<br>

{!! Form::label('alamat', 'Alamat :', ['class' => 'control-label']) !!}
{!! Form::text('alamat', null, ['class' => 'form-control']) !!}
@if($errors->has('alamat'))
  <span><i><b><font color="red">{{$errors->first('alamat')}}</font></b></i></span><br>
@endif
<br>


{!! Form::label('email', 'Email :', ['class' => 'control-label']) !!}
{!! Form::text('email', null, ['class' => 'form-control']) !!}
@if($errors->has('email'))
  <span><i><b><font color="red">{{$errors->first('email')}}</font></b></i></span><br>
@endif
<br>

<br>
<div class="form-group">
  {!! Form::submit('Ubah Kontak', ['class' => 'btn btn-primary form-control']) !!}
</div>
                  {!! Form::close() !!}
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop