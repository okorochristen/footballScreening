@extends('templete.master')
@section('title','Create|profile')
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
							<li class="active"><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="{{route('view')}}"><i class="icon-material-outline-rate-review"></i> Views</a></li>
                            <li><a href="{{route('create')}}"><i class="icon-material-outline-assignment"></i> Create Profile</a></li>
                            <li><a href="{{route('manage')}}"><i class="icon-material-outline-business-center"></i>Manage Players</a></li>
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
<div class="dashboard-content-inner" style="min-height: 275px;">
			
			<!-- Dashboard Headline -->
			
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Player's Submission Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								

<div class="container ">
  <div class="row">
  <div class="col-md-9">

      @if($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
      <strong><h3>{{$message}}</h3></strong>
      </div>
      @endif

{{-- form starts here --}}

  <form method="post"  enctype="multipart/form-data">

    @csrf

                        <label for=""><h3>Create Profile:</h3></label>
                            <div class="row">  
                                <div class="form-group col-xl-3">
                                  <label for="">Name:</label>
                                  <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Your Name" required>
                                </div>

                                <div class=" col-xl-3">
                                  <label for="">Birthday:</label>
                                  <input type="date" class="form-control" name="dob" id="" aria-describedby="helpId" placeholder="Birthday" required>
                                </div>

                                <div class="form-group col-xl-3">
                                    <label for="">Position:</label>
                                    <input type="text" class="form-control" name="area" id="" aria-describedby="helpId" placeholder="position" required>
                                </div> 

                                <div class="form-group col-xl-3">
                                    <label for="">Age:</label>
                                    <input type="number" class="form-control" name="age" id="" aria-describedby="helpId" placeholder="overall stat" required> 
                                </div> 

                                <div class="form-group col-xl-3">
                                    <label for="">Overall</label>
                                    <input type="number" class="form-control" name="overall" id="" aria-describedby="helpId" placeholder="overall" required>
                                 </div> 


                                  <div class="form-group col-xl-6">
                                    <label for="">Country & clubsite:</label>
                                    <input type="text" class="form-control" name="country" id="" aria-describedby="helpId" placeholder="country" required>
                                 </div>  
                                <div class="form-group col-xl-3">
                                    <label for="">gender:</label>
                                    <input type="text" class="form-control" name="gender" id="" aria-describedby="helpId" placeholder="gender" required>
                                 </div>    
                             </div>
    
      
    
                             <div class="form-group">
                                <label for="">About</label>
                                <textarea class="form-control" name="bio" id="" rows="3" placeholder="about you"></textarea>
                             </div>
                            <div>
                                <label for="">upload:</label>
                                <input type="file" name="profile_image" id="" class="form-control" required>
                            </div> 
     
     
                            <input type="submit" class="btn btn-primary" value="Submit">





                    </form>
{{-- end of the form --}}
      

</div>

  </div>

</div>
			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer" style="padding-top: 124.5px;"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2018 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Facebook">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Twitter">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Google Plus">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="LinkedIn">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
@endsection