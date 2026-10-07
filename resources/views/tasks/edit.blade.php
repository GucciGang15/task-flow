<h1>Edit Task</h1>
<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')
<label for="title">Title</label>
<input type="text" id="title" name="title" value="{{ $task->title }}">

<label for="description">Description</label>
<textarea id="description" name="description">{{ $task->description }}</textarea>

<label for="subject">Subject</label>
<input type="text" id="subject" name="subject" value="{{ $task->subject }}">

<label for="due_date">Due date</label>
<input type="date" id="due_date" name="due_date" value="{{ $task->due_date }}">

<button type="submit">Update Task</button>
</form>