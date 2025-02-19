
@extends('layouts.app')
@section('content')
<h2 class="text-2xl font-semibold">All Tasks</h2>

<ul>
    @forelse($tasks as $task)
    <li class="mb-2">
        {{ $task -> task_name}}
    </li>
    @empty
    <li>No tasks yet.</li>
    @endforelse
</ul>
<div class="mt-4">
   <a href="{{route('tasks.create) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
    Create a new task
   </a>
</div>
@endsection
