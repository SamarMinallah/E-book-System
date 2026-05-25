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
          <button class="primary-btn">+ Add Book</button>
        </div>

      </header>

      <!-- STATS -->
      <section class="stats-grid">

        <div class="stat-card">
          <div class="stat-top">
            <span>Total Books</span>
            <span>📚</span>
          </div>

          <h3>248</h3>
          <p>12 added this month</p>
        </div>

        <div class="stat-card">
          <div class="stat-top">
            <span>Total Orders</span>
            <span>🛒</span>
          </div>

          <h3>1,842</h3>
          <p>+18% growth</p>
        </div>

        <div class="stat-card">
          <div class="stat-top">
            <span>Pending Payments</span>
            <span>💳</span>
          </div>

          <h3>34</h3>
          <p>Needs confirmation</p>
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
            <button>View All</button>
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

                <tr>
                  <td>The Silent Author</td>
                  <td>Fiction</td>
                  <td>$24</td>
                  <td>
                    <span class="badge success">
                      Published
                    </span>
                  </td>
                </tr>

                <tr>
                  <td>Modern Writing</td>
                  <td>Education</td>
                  <td>$18</td>
                  <td>
                    <span class="badge warning">
                      Draft
                    </span>
                  </td>
                </tr>

                <tr>
                  <td>Design & Story</td>
                  <td>Creative</td>
                  <td>$29</td>
                  <td>
                    <span class="badge success">
                      Published
                    </span>
                  </td>
                </tr>

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

            <button class="action-card">
              <span>📚</span>
              Add New Book
            </button>

            <button class="action-card">
              <span>📄</span>
              Upload PDF
            </button>

            <button class="action-card">
              <span>🏆</span>
              New Competition
            </button>

            <button class="action-card">
              <span>✔</span>
              Confirm Payments
            </button>

          </div>

        </div>

      </section>

    </main>
@endsection