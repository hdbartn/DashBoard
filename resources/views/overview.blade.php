@extends ('layout.app')

@section ('content')

<p></p>
<h1>Alle taken</h1>
    <div class="row">
		<div class="col">
			@foreach ($tasks as $task)
				<a href="/tasks/{{ $task->id }}" class="list-group-item list-group-item-action list-group-item-info">
					{{ $task->name }}
				</a>
			@endforeach
		</div>
	</div>
@endsection
