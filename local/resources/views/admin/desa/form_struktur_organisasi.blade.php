{!! csrf_field() !!}
@if(isset($kategori))
	{!! Form::hidden('id',$kategori->id) !!}
@endif

<!-- foto -->
{!! Form::label('foto', 'Foto :', ['class' => 'control-label']) !!}
{!! Form::file('foto') !!}
@if($errors->has('foto'))
  <span><i><b><font color="red">{{$errors->first('foto')}}</font></b></i></span><br>
@endif
<br><br>


<!-- nama -->
{!! Form::label('nama', 'Nama :', ['class' => 'control-label']) !!}
{!! Form::text('nama', null, ['class' => 'form-control']) !!}
@if($errors->has('nama'))
  <span><i><b><font color="red">{{$errors->first('nama')}}</font></b></i></span><br>
@endif
<br>

<!-- jabatan -->
{!! Form::label('jabatan', 'Jabatan :', ['class' => 'control-label']) !!}
{!! Form::text('jabatan', null, ['class' => 'form-control']) !!}
@if($errors->has('jabatan'))
  <span><i><b><font color="red">{{$errors->first('jabatan')}}</font></b></i></span><br>
@endif
<br>

<br>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
