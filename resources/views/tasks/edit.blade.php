@extends ('layout.app')

@section ('content')
<p></p>
<h1>Taak bewerken</h1>
<div class="row">
	<div class="col">
		<form method="post">
			<div class="form-group">
				<label>Naam</label>
				<input name="name" class="form-control" placeholder="Naam" value="{{ $task->name }}" required>
			</div>
			<div class="form-group">
				@csrf
				<label>Beschrijving</label>
				<textarea name="description" class="form-control" placeholder="Beschrijving">{{ $task->content }}</textarea>
			</div>
			<input class="btn btn-primary" type="submit" value="Opslaan">
		</form>
	</div>
</div>

@endsection