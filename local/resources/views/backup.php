@if(!empty($halaman) && $halaman=='Pendidikan')
		<li>
			<a href="{{url('artikel/kategori/pendidikan')}}" class="active">
				Pendidikan
			</a>
			<!-- <ul> <li> <a href='#' itemprop='url'> <span itemprop='name'>Sub Menu 1</span> </a> </li> <li> <a href='#' itemprop='url'> <span itemprop='name'>Sub Menu 2</span> </a> </li> <li> <a href='#' itemprop='url'> <span itemprop='name'>Sub Menu 3</span> </a> </li> </ul> -->
		</li>
		@else
		<li class="">
			<a href="{{url('artikel/kategori/pendidikan')}}">
				Pendidikan
			</a>
			<!-- <ul> <li> <a href='#' itemprop='url'> <span itemprop='name'>Sub Menu 1</span> </a> </li> <li> <a href='#' itemprop='url'> <span itemprop='name'>Sub Menu 2</span> </a> </li> <li> <a href='#' itemprop='url'> <span itemprop='name'>Sub Menu 3</span> </a> </li> </ul> -->
		</li>
		@endif
		
		@if(!empty($halaman) && $halaman=='Kesehatan')
		<li>
			<a href="{{url('artikel/kategori/kesehatan')}}" itemprop="url" class="active">
				<span itemprop="name">KESEHATAN</span>
			</a>
		</li>
		@else
		<li>
			<a href="{{url('artikel/kategori/kesehatan')}}" itemprop="url">
				<span itemprop="name">KESEHATAN</span>
			</a>
		</li>
		@endif