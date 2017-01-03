{!! csrf_field() !!}
<!-- nama	 -->
<div>
	{!! Form::label('nama_warga', 'Nama :', ['class' => 'control-label']) !!}
	{!! Form::text('nama_warga', null, ['class' => 'form-control']) !!}

@if($errors->has('nama_warga'))
  <span><i><b><font color="red">{{$errors->first('nama_warga')}}</font></b></i></span><br>
@endif

</div><br>
<div>
	{!! Form::label('isi', 'Isi Komentar :', ['class' => 'control-label']) !!}
	{!! Form::textarea('isi', null, ['class' => 'form-control']) !!}

@if($errors->has('isi'))
  <span><i><b><font color="red">{{$errors->first('isi')}}</font></b></i></span><br>
@endif

	{!! Form::hidden('status','belum dibaca') !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

<br><br><br>
<br>
<div class="komentarbg">
																		
@foreach($kategori_list as $komentator)			

<div class="x_panel">
                  <div class="x_title">
                    <h2>{{ $komentator->nama_warga }} <small>berkata :</small></h2>
                    
                  <!-- <div class="x_content"> -->

                    <!-- end pop-over -->

                  <!-- </div> -->

                </div>

{{ $komentator->isi }}
                </div>
					<!-- 														
<p><i><b> </b></i></p>
<hr> -->
@endforeach		

</div>


