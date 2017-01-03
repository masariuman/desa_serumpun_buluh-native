@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ubah Data RW</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div>
                  {!! Form::model($kategori, ['method' => 'PATCH', 'action' => ['DesaController@update_rw', $kategori->id], 'files' => true]) !!}
                     {!! csrf_field() !!}
@if(isset($kategori))
  {!! Form::hidden('id',$kategori->id) !!}
@endif

@if(count($list_rw)>0)
  {!! Form::select('id_dusun', $list_rw, null, ['class' => 'control-label', 'id' => 'id_rw', 'placeholder' => 'Pilih Dusun']) !!}
@else
  <p>Dusun tidak ada. Silahkan buat Dusun terlebih dahulu.</p>
@endif
@if($errors->has('id_dusun'))
  <span><i><b><font color="red">{{$errors->first('id_dusun')}}</font></b></i></span><br>
@endif
<br><br>
<!-- nama -->
{!! Form::label('nama_rw', 'Nama RW :', ['class' => 'control-label']) !!}
{!! Form::text('nama_rw', null, ['class' => 'form-control']) !!}
@if($errors->has('nama_rw'))
  <span><i><b><font color="red">{{$errors->first('nama_rw')}}</font></b></i></span><br>
@endif
<br>

<!-- jabatan -->
{!! Form::label('nama_kepala', 'Nama Kepala RW :', ['class' => 'control-label']) !!}
{!! Form::text('nama_kepala', null, ['class' => 'form-control']) !!}
@if($errors->has('nama_kepala'))
  <span><i><b><font color="red">{{$errors->first('nama_kepala')}}</font></b></i></span><br>
@endif
<br>

<br>
{!! Form::submit('Ubah Data RW', ['class' => 'btn btn-primary form-control']) !!}
                  {!! Form::close() !!}
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop