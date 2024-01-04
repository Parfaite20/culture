
<header id="top-header" class="site-header">
		<div class="wrapper">
			<div class="site-identity">
				<a href="/" class="custom-logo-link" rel="home" title="Visit homepage"><img src="assets/images/logo.png" class="custom-logo" width="131" height="36" alt="Bateria"><img src="assets/images/logo-dark.png" class="custom-logo alt-version" width="131" height="36" alt="Bateria"></a>
				<p class="site-description screen-reader-text">Premium Podcast HTML Template</p>
			</div>
			<div id="menu-toggle" class="mobile-menu-toggle">
				<a href="#menu-main" title="Toggle menu"><em class="mdi mdi-menu"></em><em class="mdi mdi-close"></em></a>
			</div>
			<nav class="main-navigation">
				<ul id="menu-main" class="menu"> 
					
					<li class="menu-item-has-children">
						<a href="episodes.html">Episodes<em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="episodes.html">Episodes (sidebar)</a></li>
							<li><a href="episodes-grid.html">Episodes (grid)</a></li>
							<li><a href="episodes-list.html">Episodes (list)</a></li>
							<li><a href="single-episode.html">Audio episode</a></li>
							<li><a href="single-episode-video.html">Video episode</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="blog.html">Blog<em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="blog.html">Browse posts</a></li>
							<li><a href="single-post.html">Single post</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="shop.html">Shop<em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="shop.html">Right sidebar (2 cols)</a></li>
							<li><a href="shop-wide.html">Fullwidth (3 cols)</a></li>
							<li><a href="shop-cart.html">Cart</a></li>
							<li><a href="shop-checkout.html">Checkout</a></li>
							<li><a href="single-product.html">Single product</a></li> 
						</ul>
					</li>
					@if(Route::has('login'))
						@auth
                    		@if(Auth::user()->utype === 'ADM')
								<li class="menu-item-has-children">
									<a href="#">Mon compte ({{Auth::user()->name}})<em class="mdi mdi-chevron-down"></em></a>
									<ul class="sub-menu">
										<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>							
										<li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Se deconnecter</a></li>
										<form id='logout-form' method='post' action='{{route('logout')}}'>
											@csrf						
										</form>
									</ul>
								</li>
							@else @if(Auth::user()->utype === 'ATR')
								<li class="menu-item-has-children">
									<a href="#">Mon compte ({{Auth::user()->name}})<em class="mdi mdi-chevron-down"></em></a>
									<ul class="sub-menu">
										<li><a href="{{route('auteur.dashboard')}}">Dashboard</a></li>							
										<li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Se deconnecter</a></li>
										<form id='logout-form' method='post' action='{{route('logout')}}'>
											@csrf						
										</form>
									</ul>
								</li>	
							@else
								<li class="menu-item-has-children">
									<a href="#">Mon compte ({{Auth::user()->name}})<em class="mdi mdi-chevron-down"></em></a>
									<ul class="sub-menu">
										<li><a href="{{route('user.dashboard')}}">Dashboard</a></li>							
										<li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Se deconnecter</a></li>
										<form id='logout-form' method='post' action='{{route('logout')}}'>
											@csrf						
										</form>
									</ul>
								</li>
							@endif
							@endif
						@else
							<li class="menu-item-has-children">
								<a href="#">Compte<em class="mdi mdi-chevron-down"></em></a>
								<ul class="sub-menu">
									<li><a href="{{asset('login')}}">Login</a></li>							
									<li><a href="{{asset('register')}}">Register</a></li>
								</ul>
							</li>
						@endif
					@endif
					<li><a href="contact.html">Contact</a></li>
					<li class="menu-item-scheme">
						<a href="#" title="Toggle color scheme"><em class="mdi mdi-weather-night"></em><em class="mdi mdi-white-balance-sunny"></em><span>Toggle color scheme</span></a>
					</li>
					<li class="menu-item-search">
						<a href="#searchform" title="Toggle search"><em class="mdi mdi-magnify"></em><em class="mdi mdi-close"></em></a>
						<form class="searchform" method="get" action="blog.html" role="search">
							<label class="screen-reader-text">Search for:</label>
							<input type="search" value="" name="s" placeholder="Search&hellip;">
							<button type="submit"><em class="mdi mdi-magnify"></em><span class="screen-reader-text">Search</span></button>
						</form>
					</li>
					<li class="menu-item-cart">
						<a href="shop-cart.html" title="Shopping cart"><em class="mdi mdi-shopping-outline"></em><span class="cart-text">Shopping cart</span><span class="cart-total">3</span></a>
					</li>
				</ul>
			</nav>
			<!--<nav class="social-navigation">
				<ul class="menu">
					<li><a href="https://twitter.com" title="Twitter profile"><span class="screen-reader-text">Twitter profile</span></a></li>
					<li><a href="https://instagram.com" title="Instagram profile"><span class="screen-reader-text">Instagram profile</span></a></li>
					<li><a href="https://youtube.com" title="YouTube page"><span class="screen-reader-text">YouTube page</span></a></li>
				</ul>
			</nav>-->
		</div>
</header>

<header id="featured" class="site-featured">
		<div id="featured-media" class="featured-media has-overlay">
			<div class="wrapper">
				<div class="featured-episode">
					<div class="featured-episode-text">
						<p class="text-uppercase text-weight-medium text-opacity-75">Featured Episode</p>
						<h1 class="display"><a href="single-episode.html">#13: The joy of putting ideas into reality and pen to paper</a></h1>
						<p>Vince Smith met bandmates Jim Kelly and Nancy Gibbs at a Sex Pistols concert, where he tried to kiss Sid Vicious' guitar and got a bloody nose. Together they formed Aftershock.</p>
					</div>
					<div class="episode-player episode-type-audio">
						<audio><source src="https://html.liviucerchez.com/common/preview1.mp3" type="audio/mpeg" /></audio>
						<div class="media-controls">
							<button class="media-play-pause"></button>
							<button class="media-rate" data-rates="1.5 0.5 1" title="Playback speed">1x</button>
							<span class="media-current-time">00:00</span>
							<div class="media-time-rail"><span class="media-time-rail-current"></span></div>
							<span class="media-duration">00:41</span>
							<a class="media-download" href="https://html.liviucerchez.com/common/preview1.mp3" download title="Download episode (831.6 KB)"></a>
							<a class="media-transcript" href="#" title="View transcript"></a>
						</div>
					</div>
				</div>
				<div class="featured-cover">
					<a href="single-episode.html" class="shine-on-hover"><img src="tmp/sample-540x540.jpg" alt=""><span class="flash">new</span></a>
				</div>
				<div class="featured-actions">
					<div class="featured-actions-main">
						<a href="#"><span class="mdi mdi-podcast"></span> Subscribe on Apple Podcasts</a>
						<a href="#"><span class="mdi mdi-rss"></span> Subscribe using RSS Feed</a>
					</div>
					<div class="featured-actions-secondary">
						<a href="episodes.html">Browse all episodes <span class="mdi mdi-trending-neutral"></span></a>
					</div>
				</div>
			</div>
			<video src="tmp/sample-featured-video2.mp4" poster="tmp/sample-featured-video.jpg" preload="metadata" muted autoplay loop width="1320" height="756"></video>
		</div>
</header>