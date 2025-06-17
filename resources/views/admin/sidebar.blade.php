@extends('admin_main')

@section('title', 'Admin Sidebar')

@section('content')
<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.index') }}">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.posts.index') }}">Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.settings.index') }}">Settings</a>
        </li>
    </ul>
</div>
@endsection
