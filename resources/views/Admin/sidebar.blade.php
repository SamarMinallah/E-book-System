<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Authore Admin Panel</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="\css\adminstyle.css">
</head>
<body>

  <div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

      <div class="brand">
        <div class="brand-logo">A</div>

        <div>
          <h1>Authore</h1>
          <p>Publishing Admin</p>
        </div>
      </div>

      <nav class="nav">

        <a class="nav-item active" href="#">
          <span>🏠</span>
          Dashboard
        </a>
        
        <a class="nav-item" href="{{route('addcategory')}}">
          <span>📁</span>
          Add Category
        </a>


        <a class="nav-item" href="{{route('addbook')}}">
          <span>📚</span>
          Add Books
        </a>

        <a class="nav-item" href="#">
          <span>💰</span>
          Manage Prices
        </a>

        <a class="nav-item" href="#">
          <span>📄</span>
          Upload PDFs
        </a>

        <a class="nav-item" href="#">
          <span>🏆</span>
          Competitions
        </a>

        <a class="nav-item" href="#">
          <span>🛒</span>
          Orders
        </a>

        <a class="nav-item" href="#">
          <span>✔</span>
          Payments
        </a>

        <a class="nav-item" href="#">
          <span>🎉</span>
          Winners
        </a>

      </nav>

      <div class="sidebar-footer">
        <div class="admin-card">
          <div class="avatar">A</div>

          <div>
            <h4>Admin / Publisher</h4>
            <p>Full Access</p>
          </div>
        </div>
      </div>

    </aside>

    @yield('admin')

  </div>

  <script src="\js\admin.js"></script>
</body>
</html>