@extends('admin.template')

@section('content')

	<div class="alert-box admin-title">
		<h3>Pages</h3>
	</div>

	<div class="page-list">

		@if (isset($pages))

			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Responsive Hover Table</h3>
							<div class="box-tools">
								<div class="input-group" style="width: 150px;">
									<input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
									<div class="input-group-btn">
										<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
									</div>
								</div>
							</div>
						</div><!-- /.box-header -->
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover">
								<tr>
									<th>Title</th>
									<th>Slug</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>

								@foreach ($pages as $page)

									<tr>
										<td width="20">{!! link_to_route('admin.page.edit', $page->title, [$page->id]) !!} </td>
										<td width="20">{!! $page->slug !!}</td>
										<td width="20">{!! link_to_route('admin.page.edit', '', [$page->id], ['class' => 'fi-page-edit' ]) !!} </td>
										{!! Form::model($page, ['route' => ['admin.page.destroy', $page->id], 'method' => 'delete']) !!}
											<td style="color: red;" width="20">{!! Form::button('', ['type' => 'submit', 'class' => 'fi-page-delete delete-button' ]) !!} </td>
										{!! Form::close() !!}
									</tr>

								@endforeach
							</table>
							</div>
						</div>
					</div>
				</div>

		@endif
	</div>

@endsection