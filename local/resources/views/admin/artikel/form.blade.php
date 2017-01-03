{!! csrf_field() !!}
@if(isset($kategori))
	{!! Form::hidden('id',$kategori->id) !!}
@endif
<!-- judul	 -->
{!! Form::label('judul_artikel', 'Judul :', ['class' => 'control-label']) !!}
{!! Form::text('judul_artikel', null, ['class' => 'form-control']) !!}
@if($errors->has('judul_artikel'))
  <span><i><b><font color="red">{{$errors->first('judul_artikel')}}</font></b></i></span><br>
@endif
<br>
<!-- kategori -->
{!! Form::label('id_kategori', 'Kategori :', ['class' => 'control-label']) !!} 
@if(count($list_kategori)>0)
	{!! Form::select('id_kategori', $list_kategori, null, ['class' => 'control-label', 'id' => 'id_kategori', 'placeholder' => 'Pilih Kategori']) !!}
@else
	<p>Kategori tidak ada. Silahkan buat kategori terlebih dahulu di menu kategori.</p>
@endif
@if($errors->has('judul_artikel'))
  <span><i><b><font color="red">{{$errors->first('id_kategori')}}</font></b></i></span><br>
@endif
<br>
<!-- isi -->
{!! Form::label('isi', 'Isi Artikel :', ['class' => 'control-label']) !!}
{!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
@if($errors->has('judul_artikel'))
  <span><i><b><font color="red">{{$errors->first('isi')}}</font></b></i></span><br>
@endif
<br>
<!-- gambar -->
{!! Form::label('gambar', 'Gambar :', ['class' => 'control-label']) !!}
{!! Form::file('gambar') !!}
@if($errors->has('judul_artikel'))
  <span><i><b><font color="red">{{$errors->first('gambar')}}</font></b></i></span><br>
@endif
<br>

<!-- nama gambar -->
{!! Form::label('nama_gambar', 'Nama Gambar :', ['class' => 'control-label']) !!}
{!! Form::text('nama_gambar', null, ['class' => 'form-control']) !!}
@if($errors->has('judul_artikel'))
  <span><i><b><font color="red">{{$errors->first('nama_gambar')}}</font></b></i></span><br>
@endif
<br>

<br>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}


<!-- tinymce -->
<script src="{{  URL::to('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
  var editor_config = {
    path_absolute : "{{ URL::to('/') }}/",
    selector: 'textarea',
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak table",
      "searcheplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table link image",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clienWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clienHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      }
      else {
        cmsURL = cmsURL + "&type=files";
      }

      tinymce.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }

  };
  tinymce.init(editor_config);
</script>