@extends('templete.master')
@section('content')
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="{{url('home')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="{{route('view')}}"><i class="icon-material-outline-rate-review"></i> Views</a></li>
                            <li><a href="{{route('create')}}"><i class="icon-material-outline-assignment"></i> Create Profile</a></li>
                            <li><a href="{{route('manage')}}"><i class="icon-material-outline-business-center"></i>Manage Players</a></li>
                           <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                               
<i class="icon-material-outline-power-settings-new"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
<!--
                            
-->
                        </ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<span>We are glad to see you again!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
                    
					<ul>
						<li><a href="#">Home</a></li>
						<li>Dashboard</li>
                        <li>Manage Players</li>
					</ul>
				</nav>
			</div>
	
			<!-- Fun Facts Container -->
			<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-supervisor-account"></i>Players</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
                                 @if($profiles->all())

                                @foreach($profiles as $profiles)
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="verified-badge"></div>
												<a href="#"><img src="/storage/upload/{{$profiles->profile_image}}" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#">{{$profiles->name}} <img class="flag" src="images/flags/de.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Germany"></a></h4>

												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#">{{$profiles->country}}</a></span>

												<!-- Rating -->
												<div class="freelancer-rating">
													<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
												</div>


												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-0">
													<a href="#" class="popup-with-zoom-anim button ripple-effect"><i class="icon-material-outline-check"></i> Edit</a>
													<a href="{{ route('delete',$profiles->id)}}" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove Bid"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>
                                <br>
                                @endforeach
                                @endif
                                
								

							</ul>
						</div>
					</div>
				</div>
                
			</div>
			
			<!-- Row -->
			
		
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->

<!-- Apply for a job popup / End -->
@endsection