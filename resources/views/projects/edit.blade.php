<!DOCTYPE html>
<html>
<head>
    <title>KnitLog - Edit Project</title>
</head>
<body>
    <h1>Edit Knitting Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Project Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ $project->name }}"
                required
            >
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ $project->description }}</textarea>
        </div>

        <div>
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="planned" {{ $project->status === 'planned' ? 'selected' : '' }}>
                    Planned
                </option>
                <option value="in_progress" {{ $project->status === 'in_progress' ? 'selected' : '' }}>
                    In Progress
                </option>
                <option value="completed" {{ $project->status === 'completed' ? 'selected' : '' }}>
                    Completed
                </option>
            </select>
        </div>

        <div>
            <label for="progress">Progress (%)</label>
            <input
                type="number"
                id="progress"
                name="progress"
                min="0"
                max="100"
                value="{{ $project->progress }}"
            >
        </div>

        <div>
            <label for="start_date">Start Date</label>
            <input
                type="date"
                id="start_date"
                name="start_date"
                value="{{ $project->start_date }}"
            >
        </div>

        <div>
            <label for="notes">Notes</label>
            <textarea id="notes" name="notes">{{ $project->notes }}</textarea>
        </div>

        <button type="submit">Update Project</button>
    </form>
</body>
</html>