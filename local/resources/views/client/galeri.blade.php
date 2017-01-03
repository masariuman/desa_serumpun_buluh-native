@extends('template_client')

@section('main')

<div id="mywrapper">
	<!-- post wrapper start -->
	<div id="post-wrapper">
		<div class="post-container">
			<div id="singlepage">
				<div class="main section" id="main"><div class="widget Blog" data-version="1" id="Blog1">
					
					<div class="blog-posts hfeed">

						<div class="date-outer">


							<div class="date-posts">

								<div class="post-outer">
									<!-- <article class="post hentry" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting"> -->
										<meta content="" itemprop="image">
										<a name="7717256934861432929"></a>
										<h1 class="post-title entry-title" itemprop="name headline">
							GALERI
										</h1>
										
										<div class="post-header">
											<div class="post-header-line-1"></div>
										</div>
										<div class="post-body entry-content" id="post-body-7717256934861432929" itemprop="description articleBody">
											<div class="separator" style="clear: both; text-align: center;">
											</div>
											<div style="margin-left: 1em; margin-right: 1em; text-align: right;">
												<img class="CSS_LIGHTBOX_SCALED_IMAGE_IMG" src="" style="font-family: &#39;&#39;; text-align: center;"></div>


<?php $x = 0; ?>



<!--start-->
    <div style="display:none;">
        <div id="ninja-slider">
            <div class="slider-inner">
                <ul>
               		@foreach($galeri as $galeri_list)
                    <li>
                        <a class="ns-img" href="{{url('fotoupload/'.$galeri_list->gambar)}}"></a>
                        <div class="caption">
                        </div>
                    </li>
                    @endforeach
                    <!-- <li>
                        <a class="ns-img" href="img/a.jpg"></a>
                        <div class="caption">
                            <h3>Dummy Caption 2</h3>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                        </div>
                    </li>
                    <li>
                        <span class="ns-img" style="background-image:url(img/b.jpg);"></span>
                        <div class="caption">
                            <h3>Dummy Caption 3</h3>
                            <p>Duis fringilla arcu convallis urna commodo, et tempus velit posuere.</p>
                        </div>
                    </li>
                    <li>
                        <a href="/"><img class="ns-img" src="img/c.jpg" /></a>
                        <div class="caption">
                            <h3>Dummy Caption 4</h3>
                            <p>Quisque semper dolor sed neque consequat scelerisque at sed ex. Nam gravida massa.</p>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="img/d.jpg"></a>
                        <div class="caption">
                            <h3>Dummy Caption 5</h3>
                            <p>Proin non dui at metus suscipit bibendum.</p>
                        </div>
                    </li> -->
                </ul>
                <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
    </div>


@foreach($galeri as $galeri_list)

												
												<div class="tilt pic">
												<a>
												<span class="judul_galeri">{{$galeri_list->nama_gambar}}</span>
												    <img src="{{url('fotoupload/'.$galeri_list->gambar)}}" alt="" style="height: 100%;" title="{{$galeri_list->nama_gambar}}" onclick="lightbox({!!$x!!})">
 													</a>
												  </div>

												  <?php $x++; ?>
												 @endforeach

																
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
																<div class="row">

                      <div class="col-sm-7">
                        <div class="paging2">
                          {{ $galeri->links() }}
                        </div>
                      </div></div>
															</div>
														<!-- </article> -->
														
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