<div id="wrapper" >
<header id="header-container" class="fullwidth">
	<div id="header">
		<div class="container">
			<div class="left-side">
				<div id="logo">
					<a href="index.html"><img src="images/logot.png" alt=""></a>
				</div>
				<nav id="navigation" style="float:right";>
					<ul id="responsive" >

						<li><a href="/" class="current">Home</a></li>
						
				
                        <li><a href="{{route('view')}}">View players</a></li>
                       <li> <form action="{{url('profile/search')}}" method="post"> 
            @csrf
            <input id="autocomplete-input" type="text" name="search" placeholder="search...details ">
       
                           </form></li>
					</ul>
				</nav>
			
			
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->
			</div>
			</div>
</header>
</div>    
<div class="clearfix"></div>