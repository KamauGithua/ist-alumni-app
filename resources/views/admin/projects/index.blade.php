<h2>Pending Projects for Validation</h2>

<ul>
    @foreach($projects as $project)
        <li>
            {{ $project->title }} - Submitted by {{ $project->alumni->name }}
            <form action="{{ route('admin.projects.validate', $project) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success">Validate</button>
            </form>
        </li>
    @endforeach
</ul>
