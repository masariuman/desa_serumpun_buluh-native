{!! csrf_field() !!}
<!-- nama	 -->
@if(isset($kategori))
	{!! Form::hidden('id',$kategori->id) !!}
@endif
<div>
	{!! Form::label('nama_kategori', 'Nama Kategori :', ['class' => 'control-label']) !!}
	{!! Form::text('nama_kategori', null, ['class' => 'form-control']) !!}
@if($errors->has('nama_kategori'))
  <span><i><b><font color="red">{{$errors->first('nama_kategori')}}</font></b></i></span><br>
@endif
</div><br>
<div>
	{!! Form::label('deskripsi_kategori', 'Deskripsi Kategori :', ['class' => 'control-label']) !!}
	{!! Form::textarea('deskripsi_kategori', null, ['class' => 'form-control']) !!}
@if($errors->has('deskripsi_kategori'))
  <span><i><b><font color="red">{{$errors->first('deskripsi_kategori')}}</font></b></i></span><br>
@endif
</div><br>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>