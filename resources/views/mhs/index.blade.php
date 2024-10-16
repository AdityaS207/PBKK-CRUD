<!-- resources/views/mhs/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    @if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
    </div>
    @endif
    <h1 class="mb-4">Mahasiswa List</h1>
    <a href="{{ route('mhs.create') }}" class="btn btn-primary mb-3">Create New Mahasiswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>NRP</th>
                <th>Alamat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mhs as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->id }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->nrp }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
                <td>
                    <a href="{{ route('mhs.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mhs.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>