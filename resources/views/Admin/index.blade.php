@extends('Admin.sidebar')
@section('admin')
<!-- MAIN -->
    <main class="main">

      <!-- TOPBAR -->
      <header class="topbar">

        <div>
          <h2>Dashboard</h2>
          <p>Welcome back to Authore administration.</p>
        </div>

        <div class="topbar-actions">
          <button class="ghost-btn">Export</button>
          <a href="{{route('addbook')}}"><button class="primary-btn">
        + Add New Book
      </button></a>
        </div>

      </header>

      <!-- STATS -->
      <section class="stats-grid">

        <div class="stat-card">
          <div class="stat-top">
            <span>Total Books</span>
            <span>📚</span>
          </div>

          <h3>{{$bookcount}}</h3>
          <p>Books Count</p>
        </div>

        <div class="stat-card">
          <div class="stat-top">
            <span>Total Orders</span>
            <span>🛒</span>
          </div>

          <h3>{{$ordercount}}</h3>
          <p>+18% growth</p>
        </div>

        <div class="stat-card">
          <div class="stat-top">
            <span>Competitions</span>
            <span>🏆</span>
          </div>

          <h3>09</h3>
          <p>3 currently active</p>
        </div>

      </section>

      <!-- CONTENT -->
      <section class="content-grid">

        <!-- RECENT BOOKS -->
        <div class="panel">

          <div class="panel-header">
            <h3>Recent Books</h3>
            <a href="{{route('addbook')}}" > View All</a>
          </div>

          <div class="table-wrap">
            <table>

              <thead>
                <tr>
                  <th>Book</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
@foreach($book as $latestbook)

                <tr>
                  <td>{{$latestbook->bookname}}</td>
                  <td>{{$latestbook->category->name}}</td>
                  <td>{{$latestbook->pricepdf}}</td>
                  <td>
                    <span class="badge success">
                      Published
                    </span>
                  </td>
                </tr>

@endforeach
              </tbody>

            </table>
          </div>

        </div>

        <!-- QUICK ACTIONS -->
        <div class="panel">

          <div class="panel-header">
            <h3>Quick Actions</h3>
          </div>

          <div class="actions-grid">

            <a href="{{route('addbook')}}" class="action-card">
              <span>📚</span>
              Add New Book
            </a>

            <a href="{{route('addbook')}}"  class="action-card">
              <span>📄</span>
              Upload PDF
            </a>

            <button class="action-card">
              <span>🏆</span>
              New Competition
            </button>

          </div>

        </div>

      </section>

    </main>
@endsection