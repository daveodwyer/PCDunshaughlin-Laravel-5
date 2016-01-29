<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--
		<meta name="description" content="">
		<meta name="keywords" content="">
		-->
		<title>{{ $page->title }} | PCDunshaughlin</title>
		<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" />
		{!! Minify::stylesheet('/css/custom.css') !!}
		<link rel="stylesheet" href="{!! asset('css/owl.carousel.css') !!}" />

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-10517222-1', 'auto');
			ga('send', 'pageview');

		</script>

		@yield('additional_header_assets')

	</head>

	<body>
		<!-- THANKS FOR PEEKING! :) http://www.daveodwyer.ie -->
	    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="/"><img class="img-responsive" src="{{ asset('imgs/pc-logo.png') }}" /></a>

	        </div>

	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	          	@foreach( Page::getNavigation() as $page_name => $path )
	          		<li><a href="{{ $path }}">{{ $page_name }}</a></li>
	          	@endforeach
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

	    <div class="clearfix"></div>

	    @yield('content')


		<div id="footer">

			<div class="container">

				<div id="footer-icons">

					<div id="built-with" class="col-lg-6 col-md-1 col-sm-6 ">
						<a href="http://www.laravel.com" target="_BLANK"><img alt="Built with love using Laravel" src=" {{ asset('/imgs/laravel-logo.png') }}"/></a>
						<!-- Hi there! This site was built and designed with Bootstrap and Laravel by Dave O'Dwyer :: http://daveodwyer.ie -->
					</div>

					<div id="social-icons" class="col-lg-1 col-md-1 col-sm-6 col-lg-offset-5">
						<a href="https://www.facebook.com/pcdunshaughlin" target="_BLANK"><img src="{{ asset('imgs/facebook_footer.png')}}" alt="PCDunshaughlin Facebook Page" /></a>
					</div>

				</div>

			</div>

		</div>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		{!! Html::script('js/jquery-1.11.1.min.js') !!}
		{!! Html::script('js/bootstrap.min.js') !!}
		{!! Minify::javascript(array('/js/owl.carousel.js', '/js/custom.js')) !!}

@yield('additional_footer_assets')


</body>
</html>

      <!-- <div class="fb-like fb-like-desktop" data-href="http://www.pcdunshaughlin.com" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div> -->