@extends('templete.master')


@section('content')





<div class="container " style="margin-top:20px;">
    
    
    <div class="clear-fix"></div>
    
         <div class="row text-left;">
     
            <nav id="breadcrumbs" class="dark">
                    
					<ul>
                        <li><a href="/home">Home</a></li>
                        <li>Search results</li>
					</ul>
				</nav>
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
								<span> {{$profiles->area}}</span><br>
                                <span><i class="icon-material-outline-location-on"></i>{{$profiles->country}}</span>
                                
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
