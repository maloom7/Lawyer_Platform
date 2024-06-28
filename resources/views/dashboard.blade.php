{{-- <!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
</body>
</html> --}}

<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <ul>
        <li><a href="{{ route('tasks.index') }}">Manage Tasks</a></li>
        <li><a href="{{ route('cases.index') }}">Manage Cases</a></li>
        <!-- أضف الروابط للخدمات الأخرى هنا -->
    </ul>
@endsection
