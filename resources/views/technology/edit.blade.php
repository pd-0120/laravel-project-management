@extends('layouts.master')

@section('contents')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<x-page-subheader :pagename="'Technology'" />
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="card card-custom">
				<div class="card-header">
					<h3 class="card-title">
						Technology
					</h3>
				</div>
				<!--begin::Form-->
				<div class="card-body">
					<livewire:technology-component :technology="$technology"/>
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
@endsection
