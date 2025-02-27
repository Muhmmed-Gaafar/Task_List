@extends('layouts.app')

@section('title', 'The list Of Tasks')

@section('content')

    <nav class="mb-4">
    <a href="{{ route('tasks.create') }}"
      class="font-medium   decoration-pink-500 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Add Task</a>
    </nav>

    @forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}"
            @class(['line-through' => $task->completed])>{{ $task->title }}</a>
    </div>
    @empty
    <div>There are no tasks!</div>
    @endforelse

    @if ($tasks->count())
    <nav class="mt-4" >
      {{ $tasks->links() }}
    </nav>
  @endif

@endsection
