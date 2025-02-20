@extends('layouts.app')

@section('content')
<div class="text-2xl font-bold mb-4">
    <h1 class="text-2xl font-bold md-4">Create New Task</h1>

    <form action="{{route ('tasks.store)}}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="task_name" class="block mb-1">Task Name</label>

            <input type="text" name="task_name" id="task" required class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="time_complexity" id="time_complexity">Time Estimate</label>
            <select name="time_complexity" id="time_complexity" required class="w-full border rounded px-3 py-2">
                <option value="1">~10 minutes</option>
                <option value="2">~30 minutes</option>
                <option value="3">~1 hour</option>
                <option value="4">~4 hours</option>
                <option value="5">~1 day</option>
            </select>
        </div>

        <div class="md-4">
            <label for="materials_required" class="block mb-1">Materials Required (Optional)</label>
        </div>
    </form>
</div>