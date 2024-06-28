<!-- resources/views/cases/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Case</h1>
    <form action="{{ route('cases.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <button type="submit">Create</button>
    </form>
@endsection
