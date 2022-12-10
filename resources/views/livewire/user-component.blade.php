<form wire:submit.prevent='saveData'>
	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Name:</label>
		<div class="col-10">
			<input type="text" wire:model="state.name" class="form-control @error('state.name') is-invalid @enderror">
			@error('state.name')
				<div class="invalid-feedback">${{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Email:</label>
		<div class="col-10">
			<input type="email" wire:model="state.email" class="form-control @error('state.email') is-invalid @enderror">
			@error('state.email')
				<div class="invalid-feedback">${{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Mobile:</label>
		<div class="col-10">
			<input type="text" wire:model="state.mobile" class="form-control @error('state.mobile') is-invalid @enderror">
			@error('state.mobile')
				<div class="invalid-feedback">${{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Address:</label>
		<div class="col-10">
			<input type="text" wire:model="state.address" class="form-control @error('state.address') is-invalid @enderror">
			@error('state.address')
				<div class="invalid-feedback">${{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">DOB:</label>
		<div class="col-10">
			<input type="text" wire:model="state.dob" class="form-control @error('state.dob') is-invalid @enderror">
			@error('state.dob')
				<div class="invalid-feedback">${{ $message }}</div>
			@enderror
		</div>
	</div>
	<div class="form-group row">
		<div class="col-2">
			<button type="submit" class="btn btn-success font-weight-bold mr-2">Submit</button>
			<button type="submit" class="btn btn-light-success font-weight-bold">Cancel</button>
		</div>
	</div>
</form>
