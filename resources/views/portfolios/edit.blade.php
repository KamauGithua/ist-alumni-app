<!-- edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('portfolios.update', $portfolio) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Form fields for basic_info, education, work_experience, skills, personal_projects -->
        <button type="submit" class="btn btn-primary">Update Portfolio</button>
    </form>
</div>
@endsection
