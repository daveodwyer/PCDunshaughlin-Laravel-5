@extends('public.includes.master')
    @section('content')
	<div id="generic-main" class="container">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<h1>{{ $page['title'] }}</h1>
				{!! $page['content'] !!}
			</div>
	</div>
	@stop

	@section('additional_footer_assets')
		<link rel="stylesheet" href="{{ asset('css/footable.core.min.css') }}" />

		{!! Minify::javascript('/js/footable.js') !!}
		{!! Minify::javascriptDir('/js/FooTableIncs') !!}

		{!! Html::script('js/footable.custom.js') !!}
	@stop