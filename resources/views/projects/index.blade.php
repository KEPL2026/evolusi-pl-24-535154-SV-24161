<!DOCTYPE html>
<html>
<head>
    <title>KnitLog - Projects</title>
</head>
<body>
    <h1>My Knitting Projects</h1>

    @forelse ($projects as $project)
        <div>
            <h2>{{ $project->name }}</h2>
            <p>{{ $project->description }}</p>

            <a href="/projects/{{ $project->id }}/edit">Edit</a>

            <form method="POST" action="/projects/{{ $project->id }}">
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>
            </form>
        </div>
    @empty
        <p>No projects yet.</p>
    @endforelse
</body>
</html>