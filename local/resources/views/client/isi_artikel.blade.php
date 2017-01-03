@extends('template_client')

@section('main')

<div id="mywrapper">
	<!-- post wrapper start -->
	<div id="post-wrapper">
		<div class="post-container">
			<div id="singlepage">
				<div class="main section" id="main"><div class="widget Blog" data-version="1" id="Blog1">
					<!-- <div class="breadcrumbs">
						<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
							
								<span itemprop="title">
									Kategori
								</span>
							
						</span>
						:

						<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
							
							
								<span itemprop="title">
									
								</span>
							</a>
							
						</span>

						 

						
					</div> -->
					<div class="blog-posts hfeed">

						<div class="date-outer">


							<div class="date-posts">

								<div class="post-outer">
									<article class="post hentry" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
										<meta content="" itemprop="image">
										<a name="7717256934861432929"></a>
										@include('_partial.flash_message')
										  <script>
  	$('div.alert').not('.alert-important').delay(3000).slideUp(300);
  </script>
										<h1 class="post-title entry-title" itemprop="name headline">
							{{$kategori->judul_artikel}}
										</h1>
										<div class="post-info">
											<span class="author-info">
												<i class="fa fa-file-text-o"></i>
												<span class="vcard">
												@if(count($id_kategori)>0)
													<span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
														<meta content="" itemprop="url">
														<a class="g-profile" href="{{url('artikel/Kategori/'.$id_kategori->nama_kategori)}}" rel="author" title="author profile" data-gapiscan="true" data-onload="true" data-gapiattached="true">
															<span itemprop="name">
																{{ $id_kategori->nama_kategori }}
															</span>
														</a>
													</span>
												@else
													<span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
														<meta content="" itemprop="url">
														<a class="g-profile" href="" rel="author" title="author profile" data-gapiscan="true" data-onload="true" data-gapiattached="true">
															<span itemprop="name">
																Tidak Memiliki Kategori
															</span>
														</a>
													</span>
												@endif
												</span>
											</span>
											<meta content="http://tampanblog.blogspot.com/2014/06/mirai-no-kimi-to-subete-no-uta-ni-or-my.html" itemprop="url">
											<span class="time-info">
												<i class="fa fa-calendar"></i>
												<a class="timestamp-link" href="" rel="bookmark" title="permanent link">
													<abbr dlmsY="published updated" itemprop="datePublished" title="{{$kategori->created_at}}">
														{{$kategori->created_at->format('d-m-Y')}}
													</abbr>
												</a>
											</span>
											
											



<!--start-->
    <div style="display:none;">
        <div id="ninja-slider2">
            <div class="slider-inner2">
                <ul>
                    <li>
                        <a class="ns-img2" href="{{url('fotoupload/'.$kategori->gambar)}}"></a>
                        <div class="caption2">
                        </div>
                    </li>
                </ul>
                <div id="fsBtn2" class="fs-icon2" title="Expand/Close"></div>
            </div>
        </div>
    </div>





										</div>
										<div class="post-header">
											<div class="post-header-line-1"></div>
										</div>
										<div class="post-body entry-content" id="post-body-7717256934861432929" itemprop="description articleBody">
											<div class="separator" style="clear: both; text-align: center;">
											</div>
											<div style="margin-left: 1em; margin-right: 1em; text-align: center;"><a >
												<img class="CSS_LIGHTBOX_SCALED_IMAGE_IMG" src="{{ asset('fotoupload/'.$kategori->gambar)}}" style="font-family: &#39;&#39;; text-align: center;" onclick="lightbox2(0)">
												<span><b><font size="2px;">(Gambar : {{$kategori->nama_gambar}})</font></b></span></a>
												</div>
												
												
												
													{!! html_entity_decode($kategori->isi) !!}
														
															
																
																
																	<!-- <div id="share-post">
																		<a class="facebook" href="https://www.blogger.com/share-post.g?blogID=8330366638304275318&postID=7717256934861432929&target=facebook" onclick="window.open(this.href, &quot;_blank&quot;, &quot;height=430,width=640&quot;); return false;" target="_blank" title="Berbagi ke Facebook">
																			<span></span>
																			Share on Facebook
																		</a>
																		<a class="twitter" href="https://www.blogger.com/share-post.g?blogID=8330366638304275318&postID=7717256934861432929&target=twitter" target="_blank" title="Berbagi ke Twitter">
																			<span></span>
																			Share on Twitter
																		</a>
																		<a class="google" href="https://plus.google.com/share?url=http://tampanblog.blogspot.com/2014/06/mirai-no-kimi-to-subete-no-uta-ni-or-my.html" onclick="javascript:window.open(this.href,   &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;" rel="nofollow" title="Share this on Google+">
																			<span></span>
																			Share on Google Plus
																		</a>
																	</div> -->
																	<div style="clear: both;"></div>
																	
																	
																<div class="clear"></div>
															</div>
														</article>
														<div id="top-comment">
															<div class="widget2" id="top-comment1">
																<div class="centerare1">
																	<div class="comments" id="comments">
																		<a name="comments"></a>
																		
																		<div id="Blog1_comments-block-wrapper">
																			<dl class="avatar-comment-indent" id="comments-block">
																			</dl>
																		</div>
																		<p class="comment-footer">
																		</p><div class="comment-form">
																		<a name="comment-form"></a>
																		<h4 id="comment-post-message">
																			Poskan Komentar
																		</h4>
																		<div class="pesan-komentar">
																			<p>
																			</p>
																		</div>
																		
				  {!! Form::open(['url' => 'artikel/komentar/new']) !!}
                      @include('client.komentar', ['submitButtonText' => 'Kirim Komentar'])
																		
																	</div>
																	<p></p>
																	<div id="backlinks-container">
																		<div id="Blog1_backlinks-container">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div></div>

										</div>
										
										<div class="clear"></div>
										
									</div></div>
								</div>
								<!--singlepage end-->
							</div>
						</div>
						<!-- post wrapper end -->
					</div>

@stop