<!-- resources/views/mhs/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit MHS</title>
</head>
<body>
    <h1>Edit MHS</h1>
    <form action="{{ route('mhs.update', $mhs->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $mhs->name }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>