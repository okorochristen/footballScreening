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


<!-- Features Cities / End -->


@endsection