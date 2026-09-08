<!DOCTYPE html>
<html>
<head>
    <title>KnitLog - Create Project</title>
</head>
<body>
    <h1>Create Knitting Project</h1>

    <form method="POST" action="/projects">
        @csrf

        <div>
            <label for="name">Project Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div>
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="planned">Planned</option>
                <option value="in_progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <div>
            <label for="progress">Progress (%)</label>
            <input type="number" id="progress" name="progress" min="0" max="100" value="0">
        </div>

        <div>
            <label for="start_date">Start Date</label>
            <input type="date" id="start_date" name="start_date">
        </div>

        <div>
            <label for="notes">Notes</label>
            <textarea id="notes" name="notes"></textarea>
        </div>

        <button type="submit">Create Project</button>
    </form>
</body>
</html>