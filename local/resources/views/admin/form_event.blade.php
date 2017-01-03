{!! csrf_field() !!}
<!-- nama	 -->
@if(isset($kategori))
	{!! Form::hidden('id',$kategori->id) !!}
@else
	{!! Form::hidden('status','aktif') !!}
@endif
<div>
	{!! Form::label('judul_event', 'Judul Event :', ['class' => 'control-label']) !!}
	{!! Form::text('judul_event', null, ['class' => 'form-control']) !!}

@if($errors->has('judul_event'))
  <span><i><b><font color="red">{{$errors->first('judul_event')}}</font></b></i></span><br>
@endif

</div><br>
<div>
	{!! Form::label('isi_event', 'Isi Event :', ['class' => 'control-label']) !!}
	{!! Form::textarea('isi_event', null, ['class' => 'form-control']) !!}

@if($errors->has('isi_event'))
  <span><i><b><font color="red">{{$errors->first('isi_event')}}</font></b></i></span><br>
@endif

</div><br>
{!! Form::label('tanggal_event', 'Tanggal Event :', ['class' => 'control-label']) !!}
	{!! Form::date('tanggal_event', null, ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}

@if($errors->has('tanggal_event'))
  <span><i><b><font color="red">{{$errors->first('tanggal_event')}}</font></b></i></span><br>
@endif
<br>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
