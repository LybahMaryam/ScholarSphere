<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Post | ScholarSphere</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f3efe2;
      background-image: radial-gradient(circle at top left, #f9f5e7, #e8dfc6);
      font-family: 'Georgia', serif;
      color: #5a3e1b;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 30px 15px;
    }

    .card {
      background: #fffaf2;
      border: 1px solid #d1bfa3;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(92, 64, 31, 0.15);
      padding: 35px;
      max-width: 700px;
      width: 100%;
    }

    h2 {
      font-weight: 700;
      font-size: 1.8rem;
      text-align: center;
      color: #5a3e1b;
      border-bottom: 2px solid #c7a978;
      padding-bottom: 10px;
      margin-bottom: 25px;
    }

    label {
      font-weight: 600;
      color: #6b4e2e;
    }

    .form-control {
      border-radius: 10px;
      border: 1px solid #cbb78f;
      font-size: 17px;
      background-color: #fffaf0;
      transition: 0.3s ease-in-out;
    }

    .form-control:focus {
      border-color: #b9905e;
      box-shadow: 0 0 8px rgba(185, 144, 94, 0.3);
      background-color: #fffdf8;
    }

    textarea.form-control {
      min-height: 200px;
      resize: vertical;
    }

    .btn-custom {
      background: linear-gradient(135deg, #d4a05f, #b6853b);
      color: #fffaf2;
      border: none;
      font-weight: 600;
      font-size: 17px;
      padding: 12px;
      border-radius: 10px;
      width: 100%;
      letter-spacing: 0.5px;
      transition: 0.3s ease-in-out;
    }

    .btn-custom:hover {
      background: linear-gradient(135deg, #e6b46c, #c79548);
      transform: scale(1.02);
    }

    footer {
      margin-top: 25px;
      text-align: center;
      color: #8a7553;
      font-size: 0.95rem;
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

  <div class="card">
    <h2>🖋 Create a New Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">
      @csrf
      
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter post title" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea name="content" class="form-control" placeholder="Write your scholarly thoughts..." required></textarea>
      </div>
      
      <button type="submit" class="btn-custom">Publish Post</button>
    </form>

    <footer>
      <p>
        <a href="/home">🏠 Home</a> |
       
      </p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
