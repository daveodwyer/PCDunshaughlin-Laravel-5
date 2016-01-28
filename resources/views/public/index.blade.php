@extends('public.includes.master')

    @section('content')
    	<div class="container">
			<div id="homepage-main">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-6" id="homepage-featured-txt">
						<h1>In Safe Hands</h1>
						{!! $page['content'] !!}

						<a class="btn btn-primary" href="/services-and-prices" id="services-btn">View our Services</a>
					</div>

					<div class="col-xs-12 col-md-6 col-lg-6">
						
						<div id="img-container">
							
							<div class="item span4">
								<img src="{!! asset('imgs/heatsink_psu_wires.jpg') !!}" alt="pc repair wires heatsink">
						  	</div>

						  	<div class="item span4">
								<img src="{!! asset('imgs/motherboard.jpg') !!}" alt="pc repair motherboard">
						  	</div>

							<div class="item span4">
								<img src="{!! asset('imgs/stress_relax.jpg') !!}" alt="">
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="" style="height:200px" id="map-canvas"></div>

	@stop

@section('additional_footer_assets')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	{!! Minify::javascript('/js/googlemaps.js') !!}
@stop