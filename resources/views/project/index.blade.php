@extends('layouts.master')

@push('css')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('contents')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<x-page-subheader :pagename="'Projects'" />
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="card card-custom gutter-b">
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title">
						<h3 class="card-label">Projects</h3>
					</div>
					<div class="card-toolbar">
						<a class="btn btn-primary font-weight-bolder" href="{{ route('projects.create') }}>
							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<circle fill="#000000" cx="9" cy="15" r="6"></circle>
										<path
											d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
											fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>New Project</a>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-separate table-head-custom table-checkable" id="datatable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Gaurd</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>

<div class="modal fade" id="createRole" tabindex="-1" role="dialog" aria-labelledby="createRole" aria-hidden="true">
	<div class="modal-dialog  modal-lg" role="document">
		<div class="modal-content">
			{!! Form::open(['route' => 'storeRole']) !!}
			<div class="modal-header">
				<h5 class="modal-title">Role</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group row">
					<label class="col-lg-3 col-form-label">Role Name:</label>
					<div class="col-lg-6">
						<input type="hidden" name="role-id" id="role-id">
						<input type="text" class="form-control" placeholder="Role name" name="name" id="name"
							required />
						<span class="form-text text-muted">Please enter role name</span>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
@push('js')
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
	$(document).ready(function (){
			const datatable = $('#datatable').DataTable({
				processing:true,
				pageLength: 20,
				lengthMenu: [
					[10,20,40,80,-1], [10, 20,40,80,"All"]
				],
				serverSide: true,
				scrollX: true,
				ajax:"{{ route('Projects') }}",
				columns:[
					{data:'name' , name:'name'},
					{data:'guard_name' , name:'guard_name'},
					{data:'action' , name:'action', orderable: false, searchable:false},
				]
			});

            $(document).on('click', '.edit-role', function() {
                $('#role-id').val($(this).data('id'))
                $('#name').val($(this).data('name'))

                $('#createRole').modal('show');
            })

            $(document).on('click', '.delete-role', function() {
                const roleId = $(this).data('id')
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then(function(result) {
                    if (result.isConfirmed) {
                        document.getElementById(`delete-${roleId}`).submit()
                    } else if (result.dismiss === "cancel") {
                        Swal.fire("Cancelled", "", "error")
                    }
                });
            })
		});
</script>
@endpush
