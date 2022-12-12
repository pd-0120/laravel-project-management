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
		<label for="example-email-input" class="col-2 col-form-label">URL:</label>
		<div class="col-10">
			<input type="text" wire:model="state.url" class="form-control @error('state.url') is-invalid @enderror">
			@error('state.url')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Charge:</label>
		<div class="col-10">
			<input type="number" wire:model="state.charge" class="form-control @error('state.charge') is-invalid @enderror">
			@error('state.charge')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Currency:</label>
		<div class="col-10">
			<select wire:model="state.currency" class="form-control @error('state.currency') is-invalid @enderror">
				<option value="">Select</option>
				@foreach ($currencies as $currency)
				<option value="{{ $currency->id }}">{{ $currency->currencyName }}</option>
				@endforeach
			</select>
			@error('state.currency')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Cleint:</label>
		<div class="col-10">
			<select wire:model="state.user_id" class="form-control @error('state.user_id') is-invalid @enderror">
				<option value="">Select</option>
				@foreach ($users as $user)
				<option value="{{ $user->id }}">{{ $user->name }}</option>
				@endforeach
			</select>
			@error('state.user_id')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Technology:</label>
		<div class="col-10">
			<select wire:model="state.technology_id" class="form-control @error('state.technology_id') is-invalid @enderror">
				<option value="">Select</option>
				@foreach ($technologies as $technology)
				<option value="{{ $technology->id }}">{{ $technology->name }}</option>
				@endforeach
			</select>
			@error('state.technology_id')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Domain:</label>
		<div class="col-10">
			<select wire:model="state.domain_id" class="form-control @error('state.domain_id') is-invalid @enderror">
				<option value="">Select</option>
				@foreach ($domains as $domain)
				<option value="{{ $domain->id }}">{{ $domain->name }}</option>
				@endforeach
			</select>
			@error('state.domain_id')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label">Charge Cycle:</label>
		<div class="col-10">
			<select wire:model="state.charge_cycle" class="form-control @error('state.charge_cycle') is-invalid @enderror">
				<option value="">Select</option>
				@foreach ($chargeCycles as $chargeCycle)
				<option value="{{ $chargeCycle }}">{{ $chargeCycle }}</option>
				@endforeach
			</select>
			@error('state.charge_cycle')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		<div class="col-6">
			<button type="submit" class="btn btn-success font-weight-bold mr-2">Submit</button>
			<button type="button" class="btn btn-light-success font-weight-bold">Cancel</button>
		</div>
	</div>
</form>
