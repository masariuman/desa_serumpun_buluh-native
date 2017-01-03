@extends('template_client')

@section('main')
<div class="ct-wrapper" id="featured-posts-section">
		<div class="featured-post padding clearfix">
			<div class="main-post col-post">
			@if(!empty($first))
				<a target="_blank" href="{{url('artikel/'.$first->id)}}">
					
						<img src="{{ asset('fotoupload/'.$first->gambar)}}" alt="{{ $first->judul_artikel }}" title="{{ $first->judul_artikel }}">
				</a>
				<header>
					<h3 class="entry-title">
						<a target="_blank" href="{{url('artikel/'.$first->id)}}" title="">
							{{ $first->judul_artikel }}
						</a>
					</h3>
				</header>
			@else
				<a href="#">
					
						<img src="#" >
				</a>
				<header>
					<h3 class="entry-title">
						<a href="#" title="">
							Tidak ada artikel
						</a>
					</h3>
				</header>
			@endif
			</div>
			<div class="secondary-post col-post" style="margin-right:0">
			@if(!empty($second))
				<a class="hover_play_small" target="_blank" href="{{url('artikel/'.$second->id)}}">
					<img src="{{ asset('fotoupload/'.$second->gambar)}}" alt="{{ $second->judul_artikel }}" title="{{ $second->judul_artikel }}" height="200" width="420">
				</a>
				<header>
					<h4>
						<a target="_blank" href="{{url('artikel/'.$second->id)}}">
							{{ $second->judul_artikel }}
						</a>
					</h4>
				</header>
			@else
				<a class="hover_play_small" href="#">
					<img src="#" height="200" width="420">
				</a>
				<header>
					<h4>
						<a href="#">
							Tidak ada artikel
						</a>
					</h4>
				</header>
			@endif
			</div>
			<div class="secondary-post col-post" style="margin-right:0">
			@if(!empty($third))
				<a class="hover_play_small" target="_blank" href="{{url('artikel/'.$third->id)}}">
					<img src="{{ asset('fotoupload/'.$third->gambar)}}" alt="{{ $third->judul_artikel }}" title="{{ $third->judul_artikel }}" height="200" width="420">
				</a>
				<header>
					<h4>
						<a target="_blank" href="{{url('artikel/'.$third->id)}}">
							{{ $third->judul_artikel }}
						</a>
					</h4>
				</header>
			@else
				<a class="hover_play_small" href="#">
					<img src="#" height="200" width="420">
				</a>
				<header>
					<h4>
						<a href="#">
							Tidak ada artikel
						</a>
					</h4>
				</header>
			@endif
			</div>
		</div>
	</div>
	<!--<div id='carousel'> <div id='crosscol-wrapper'> <b:section class='crosscol' id='crosscol' showaddelement='no'/> </div> </div>-->
	<div class="clear"></div>
	<div class="clear"></div>
	<div id="mywrapper">
		<!-- post wrapper start -->
		<div id="post-wrapper">
			<div class="post-container">
				<div id="singlepage">
					<!-- only display title if it's non-empty -->
					<div class="recent-post-title"><h2>
						<span class="text-title">Berita Terkini</span></h2></div>
						<div class="main section" id="main"><div class="widget Blog" data-version="1" id="Blog1">
							<div class="blog-posts hfeed">
							<!-- isi -->
							@foreach($kategori_list as $kategori) 
								<div class="date-outer">


									<div class="date-posts">

										<div class="post-outer">
											<article class="post hentry" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
												<meta content="{{ asset('fotoupload/'.$kategori->gambar)}}" itemprop="image">
												<a target="_blank" href="{{url('artikel/'.$kategori->id)}}">
													<div class="img-thumbnail">
														<span class="rollover"></span>
														<img width="300" height="190" src="{{ asset('fotoupload/'.$kategori->gambar)}}" alt="{{ $kategori->judul_artikel }}" title="{{ $kategori->judul_artikel }}">
													</div>
												</a>
												<a name="8455181363241661096"></a>
												<h2 class="post-title entry-title" itemprop="name headline"><span>
													<a target="_blank" href="{{url('artikel/'.$kategori->id)}}">
														{{ $kategori->judul_artikel }}
													</a>
												</span></h2>
												<div class="post-info">
													<span class="author-info">
														<i class="fa fa-file-text-o"></i>
														<span class="vcard">
														@if(count($kategori->id_kategori)>0)
							                             <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
																<meta target="_blank" content="{{url('artikel/Kategori/'.$kategori->kategori->nama_kategori)}}" itemprop="url">
																<a class="g-profile" target="_blank" href="{{url('artikel/Kategori/'.$kategori->kategori->nama_kategori)}}" rel="author" title="author profile" data-gapiscan="true" data-onload="true" data-gapiattached="true">
																	<span itemprop="name">
																	{{$kategori->kategori->nama_kategori}}
																	</span>
																</a>
															</span>
							                            @else
							                              <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
																<meta target="_blank" content="" itemprop="url">
																<a class="g-profile" target="_blank" href="" rel="author" title="author profile" data-gapiscan="true" data-onload="true" data-gapiattached="true">
																	<span itemprop="name">
																	Tidak Memiliki Kategori
																	</span>
																</a>
															</span>
							                            @endif
															
														</span>
													</span>
													<meta content="" itemprop="url">
													<span class="time-info">
														<i class="fa fa-calendar"></i>
														<a class="timestamp-link" href="" rel="bookmark" title="permanent link">
															<abbr dlmsY="published updated" itemprop="datePublished" title="{{$kategori->created_at}}">
																{{$kategori->created_at->format('d-m-Y')}}
															</abbr>
														</a>
													</span>
												</div>
												<div class="post-header">
													<div class="post-header-line-1"></div>
												</div>
												<div class="post-body2 entry-content" id="post-body-8455181363241661096" itemprop="articleBody description">
													<div>
														{!! strip_tags(str_limit($kategori->isi, $limit = 170, $end = '.......')) !!}&nbsp;&nbsp;&nbsp;
														{{link_to('artikel/'.$kategori->id, 'Baca Lebih Lanjut', ['target' => '_blank'])}}
													</div>
													
													<div style="clear: both;"></div>
												</div>
											</article>
										</div>

									</div></div>
									@endforeach
									<!-- isi selesai -->

									

									</div>
									<div class="row">

                      <div class="col-sm-7">
                        <div class="paging2">
                          {{ $kategori_list->links() }}
                        </div>
                      </div>
                    <!-- end project list -->

                  </div>
                  <div class="blog-feeds">
                  	<div class="feed-links">
                  		Langganan:
                  		<a class="feed-link" href="http://tampanblog.blogspot.com/feeds/posts/default" target="_blank" type="application/atom+xml">
                  			Entri
                  			(
                  			Atom
                  			)
                  		</a>
                  	</div>
                  </div>
                  <script type="text/javascript">window.___gcfg = {'lang': 'in'};</script>
              </div></div>
          </div>
          <!--singlepage end-->
      </div>
  </div>
  <!-- post wrapper end -->
</div>

@stop