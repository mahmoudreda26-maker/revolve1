<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>

<form method="POST" action="/upload" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <button type="submit">Upload</button>
</form>

@if(isset($path))
    <h3>Uploaded Image:</h3>
    <img src="{{ asset('storage/' . $path) }}" width="200">
@endif

</body>
</html>
