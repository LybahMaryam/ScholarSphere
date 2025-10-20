<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Profile | ScholarSphere</title>
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
      padding: 20px;
    }

    .profile-card {
      background: #fffaf2;
      border: 1px solid #d1bfa3;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(92, 64, 31, 0.15);
      padding: 35px;
      width: 100%;
      max-width: 600px;
    }

    h2 {
      text-align: center;
      font-weight: 700;
      color: #5a3e1b;
      border-bottom: 2px solid #c7a978;
      padding-bottom: 10px;
      margin-bottom: 25px;
    }

    label {
      font-weight: 600;
      color: #6b4e2e;
      display: block;
      margin-top: 15px;
    }

    input[type="text"],
    input[type="url"],
    input[type="file"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border-radius: 10px;
      border: 1px solid #cbb78f;
      background-color: #fffaf0;
      font-size: 16px;
      transition: 0.3s ease-in-out;
    }

    input:focus,
    textarea:focus {
      border-color: #b9905e;
      box-shadow: 0 0 8px rgba(185, 144, 94, 0.3);
      background-color: #fffdf8;
      outline: none;
    }

    textarea {
      min-height: 120px;
      resize: vertical;
    }

    button {
      background: linear-gradient(135deg, #d4a05f, #b6853b);
      color: #fffaf2;
      border: none;
      font-weight: 600;
      font-size: 17px;
      padding: 12px;
      border-radius: 10px;
      width: 100%;
      margin-top: 25px;
      letter-spacing: 0.5px;
      transition: 0.3s ease-in-out;
    }

    button:hover {
      background: linear-gradient(135deg, #e6b46c, #c79548);
      transform: scale(1.02);
    }

    footer {
      text-align: center;
      margin-top: 25px;
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

  <div class="profile-card">
    <h2>👤 Create Your Profile</h2>

    <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <label for="name">Full Name</label>
      <input type="text" name="name" placeholder="Enter your full name" required>

      <label for="bio">Bio</label>
      <textarea name="bio" placeholder="Write a short scholarly bio..."></textarea>

      <label for="link">Website / Social Link</label>
      <input type="url" name="link" placeholder="https://example.com">

      <label for="profile_picture">Profile Image</label>
      <input type="file" name="profile_picture" accept="image/*">

      <button type="submit">Save Profile</button>
    </form>

    <footer>
      <p>
        <a href="/home">🏠 Home</a> |
        <a href="/elibrary">📚 E-Library</a> |
        <a href="/posts/create">🖋 Create Post</a> |
        <a href="/summarize">📝 Summarize</a>
      </p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
