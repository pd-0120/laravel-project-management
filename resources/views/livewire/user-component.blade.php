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
		<label for="example-email-input" class="col-2 col-form-label">Email:</label>
		<div class="col-10">
			<input type="email" wire:model="state.email" class="form-control @error('state.email') is-invalid @enderror">
			@error('state.email')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Country:</label>
		<div class="col-10">
			<select wire:model="state.country" class="form-control @error('state.country') is-invalid @enderror">
				<option value="">Select</option>
				@foreach ($countries as $country)
					<option value="{{ $country->id }}">{{ $country->name }}</option>
				@endforeach
			</select>
			@error('state.country')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Mobile:</label>
		<div class="col-10">
			<input type="text" wire:model="state.mobile" class="form-control @error('state.mobile') is-invalid @enderror">
			@error('state.mobile')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Address:</label>
		<div class="col-10">
			<input type="text" wire:model="state.address" class="form-control @error('state.address') is-invalid @enderror">
			@error('state.address')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row" wire:ignore>
		<label for="example-email-input" class="col-2 col-form-label">DOB:</label>
		<div class="col-10">
			<input type="text" wire:model="state.dob" class="form-control date-picker @error('state.dob') is-invalid @enderror" id="date-picker">
			@error('state.dob')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Notes:</label>
		<div class="col-10">
			<input type="text" wire:model="state.notes" class="form-control @error('state.notes') is-invalid @enderror">
			@error('state.notes')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	@if (Route::currentRouteName() !== "profile")
		<div class="form-group row">
			<label for="example-email-input" class="col-2 col-form-label">Role:</label>
			<div class="col-10">
				<select wire:model="state.role" class="form-control @error('state.role') is-invalid @enderror">
					<option value="">Select</option>
					@foreach ($roles as $role)
					<option value="{{ $role->name }}">{{ $role->name }}</option>
					@endforeach
				</select>
				@error('state.role')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
		</div>
	@endif

	<div class="form-group row">
		<div class="col-6">
			<button type="submit" class="btn btn-success font-weight-bold mr-2">Submit</button>
			<button type="button" class="btn btn-light-success font-weight-bold">Cancel</button>
		</div>
	</div>
</form>

@push('js')
<script>
	const date_picker = $('#date-picker');
		date_picker.on('change', function(event){
            const data = date_picker.val()
            @this.set('state.dob', data);
        })
</script>
@endpush
