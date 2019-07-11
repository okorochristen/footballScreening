@extends('templete.master')
@section('title','Create|profile')
@section('content')
<div class="dashboard-container">

	
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
                            <div class="dashboard-headline">
				<span>We are glad to see you again!{{ Auth::user()->name }} </span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/home">Dashboard</a></li>
                        <li><a href="manage"> Manage Players</a></li>
					</ul>
				</nav>
			</div>
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