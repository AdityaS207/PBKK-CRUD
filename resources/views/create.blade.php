<!-- resources/views/mhs/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>List of MHS</title>
</head>
<body>
    <h1>List of MHS</h1>
    <a href="{{ route('mhs.create') }}">Create New MHS</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($mhs as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <a href="{{ route('mhs.show', $item->id) }}">View</a>
                <a href="{{ route('mhs.edit', $item->id) }}">Edit</a>
                <form action="{{ route('mhs.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>