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
									<article class="post hentry" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
										<meta content="" itemprop="image">
										<a name="7717256934861432929"></a>@include('_partial.flash_message')
										  <script>
  	$('div.alert').not('.alert-important').delay(3000).slideUp(300);
  </script>
										<h1 class="post-title entry-title" itemprop="name headline">
							Kontak
										</h1>
										<div class="post-info">
											<!-- <span class="author-info">
												<i class="fa fa-user"></i>
												<span class="vcard">
													<span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
														<meta content="" itemprop="url">
														<a class="g-profile" href="" rel="author" title="author profile" data-gapiscan="true" data-onload="true" data-gapiattached="true">
															<span itemprop="name">
																Kontak Utama
															</span>
														</a>
													</span>
												</span>
											</span> -->
											
											
										</div>
										<div class="post-header">
											<div class="post-header-line-1"></div>
										</div>
										<div class="post-body entry-content" id="post-body-7717256934861432929" itemprop="description articleBody">
											<div class="separator" style="clear: both; text-align: center;">
											</div>
											<div style="margin-left: 1em; margin-right: 1em; text-align: right;">
												</div>
												<div class="kontak-utama">
													
												</div>
												@foreach($kontak as $desa_list)


<!--start-->
    <div style="display:none;">
        <div id="ninja-slider2">
            <div class="slider-inner2">
                <ul>
                    <li>
                        <a class="ns-img2" href="{{url('fotoupload/'.$desa_list->gambar)}}"></a>
                        <div class="caption2">
                        </div>
                    </li>
                </ul>
                <div id="fsBtn2" class="fs-icon2" title="Expand/Close"></div>
            </div>
        </div>
    </div>


													<div style="margin-left: 1em; margin-right: 1em; text-align: center;"><a>
												<img class="CSS_LIGHTBOX_SCALED_IMAGE_IMG" src="{{ asset('fotoupload/'.$desa_list->gambar)}}" style="font-family: &#39;&#39;; text-align: center;" onclick="lightbox2(0)"></a>
												</div>
												@endforeach
												@foreach($kontak as $kontak_list)
												<table class="table table-striped projects">
                      <tbody>
                        <tr>
                          <td style="border-left: 0px;border-right: 0px;">
                            Alamat Kantor Desa
                          </td>
                          <td style="border-left: 0px;border-right: 0px;">
                            :
                          </td>
                          <td style="border-left: 0px;border-right: 0px;">
                                                     {{$kontak_list->alamat}}
                                                    </td>
                      </tr><tr>
                          <td style="border-left: 0px;border-right: 0px;">
                            Nama
                          </td>
                          <td style="border-left: 0px;border-right: 0px;">
                            :
                          </td>
                          <td style="border-left: 0px;border-right: 0px;">
                                                      {{$kontak_list->nama}}
                                                    </td>
                          
                        </tr>
                          
                        
                        
                          <tr>
                          <td style="border-left: 0px;border-right: 0px;">
                            Email
                          </td>
                          <td style="border-left: 0px;border-right: 0px;">
                            :
                          </td>
                          <td style="border-left: 0px;border-right: 0px;">
                                                      {{$kontak_list->email}}
                                                    </td>
                          
                       
                        </tr>
                        
                      </tbody>
                    </table>
								@endforeach				
												
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
																			Suara Warga
																		</h4>
																		<div class="pesan-komentar">
																			<p>
																			</p>
																		</div>
																		
				  {!! Form::open(['url' => 'suara/new']) !!}
                      @include('client.suara', ['submitButtonText' => 'Kirim Pesan'])
																		
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