<h1>Create Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <label for="title">Title</label>
    <input type="text" id="title" name="title">

    <label for="description">Description</label>
    <textarea id="description" name="description"></textarea>

    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject">

    <label for="due_date">Due date</label>
    <input type="date" id="due_date" name="due_date">

    <button type="submit">Create Task</button>
</form>