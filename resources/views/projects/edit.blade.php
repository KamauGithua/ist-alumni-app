<!-- resources/views/projects/edit.blade.php -->

{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <div class="container">
        <h1>Edit Project</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Project Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Project Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $project->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="file">Upload New Project File (optional)</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
