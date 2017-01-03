@extends('template')

@section('main')
  
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tambah RT Baru</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div>
                  {!! Form::open(['url' => 'admin/rt', 'files' => true]) !!}
                     {!! csrf_field() !!}

{!! Form::label('nama_rw', 'Nama RW :', ['class' => 'control-label']) !!}
@if(count($list_rw)>0)
  {!! Form::select('id_rw', $list_rw, null, ['class' => 'control-label', 'id' => 'id_rw', 'placeholder' => 'Pilih RW']) !!}
@else
  <p>RW tidak ada. Silahkan buat RW terlebih dahulu.</p>
@endif
@if($errors->has('id_rw'))
  <span><i><b><font color="red">{{$errors->first('id_rw')}}</font></b></i></span><br>
@endif
<br><br>
<!-- nama -->
{!! Form::label('nama_rt', 'Nama RT :', ['class' => 'control-label']) !!}
{!! Form::text('nama_rt', null, ['class' => 'form-control']) !!}
@if($errors->has('nama_rt'))
  <span><i><b><font color="red">{{$errors->first('nama_rt')}}</font></b></i></span><br>
@endif
<br>

<!-- jabatan -->
{!! Form::label('nama_kepala', 'Nama Kepala Rt :', ['class' => 'control-label']) !!}
{!! Form::text('nama_kepala', null, ['class' => 'form-control']) !!}
@if($errors->has('nama_kepala'))
  <span><i><b><font color="red">{{$errors->first('nama_kepala')}}</font></b></i></span><br>
@endif
<br>

<br>
{!! Form::submit('Tambah RT Baru', ['class' => 'btn btn-primary form-control']) !!}
                  {!! Form::close() !!}
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop