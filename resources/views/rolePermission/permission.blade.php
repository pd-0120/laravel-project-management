@extends('layouts.master')

@section('contents')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <x-page-subheader :pagename="'Permissions'"/>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">Permissions</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-separate table-head-custom table-checkable" id="datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Gaurd Name</th>
                                    <th>Module Name</th>
                                    <th>Route Name</th>
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
				ajax:"{{ route('permissions') }}",
				columns:[
					{data:'name' , name:'name'},
					{data:'guard_name' , name:'guard_name'},
                    {data:'module_name' , name:'module_name'},
					{data:'route_name' , name:'route_name'},
				]
			});
		});
	</script>
@endpush
