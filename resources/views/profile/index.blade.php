@extends('templete.master')


@section('content')
<div class="intro-banner" data-background-image="{{asset ('public/images/slide1.jpg')}}">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Screening and Shortlisting management system for Nigerian professional league clubs.</strong>
						<br>
						<span>Thousands of Nigeria Scouts are willing to use <strong class="color">SSMS</strong> to give the suitable candidate based on them data provided and criteria for screening.</span>
					</h3>
				</div>
				
	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="intro-search-button">
						<button class="button ripple-effect" onclick="window.location.href='#'">Learn More</button>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">1,586</strong>
						<span>Footballers Recruitee</span>
					</li>
					<li>
						<strong class="counter">3,543</strong>
						<span>testimonies</span>
					</li>
					
				</ul>
			</div>
		</div>

	</div>
</div>


<!--
<div class="container " style="margin-top:20px;">
    

         <div class="row text-left;">
-->
           
             
            @if($profiles->all())

            @foreach($profiles as $profiles)
<!--
           <div class='medium-4 columns end' style="padding-left:20px; margin:10px;
    padding: 15px; border-radius:20px;
    box-shadow: 10px 10px 5px grey;">
              
          
               <div class="freelancer-avatar">
								<div class="verified-badge"></div>
								<img src="/storage/upload/{{$profiles->profile_image}}"  alt="">
							</div>

            
            <div style="text:left; " >
                <label for="">Name :{{$profiles->name}}</label>
                <label for="">country :{{$profiles->country}}</label>
                <label for="">Birthday :{{$profiles->dob}}</label>
                <label for="">About Me :{{$profiles->bio}}</label>
                 <a href="{{route('details',$profiles->id)}}" class="popup-with-zoom-anim button button-sliding-icon">view Profile <i class="icon-material-outline-arrow-right-alt"></i>
                </a>
                </div>
          
        </div>

-->
        <div class="row">
            <div class="container">
             <div class="freelancer-overview " >
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>
								<a href="#"><img src="/storage/upload/{{$profiles->profile_image}}"  alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4>{{$profiles->name}}</h4>
								<span><i class="icon-material-outline-location-on"></i> {{$profiles->area}}</span><br>
                                <span>{{$profiles->country}}</span>
                                
							</div>
                            
                            
							<!-- Rating -->
							<div class="freelancer-rating">
								<div class="star-rating" data-rating="4.9"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
							</div>
                            <br>
                            <a href="{{route('details',$profiles->id)}}" class="popup-with-zoom-anim button button-sliding-icon">view Profile <i class="icon-material-outline-arrow-right-alt"></i>
                </a>
						</div>
					</div>
            </div>
   

    </div>
    

        @endforeach

@endif
    </div>
</div>



    


@endsection
