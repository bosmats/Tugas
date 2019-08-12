@extends('adminlte::page')
@section('title', 'Categories')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Kategori</li>
			</ul>
			<p>
				<a href="{{ route('categories.create') }}" class="btn btn-primary modal-show">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah </a>
			</p>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Kategori</h2>
				</div>
				<div class="panel-body">
					<table id="datatable" class="table table-hover" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Kategori</th>
								<th>Deskripsi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
	$('#datatable').DataTable({
		responsive: true,
		processing: true,
		serverSide: true,
		ajax: "{{ route('table.categories') }}",
		columns: [{
				data: 'DT_RowIndex',
				name: 'id'
			},
			{
				data: 'name',
				name: 'name'
			},
			{
				data: 'description',
				name: 'description'
			},
			{
				data: 'action',
				name: 'action'
			}
		]
	});
</script>
@endpush