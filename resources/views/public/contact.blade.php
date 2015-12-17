@extends('public.includes.master')

    @section('content')
        <div id="generic-main" class="container">
            <h1>Contact Us</h1>
            <div id="error-cont"><ol></ol></div>

            @if ($errors->has())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            {!! Form::open(array('action' => array('ContactFormController@store'), 'id' => 'contact-form' ) ) !!}
                <fieldset>

                    <!-- Text input-->
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', Input::old('name'), ['class' => 'form-control', 'placeholder' => 'Enter your name']) !!}
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'Enter your email']) !!}
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        {!! Form::label('phone', 'Contact Number:') !!}
                        {!! Form::text('phone', Input::old('phone'), ['class' => 'form-control', 'placeholder' => 'Enter your contact number']) !!}
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        {!! Form::label('query', 'Enter your Query:') !!}
                        {!! Form::textarea('query', Input::old('query'), ['class' => 'form-control', 'placeholder' => 'Enter your query']) !!}
                    </div>

                    <!-- Submit -->
                    <div class="form-group">
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>

                </fieldset>
            </form>
        </div>
    
    <div class="" style="height:200px" id="map-canvas"></div>
    @stop


@section('additional_footer_assets')
    {!! Html::script('js/jquery.validate.min.js') !!}
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    {!! Minify::javascript('/js/googlemaps.js') !!}
@stop