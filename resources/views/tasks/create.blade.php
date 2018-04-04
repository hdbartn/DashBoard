@extends ('layout.app')

@section ('content')
<p></p>
<h1>Taak aanmaken</h1>
<div class="row">
	<div class="col">
		<form action="/store" method="post">
			<div class="form-group">
				<label>Naam</label>
				<input name="name" class="form-control" placeholder="Naam" required>
			</div>
			<div class="form-group">
				@csrf
				<label>Beschrijving</label>
				<textarea name="description" class="form-control" placeholder="Beschrijving" ></textarea>
			</div>
			<input class="btn btn-primary" type="submit" value="Opslaan">
		</form>
	</div>
</div>

@endsection