{!! csrf_field() !!}
<!-- nama	 -->
<div>
	{!! Form::label('nama', 'Nama :', ['class' => 'control-label']) !!}
	{!! Form::text('nama', null, ['class' => 'form-control']) !!}

@if($errors->has('nama'))
  <span><i><b><font color="red">{{$errors->first('nama')}}</font></b></i></span><br>
@endif

</div><br>
<div>
	{!! Form::label('isi', 'Isi Komentar :', ['class' => 'control-label']) !!}
	{!! Form::textarea('isi', null, ['class' => 'form-control']) !!}

@if($errors->has('isi'))
  <span><i><b><font color="red">{{$errors->first('isi')}}</font></b></i></span><br>
@endif

</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::hidden('id_artikel',$kategori->id) !!}
{!! Form::hidden('status','belum dibaca') !!}


                  {!! Form::close() !!}

<br><br><br>
<div class="komhead">

	

																			<h4>
																				{{ $jumlah_kategori }}
																				komentar
																				:

																			</h4>
																			<div class="stripe-line"></div>
																		</div><br>
<div class="komentarbg">
																		
@foreach($komentar as $komentator)			

<div class="x_panel">
                  <div class="x_title">
                    <h2>{{ $komentator->nama }} <small>berkata :</small></h2>
                    
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


