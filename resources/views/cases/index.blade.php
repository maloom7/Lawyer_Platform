<!-- resources/views/cases/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Cases</h1>
    <a href="{{ route('cases.create') }}">Create Case</a>
    <ul>
        @foreach ($cases as $case)
            <li>{{ $case->title }} - {{ $case->description }}</li>
        @endforeach
    </ul>
@endsection
