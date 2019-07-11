 @extends('templete.master')


@section('content')
 

<div class="row">
<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-supervisor-account"></i>PLAYER'S DETAIL PAGE</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="verified-badge"></div>
                                                <a href="#"><img src="/storage/upload/{{$profiles->profile_image}}"  alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#"><strong>player's Name : </strong>{{$profiles->name}}</a></h4>

												<!-- Details -->
												
												<span class="freelancer-detail-item"><strong>player's overall : </strong>{{$profiles->overall}}</span><br>
                                                
            
                                                
                                                
                                                <span class="freelancer-detail-item"><strong>player's Birthday : </strong>{{$profiles->dob}}</span><br>
                                                
                                                <span class="freelancer-detail-item"><strong>player's Gender: </strong>{{$profiles->gender}}</span><br>
                                                
                                                <span class="freelancer-detail-item"><strong>player's Nationality & Clubsite : </strong>{{$profiles->country}}</span>
                                                <br>
                                                 <span class="freelancer-detail-item"><strong>player's Postion : </strong>{{$profiles->area}}</span>

												<!-- Rating -->
												<div class="freelancer-rating">
													<div class="star-rating" data-rating="4.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
												</div>
                                                
                                            
												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
                                                    <a href="{{route('view')}}" class="button ripple-effect"><i style="color:white, font-weight:bold;"><<</i> Back</a>
													
												</div>
											</div>
										</div>
									</div>
								</li>

								
									

							</ul>
						</div>
					</div>
				</div>
    </div>
@endsection