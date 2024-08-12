<!-- create.blade.php -->
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="container">
    {{-- <form action="{{ route('portfolios.store') }}" method="POST">
        @csrf --}}
        <!-- Form fields for basic_info, education, work_experience, skills, personal_projects -->
        <button type="submit" class="btn btn-primary">Create Portfolio</button>
    </form>
</div>
{{-- @endsection --}}
<form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="bio">Biography</label>
        <textarea name="bio" class="form-control" required>{{ old('bio', $portfolio->bio) }}</textarea>
    </div>

    <div class="form-group">
        <label for="education">Education</label>
        <input type="text" name="education" class="form-control" value="{{ old('education', $portfolio->education) }}" required>
    </div>

    <div class="form-group">
        <label for="work_experience">Work Experience</label>
        <input type="text" name="work_experience" class="form-control" value="{{ old('work_experience', $portfolio->work_experience) }}" required>
    </div>

    <div class="form-group">
        <label for="skills">Skills</label>
        <input type="text" name="skills" class="form-control" value="{{ old('skills', $portfolio->skills) }}" required>
    </div>

    <div class="form-group">
        <label for="projects">Personal Projects</label>
        <input type="text" name="projects" class="form-control" value="{{ old('projects', $portfolio->projects) }}" required>
    </div>

    <div class="form-group">
        <label for="profile_picture">Profile Picture</label>
        <input type="file" name="profile_picture" class="form-control">
        @if($portfolio->profile_picture)
            <img src="{{ asset('storage/' . $portfolio->profile_picture) }}" alt="Profile Picture" width="100">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Save Portfolio</button>
</form>
