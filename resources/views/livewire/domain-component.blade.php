<form wire:submit.prevent='saveData'>
	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Name:</label>
		<div class="col-10">
			<input type="text" wire:model="state.name" class="form-control @error('state.name') is-invalid @enderror">
			@error('state.name')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Description:</label>
		<div class="col-10">
			<input type="text" wire:model="state.description" class="form-control @error('state.description') is-invalid @enderror">
			@error('state.description')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<div class="col-6">
			<button type="submit" class="btn btn-success font-weight-bold mr-2">Submit</button>
			<a  class="btn btn-light-success font-weight-bold" href="{{ route('domains.index') }}">Cancel</a>
		</div>
	</div>
</form>
