<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 700px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background:rgb(97, 68, 6);
            color: white;
            cursor: pointer;
        }
        button:hover {
            background:rgb(160, 145, 69);
        }
        .resources {
            margin-top: 20px;
        }
        .resource {
            background: #fff8e1;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }
        .resource a {
            color: #f4a742;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>E-Library</h2>

    <!-- Upload Form -->
    <form action="{{ route('elibrary.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" required>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" required>
        </div>

        <div class="form-group">
            <label for="file">Upload File (PDF, DOC, TXT)</label>
            <input type="file" name="file">
        </div>

        <div class="form-group">
            <label for="link">External Link (Optional)</label>
            <input type="url" name="link">
        </div>

        <button type="submit">Upload</button>
    </form>

    <!-- Display Uploaded Resources -->
    <div class="resources">
        <h3>Library Resources</h3>
        @if($resources->count() > 0)
    @foreach($resources as $resource)
        <div class="resource">
            <strong>{{ $resource->title }}</strong> by {{ $resource->author }} <br>
            @if($resource->file_path)
                📄 <a href="{{ asset('storage/' . $resource->file_path) }}" target="_blank">Download File</a>
            @endif
            @if($resource->link)
                🔗 <a href="{{ $resource->link }}" target="_blank">View Link</a>
            @endif
            <br><small>Uploaded by: {{ $resource->user->name }}</small>
        </div>
    @endforeach
@else
    <p>No resources uploaded yet.</p>
@endif

    </div>
</div>

</body>
</html>
