<form wire:submit.prevent='saveData'>
	<div class="form-group row">
		<label class="col-2 col-form-label">Title:</label>
		<div class="col-10">
			<input type="text" wire:model="state.title" class="form-control @error('state.title') is-invalid @enderror">
			@error('state.title')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	@if(count($projects) > 0)
	<div class="form-group row">
		<label class="col-2 col-form-label">Name:</label>
		<div class="col-10">
			<select wire:model="state.project_id" class="form-control selectpicker">
				<option value="">Select</option>
				@forelse ($projects as $project)
				<option value="{{ $project->id }}">{{ $project->name }}</option>
				@empty
				@endforelse
			</select>
		</div>
	</div>
	@endif
	<div class="form-group row">
		<label class="col-2 col-form-label">Description:</label>
		<div class="col-10">
			<textarea name="text-editor" wire:model="state.description" class="form-control text-editor" cols="30" rows="10"></textarea>

			@error('state.description')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<div class="col-6">
			<button type="submit" class="btn btn-success font-weight-bold mr-2">Submit</button>
			<a  class="btn btn-light-success font-weight-bold" href="{{ route('notes.index') }}">Cancel</a>
		</div>
	</div>
</form>
@push('js')
<script src="{{ asset('assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
<script>
	var ProjectTinymce = function () {
		// Private functions
		var textEditor = function () {
			if($('.text-editor').length > 0)
			tinymce.init({
				selector: '.text-editor',
				menubar: false,
				toolbar: ['styleselect fontselect fontsizeselect',
					'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
					'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],
				plugins : 'advlist autolink link image lists charmap print preview code'
			});
		}
		const selectPicker = function () {
			$('.selectpicker').selectpicker();
		}
		return {
			init: function() {
				textEditor();
				selectPicker();
			}
		};
	}();

	jQuery(document).ready(function() {
		ProjectTinymce.init();
	});
</script>
@endpush
