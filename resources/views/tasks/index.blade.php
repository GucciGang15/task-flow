<h1>TaskFlow</h1>

@foreach ($tasks as $task)
    <p>{{ $task->title }}</p>

    @if ($task->completed)
        <p>Completed</p>
    @else
        <p>Pending</p>
    @endif

    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>

    <form action="{{ route('tasks.complete', $task) }}" method="POST">
        @csrf
        @method('PATCH')

        <button type="submit">Complete</button>
    </form>
@endforeach

