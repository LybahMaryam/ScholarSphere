<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ScholarSphere</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Vintage Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Libre Baskerville', serif;
      background-color: #f5f1e6;
      color: #3a2c1a;
      background-image: radial-gradient(#e6ddc6 1px, transparent 1px);
      background-size: 20px 20px;
    }

    header, footer {
      background-color: #f3e7d3;
      border: 1px solid #d6c5a0;
      box-shadow: 0 2px 4px rgba(97, 73, 39, 0.2);
    }

    a {
      color: #4a3621;
      text-decoration: none;
      transition: all 0.2s;
    }

    a:hover {
      color: #7b5e3b;
      text-decoration: underline;
    }

    .btn-primary {
      background-color: #7b5e3b;
      border-color: #7b5e3b;
    }

    .btn-primary:hover {
      background-color: #5e462c;
      border-color: #5e462c;
    }

    .post-card {
      background-color: #fffaf3;
      border: 1px solid #d8c7a6;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 3px 6px rgba(92, 70, 41, 0.1);
    }

    footer a {
      font-family: 'Poppins', sans-serif;
    }

    footer {
      padding: 1.5rem 0;
    }

    footer .link-dark {
      font-weight: 500;
      color: #3e2e1f !important;
    }

    footer .link-dark:hover {
      color: #7b5e3b !important;
    }

    .search-bar input {
      background-color: #fffdf9;
      border: 1px solid #c9b89e;
    }

    .search-bar input:focus {
      border-color: #7b5e3b;
      box-shadow: 0 0 5px rgba(123, 94, 59, 0.3);
    }

    .vintage-title {
      border-bottom: 2px solid #c9b89e;
      padding-bottom: 5px;
      margin-bottom: 10px;
      color: #3a2c1a;
    }

    .vintage-hr {
      border: 0;
      border-top: 1px dashed #b59b76;
      margin: 20px 0;
    }
  </style>
</head>

<body>

  <!-- Header -->
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <a href="{{ url('/') }}" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-3">📜</span>
        <span class="fs-3 ms-2 fw-bold">ScholarSphere</span>
      </a>
      <form class="d-flex col-12 col-lg-5 search-bar" role="search">
        <input class="form-control me-2" type="search" placeholder="Search scholars, topics…" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </header>

  <!-- Main -->
  <main class="container mb-5">
    <div class="row g-5">
      <div class="col-md-8">
        <article class="post-card mb-4">
          <h2 class="vintage-title">Exploring Quantum Algorithms</h2>
          <p class="text-muted small">June 16, 2025 by <a href="#" class="link-primary">Dr. Jane Doe</a></p>
          <p>
            Quantum algorithms hold promise for solving problems beyond classical computation. This article explores
            optimization techniques, algorithmic trade-offs, and the fascinating intersection of quantum mechanics and computer science.
          </p>

          <hr class="vintage-hr">

          <h4 class="h6">📖 Comments</h4>
          <div class="mb-3 px-3 py-2 bg-light rounded border">
            <strong>John Smith</strong>
            <div>Fascinating insight — would love to see benchmarks comparing classical and quantum approaches.</div>
          </div>
          <form>
            <div class="mb-3">
              <textarea class="form-control" placeholder="Write a scholarly comment…" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post Comment</button>
          </form>
        </article>
      </div>

      <aside class="col-md-4">
        <div class="p-4 mb-3 bg-light border rounded">
          <h4 class="fw-semibold">About ScholarSphere</h4>
          <p class="mb-0">
            A vintage-inspired academic hub where knowledge meets elegance.
            Scholars share insights, publish ideas, and explore timeless discussions.
          </p>
        </div>
      </aside>
    </div>
  </main>

  <!-- Footer -->
  <footer class="mt-5 border-top">
    <div class="container d-flex justify-content-center flex-wrap gap-4 text-center">
      <a href="{{ url('/profiles') }}" class="link-dark">👤 Profile</a>
      <a href="{{ url('/elibrary') }}" class="link-dark">📚 E-Library</a>
      <a href="{{ url('/posts') }}" class="link-dark">➕ Post</a>
      <a href="{{ url('/summarize') }}" class="link-dark">📝 Summarize</a>
    
    </div>
    <div class="text-center mt-3 small text-muted">
      &copy; <span id="year"></span> ScholarSphere — Crafted with wisdom and elegance.
    </div>
  </footer>

  <script>
    document.getElementById("year").innerText = new Date().getFullYear();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
