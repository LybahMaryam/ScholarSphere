<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ScholarSphere | Summarize</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        background-color: #f3efe2;
        font-family: 'Georgia', serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 40px 15px;
        background-image: radial-gradient(circle at top left, #f9f5e7, #e8dfc6);
    }

    .container {
        background: #fffaf2;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(92, 64, 31, 0.15);
        border: 1px solid #d1bfa3;
        width: 100%;
        max-width: 800px;
    }

    h4 {
        font-size: 1.8rem;
        color: #5a3e1b;
        text-align: center;
        font-weight: 700;
        margin-bottom: 25px;
        border-bottom: 2px solid #c7a978;
        padding-bottom: 10px;
    }

    label {
        font-weight: 600;
        color: #6b4e2e;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #cbb78f;
        transition: 0.3s ease-in-out;
        font-size: 17px;
        padding: 15px;
        min-height: 250px;
        resize: vertical;
        background-color: #fffaf0;
    }

    .form-control:focus {
        border-color: #b9905e;
        box-shadow: 0 0 8px rgba(185, 144, 94, 0.3);
        background-color: #fffdf8;
    }

    .btn-primary {
        width: 100%;
        padding: 12px;
        font-size: 17px;
        border-radius: 10px;
        background: linear-gradient(135deg, #d4a05f, #b6853b);
        border: none;
        font-weight: 600;
        color: #fffaf2;
        transition: 0.3s ease-in-out;
        letter-spacing: 0.5px;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #e6b46c, #c79548);
        transform: scale(1.02);
    }

    .alert-success {
        background: #fbf4e1;
        color: #6a552b;
        padding: 18px;
        border-radius: 10px;
        border-left: 6px solid #b8904e;
        font-weight: 500;
        line-height: 1.6;
        text-align: justify;
    }

    footer {
        margin-top: 40px;
        text-align: center;
        font-size: 0.95rem;
        color: #8a7553;
    }

    footer a {
        color: #a9824c;
        text-decoration: none;
        margin: 0 8px;
    }

    footer a:hover {
        text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <h4>📝 Text Summarization</h4>

    <form action="{{ route('summarize') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="text" class="form-label">Enter your text below:</label>
        <textarea class="form-control" id="text" name="text" rows="10" required>{{ old('text', $text ?? '') }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Summarize</button>
    </form>

    @if (isset($summary))
      <div class="mt-4">
        <h4>📜 Summarized Text</h4>
        <p class="alert alert-success">{{ $summary }}</p>
      </div>
    @endif

    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
