@extends ('layout.app')

@section ('content')

<h1>{{ $task->name }}</h1>
<div class="text-secondary">
    Created at: {{ $task->created_at->toFormattedDateString() }}
</div>
        <p>{{ $task->content }}</p>
    {{ $task }}

@endsection