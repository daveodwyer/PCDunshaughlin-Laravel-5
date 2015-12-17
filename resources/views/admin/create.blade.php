@extends('admin.template')

@section('title')
Create a Page
@endsection

@section('content')

	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Add a Page</h3>
		</div>

		{!! Form::open(['route' => 'admin.page.store', 'role' => 'form', 'id' => 'page_form']) !!}

			<div class="box-body">

				<div class="form-group">
					{!! Form::label('title', 'Enter a Title:', ['class' => 'e']) !!}
					{!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title...']) !!}
					{!! FormErrors::errors_for('title', $errors ) !!}
				</div>

				<div class="form-group">
					{!! Form::label('Enter your content')!!}
					{!! Form::textarea('content', null, ['name' => 'content', 'class' => 'form-control']) !!}
					{!! FormErrors::errors_for('content', $errors ) !!}
				</div>

				<div class="form-group">
					{!! Form::label('Choose a view')!!}
					{!! Form::select('view', ViewLibrary::getViewListNames(), null, ['class' => 'form-control'] ) !!}
					{!! FormErrors::errors_for('view', $errors ) !!}
				</div>

				<div class="form-group">
					{!! Form::label('Enter a slug')!!}
					{!! Form::text('slug', '', ['class' => 'form-control', 'placeholder' => 'slug...']) !!}
					{!! FormErrors::errors_for('slug', $errors ) !!}
				</div>

				<div class="form-group">
					{!! Form::label('Show in Navigation?')!!}
					{!! Form::select('show_in_nav', ['no' => 'No', 'yes' => 'Yes'], null, ['id' => 'show_in_nav', 'class' => 'form-control'] ) !!}
				</div>

				<div class="form-group">
					{!! Form::label('Navigation Order')!!}
					{!! Form::select('nav_order', Page::getNavigationOrders(), null, ['class' => 'form-control'] ) !!}
				</div>
			</div>

			<div class="box-footer">
				{!! Form::submit('Add Page', ['class' => 'btn btn-primary']) !!}
			</div>

		{!! Form::close()!!}
	</div>
@endsection


@section('footer_scripts')

	{!! Html::script('admin-assets/js/custom.admin.pages.js') !!}
	<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>

	<script>
		$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('content');
		});
	</script>


@endsection