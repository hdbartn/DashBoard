@foreach ($active as $task)
  <div  class="list-group-item list-group-item-action list-group-item-info task-item">
    <a href="/tasks/{{ $task->id }}" style="width: max">
      {{ $task->name }}
    </a>
    <div>
      <a href="/tasks/edit/{{ $task->id }}" class="btn btn-none button-hidden">
        <i class="far fa-edit"></i>
      </a>

      <a href="/tasks/delete/{{ $task->id }}" class="btn btn-none button-hidden">
        <i class="fas fa-check"></i>
      </a>
    </div>
  </div>
@endforeach

@foreach ($done as $task)
  <div  class="list-group-item disabled task-item">
    <a href="/tasks/{{ $task->id }}" style="width: max">
        {{ $task->name }}
    </a>
    <div>
      <a href="/tasks/edit/{{ $task->id }}" class="btn btn-none button-hidden">
        <i class="far fa-edit"></i>
      </a>
      <a href="/tasks/delete/{{ $task->id }}" class="btn btn-none button-hidden">
        <i class="fas fa-trash"></i>
      </a>
    </div>
  </div>
@endforeach
