@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<!-- tasks/index.blade.php -->
@foreach ($tasks as $task)
    <p>{{ $task->title }}</p>
@endforeach
