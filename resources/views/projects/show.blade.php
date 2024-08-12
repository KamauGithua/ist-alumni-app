<!-- resources/views/projects/show.blade.php -->

{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <div class="container">
        <h1>{{ $project->title }}</h1>

        <p>{{ $project->description }}</p>

        @if ($project->file)
            <a href="{{ Storage::url($project->file) }}" class="btn btn-primary" download>Download Project File</a>
        @endif

        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to All Projects</a>
    </div>
@endsection
