<!-- resources/views/mhs/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Mahasiswa</title>
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
    <h1 class="mb-4">Create Mahasiswa</h1>
    <form action="{{ route('mhs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Name:</label>
            <input type="text" id="nama" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="nrp">NRP:</label>
            <input type="text" id="nrp" name="nrp" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('mhs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>