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
										<a name="7717256934861432929"></a>
										<h1 class="post-title entry-title" itemprop="name headline">
											Struktur Desa Serumpun Buluh
										</h1>
										
										<div class="post-header">
											<div class="post-header-line-1"></div>
										</div>
										<div class="post-body entry-content" id="post-body-7717256934861432929" itemprop="description articleBody">
											<div class="separator" style="clear: both; text-align: center;">
											</div>
											<div style="margin-left: 1em; margin-right: 1em; text-align: right;">
												<img class="CSS_LIGHTBOX_SCALED_IMAGE_IMG" src="" style="font-family: &#39;&#39;; text-align: center;"></div>
												
												
												<div class="row">
													<div class="col-md-12">
														<div class="">
															<div class="">

                    <!-- <ul class="nav navbar-right panel_toolbox">
                      
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                        
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                        
                      </li>
                      <li><a class="close-link"></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  </ul> -->
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
              @foreach($nama_desa as $gambar)
                <div style="margin-left: 1em; margin-right: 1em; text-align: center;"><a href="{{url('fotoupload/'.$gambar->gambar)}}" target="_blank" title="Gambar Struktur Organisasi Desa">
                        <img class="CSS_LIGHTBOX_SCALED_IMAGE_IMG" src="{{ asset('fotoupload/'.$gambar->gambar)}}" style="font-family: &#39;&#39;; text-align: center;"></a>
                        </div>
              @endforeach

                <br>
                  <hr style="border-top:1px solid #eee;border:2px;margin-top: 40px;margin-bottom: 40px;background-color: #eee;height: 3px;">

                                <br>
                <h2>Daftar Nama Keorganisasian Desa</h2>
              	<!-- start project list -->
              	<table class="table table-striped projects">
              		<thead>
              			<tr>
              				<th style="width: 10%;text-align: center;" class="orgcenter">Foto</th>
              				<th style="width: 27%;text-align: center;">Jabatan</th>
              				<th style="width: 20%;text-align: center;">Nama</th>
              			</tr>
              		</thead>
              		<tbody>


              			@foreach($organisasi as $organisasi_list)


              			<tr>
              				<td style="text-align: center;">
              					@if(isset($organisasi_list->foto))
              					<img src="{{asset('fotoupload/'.$organisasi_list->foto)}}" height="130" width="100">
              					@else
              					<img src="{{asset('fotoupload/person_dummy.jpg')}}" height="130" width="100">
              					@endif
              				</td>
              				<td class="org_center" style="text-align: center;">
              					{{$organisasi_list->jabatan}}
              				</td>
              				<td style="text-align: center;">
              					{{$organisasi_list->nama}}

              				</td>


              			</tr>

              			@endforeach                        


              		</tbody>
              	</table><hr style="border-top:1px solid #eee;border:2px;margin-top: 40px;margin-bottom: 40px;background-color: #eee;height: 3px;">



              	<!-- Dusun -->
              	<p style="font-size: 20px;"><b><i><u>Dusun Desa</u></i></b></p>

              	<table class="table table-striped projects">
              		<thead>
              			<tr>
              			<th style="text-align: center;">Nama Dusun</th>
              				<th style="text-align: center;">Nama Kepala Dusun</th>
              			</tr>
              		</thead>
              		<tbody>
              			@foreach($dusun as $dusun_list)
              			<tr>
              				<td class="org_center" style="text-align: center;">
              					{{$dusun_list->nama_dusun}}
              				</td>
              				<td style="text-align: center;">

              					{{$dusun_list->nama_kepala}}

              				</td>



              			</tr>

              			@endforeach                         


              		</tbody>
              	</table>

              	<hr style="border-top:1px solid #eee;border:2px;margin-top: 40px;margin-bottom: 40px;background-color: #eee;height: 3px;">

              	<!-- RW -->
              	<p style="font-size: 20px;"><b><i><u>RW Desa</u></i></b></p>

              	<table class="table table-striped projects">
              		<thead>
              			<tr>
              				<th style="text-align: center;">Asal Dusun</th>
              				<th style="text-align: center;">Nama RW</th>
              				<th style="text-align: center;">Nama Kepala RW</th>
              			</tr>
              		</thead>
              		<tbody>
              			@foreach($rw as $rw_list)
              			<tr>
              				<td class="org_center" style="text-align: center;">
              					{{$rw_list->dusun->nama_dusun}}
              				</td>
              				<td style="text-align: center;">

              					{{$rw_list->nama_rw}}

              				</td>
              				<td style="text-align: center;">

              					{{$rw_list->nama_kepala}}

              				</td>



              			</tr>
              			@endforeach                    



              		</tbody>
              	</table>


              	<hr style="border-top:1px solid #eee;border:2px;margin-top: 40px;margin-bottom: 40px;background-color: #eee;height: 3px;">


              	<!-- Rt -->
              	<p style="font-size: 20px;"><b><i><u>RT Desa</u></i></b></p>

              	<table class="table table-striped projects">
              		<thead>
              			<tr>
              				<th style="text-align: center;">Asal RW</th>
              				<th style="text-align: center;">Nama RT</th>
              				<th style="text-align: center;">Nama Kepala RT</th>
              			</tr>
              		</thead>
              		<tbody>
              			@foreach($rt as $rt_list)
              			<tr>
              				<td style="text-align: center;">
              					{{$rt_list->rw->nama_rw}}
              				</td>
              				<td style="text-align: center;">

              					{{$rt_list->nama_rt}}

              				</td>
              				<td style="text-align: center;">

              					{{$rt_list->nama_kepala}}

              				</td>



              			</tr>
              			@endforeach                     



              		</tbody>
              	</table>


              </div>
          </div>
      </div>
  </div>


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