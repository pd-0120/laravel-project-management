<form wire:submit.prevent='saveData'>
	<div class="row">
		<div class="col-md-3 form-group">
			<label for="project">Select Project:</label>
			<select wire:model="state.project_id" class="form-control @error('state.project_id') is-invalid @enderror">
				<option>select</option>
				@forelse ($projects as $project)
					<option value="{{ $project->id }}">{{ $project->name }}</option>
				@empty
				@endforelse
			</select>
			@error('state.project_id')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>

		<div class="col-md-3 form-group">
			<label for="project">Select Time:</label>
			<select wire:model="state.time" class="form-control @error('state.time') is-invalid @enderror">
				<option>select</option>
				@forelse ($timeIntervals as $timeInterval)
				<option value="{{ $timeInterval }}">{{ $timeInterval }}</option>
				@empty
				@endforelse
			</select>
			@error('state.time')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>

		<div class="form-group col-md-3" wire:ignore>
			<label for="example-email-input">Date:</label>
			<input type="text" wire:model="state.date" class="form-control date-picker @error('state.date') is-invalid @enderror"
				id="date-picker">
			@error('state.date')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>

		<div class="col-md-3 form-group">
			<label for="description">Task Description:</label>
			<textarea wire:model="state.description" cols="30" rows="5" class="form-control @error('state.description') is-invalid @enderror"></textarea>
			@error('state.description')
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

@push('js')
<script>
	const date_picker = $('#date-picker');
		date_picker.on('change', function(event){
            const data = date_picker.val()
            @this.set('state.date', data);
        })
</script>
@endpush
