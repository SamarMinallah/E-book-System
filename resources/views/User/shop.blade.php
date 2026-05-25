<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shop — Authore Publisher Portal</title>
  <link rel="stylesheet" href="/css/shop1.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700&family=Lato:wght@300;400;700&family=Merriweather:ital,wght@0,300;1,300&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>
 
  <!-- ═══════════ NAVBAR ═══════════ -->
  <header class="navbar" id="navbar">
    <div class="nav-inner">
      <a href="index.html" class="brand">
        <span class="brand-icon"><i class="fas fa-book-open"></i></span>
        <span class="brand-name">Authore<span class="brand-dot">.</span></span>
      </a>
      <nav class="nav-links" id="navLinks">
        <a href="index.html">Home</a>
        <a href="shop.html" class="active">Shop</a>
        <a href="{{route('contact')}}">Contact</a>
        <a href="{{route('competitions')}}">Competitions</a>
        <a href="#">Events</a>
      </nav>
      <div class="nav-actions">
      
        <a href="#" class="btn btn-outline-nav">Sign In</a>
        <a href="#" class="btn btn-primary-nav">Register</a>
        <button class="hamburger" id="hamburger"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>
 
  <!-- ═══════════ CART SIDEBAR ═══════════ -->
  <div class="cart-overlay" id="cartOverlay"></div>
  <aside class="cart-sidebar" id="cartSidebar">
    <div class="cart-header">
      <h3>Your Cart</h3>
      <button class="cart-close" id="cartClose"><i class="fas fa-times"></i></button>
    </div>
    <div class="cart-items" id="cartItems">
      <div class="cart-empty">
        <i class="fas fa-shopping-bag"></i>
        <p>Your cart is empty</p>
        <span>Add books to get started</span>
      </div>
    </div>
    <div class="cart-footer" id="cartFooter" style="display:none">
      <div class="cart-total">
        <span>Total</span>
        <span class="cart-total-price" id="cartTotal">$0.00</span>
      </div>
      <button class="btn btn-red btn-full">Proceed to Checkout</button>
      <button class="btn btn-ghost btn-full mt-1" id="clearCart">Clear Cart</button>
    </div>
  </aside>
 
  <!-- ═══════════ SHOP HERO / BREADCRUMB ═══════════ -->
  <section class="shop-hero">
    <div class="shop-hero-bg-text">SHOP</div>
    <div class="container">
      <nav class="breadcrumb">
        <a href="index.html">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Shop</span>
      </nav>
      <h1 class="shop-hero-title">Browse Our Collection</h1>
      <p class="shop-hero-sub">Discover bestselling books, download PDFs instantly, or order physical hard copies delivered to your door.</p>
      <div class="shop-stats">
        <div class="stat"><span class="stat-n">240+</span><span class="stat-l">Books Available</span></div>
        <div class="stat-divider"></div>
        <div class="stat"><span class="stat-n">18</span><span class="stat-l">Categories</span></div>
        <div class="stat-divider"></div>
        <div class="stat"><span class="stat-n">4.8★</span><span class="stat-l">Avg Rating</span></div>
        <div class="stat-divider"></div>
        <div class="stat"><span class="stat-n">12K+</span><span class="stat-l">Happy Readers</span></div>
      </div>
    </div>
  </section>
 
  <!-- ═══════════ MAIN SHOP LAYOUT ═══════════ -->
  <section class="shop-main">
    <div class="container shop-layout">
 
      <!-- ── SIDEBAR FILTERS ── -->
      <aside class="filters-sidebar" id="filtersSidebar">
        <div class="filters-header">
          <h4>Filters</h4>
          <button class="clear-filters" id="clearFilters">Clear All</button>
        </div>
 
        <!-- Search -->
        <div class="filter-group">
          <label class="filter-label">Search</label>
          <div class="search-input-wrap">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" placeholder="Search books, authors…" />
          </div>
        </div>
 
        <!-- Category -->
        <div class="filter-group">
          <label class="filter-label">Category</label>
          <div class="filter-options" id="categoryFilters">
            <label class="filter-check active-filter" data-cat="all">
              <input type="radio" name="category" value="all" checked/> All Books
              <span class="filter-count">12</span>
            </label>
            <label class="filter-check" data-cat="comics">
              <input type="radio" name="category" value="comics"/> Comics
              <span class="filter-count">1</span>
            </label>
            <label class="filter-check" data-cat="novels">
              <input type="radio" name="category" value="novels"/> Novels
              <span class="filter-count">1</span>
            </label>
            <label class="filter-check" data-cat="story-books">
              <input type="radio" name="category" value="story-books"/> Story books
              <span class="filter-count">1</span>
            </label>
            <label class="filter-check" data-cat="general-knowledge-books">
              <input type="radio" name="category" value="general-knowledge-books"/> General knowledge books
              <span class="filter-count">4</span>
            </label>
            <label class="filter-check" data-cat="quiz-books">
              <input type="radio" name="category" value="quiz-books"/> Quiz books
              <span class="filter-count">1</span>
            </label>
            <label class="filter-check" data-cat="journals">
              <input type="radio" name="category" value="journals"/> Journals
              <span class="filter-count">1</span>
            </label>
            <label class="filter-check" data-cat="grammar-books">
              <input type="radio" name="category" value="grammar-books"/> Grammar books
              <span class="filter-count">2</span>
            </label>
            <label class="filter-check" data-cat="essay-books">
              <input type="radio" name="category" value="essay-books"/> Essay books
              <span class="filter-count">1</span>
            </label>
          </div>
        </div>
 
        <!-- Format -->
        <div class="filter-group">
          <label class="filter-label">Format</label>
          <div class="filter-options">
            <label class="filter-check active-filter">
              <input type="checkbox" value="all" checked/> All Formats
            </label>
            <label class="filter-check">
              <input type="checkbox" value="ebook"/>
              <i class="fas fa-file-pdf format-icon"></i> eBook (PDF)
            </label>
            <label class="filter-check">
              <input type="checkbox" value="hardcopy"/>
              <i class="fas fa-book format-icon"></i> Hard Copy
            </label>
            <label class="filter-check">
              <input type="checkbox" value="audio"/>
              <i class="fas fa-headphones format-icon"></i> Audio / CD
            </label>
          </div>
        </div>
 
        <!-- Price Range -->
        <div class="filter-group">
          <label class="filter-label">Price Range</label>
          <div class="price-range-wrap">
            <input type="range" min="0" max="100" value="100" id="priceRange" class="price-slider"/>
            <div class="price-labels">
              <span>$0</span>
              <span class="price-max-label" id="priceLabel">$100</span>
            </div>
          </div>
        </div>
 
        <!-- Rating -->
        <div class="filter-group">
          <label class="filter-label">Minimum Rating</label>
          <div class="rating-filters">
            <button class="rating-btn active" data-rating="0">All</button>
            <button class="rating-btn" data-rating="3">3★+</button>
            <button class="rating-btn" data-rating="4">4★+</button>
            <button class="rating-btn" data-rating="4.5">4.5★+</button>
          </div>
        </div>
 
        <!-- Featured Authors -->
        <div class="filter-group">
          <label class="filter-label">Featured Authors</label>
          <div class="author-tags">
            <span class="author-tag">Steve Krug</span>
            <span class="author-tag">Don Norman</span>
            <span class="author-tag">Stephen King</span>
            <span class="author-tag">Malcolm Gladwell</span>
            <span class="author-tag">Ann Lamott</span>
          </div>
        </div>
 
        <button class="btn btn-red btn-full apply-btn">Apply Filters</button>
      </aside>
 
      <!-- ── PRODUCTS AREA ── -->
      <div class="products-area">
 
        <!-- Toolbar -->
        <div class="products-toolbar">
          <div class="results-info">
            Showing <strong id="resultCount">24</strong> books
          </div>
          <div class="toolbar-right">
            <select class="sort-select" id="sortSelect">
              <option value="featured">Featured</option>
              <option value="price-low">Price: Low to High</option>
              <option value="price-high">Price: High to Low</option>
              <option value="rating">Highest Rated</option>
              <option value="newest">Newest First</option>
            </select>
            <div class="view-toggle">
              <button class="view-btn active" id="gridView" title="Grid view"><i class="fas fa-th"></i></button>
              <button class="view-btn" id="listView" title="List view"><i class="fas fa-list"></i></button>
            </div>
            <button class="filter-mobile-btn" id="filterToggle">
              <i class="fas fa-sliders-h"></i> Filters
            </button>
          </div>
        </div>
 
        <!-- Featured Banner -->
        <div class="featured-banner">
          <div class="featured-banner-content">
            <span class="featured-label">⚡ Flash Deal</span>
            <p>Get <strong>30% off</strong> all eBooks this week — Use code <strong class="code-pill">READ30</strong></p>
          </div>
          <button class="banner-close" id="bannerClose"><i class="fas fa-times"></i></button>
        </div>
 
        <!-- Products Grid -->
        <div class="products-grid" id="productsGrid">
 
          <!-- Card 1 -->
          <div class="product-card" data-cat="general-knowledge-books" data-price="24.99" data-rating="4.8" data-id="1">
            <div class="product-badges">
              <span class="badge badge-best">Bestseller</span>
            </div>
            <div class="product-cover" style="background:#c8102e">
              <div class="cover-text">
                <p class="cover-author">Steve Krug</p>
                <h3>DON'T<br>MAKE<br>ME<br>THINK</h3>
                <p class="cover-sub"><em>Revisited</em></p>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(1)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">UX & Design</span>
                <div class="product-formats">
                  <span class="fmt" title="eBook"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt" title="Hard Copy"><i class="fas fa-book"></i></span>
                </div>
              </div>
              <h4 class="product-title">Don't Make Me Think, Revisited</h4>
              <p class="product-author">Steve Krug</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:96%"></span>
                <span class="rating-num">4.8</span>
                <span class="rating-cnt">(4,682)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$24.99</span>
                  <span class="price-old">$34.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(1,'Don\'t Make Me Think',24.99,'#c8102e')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 2 -->
          <div class="product-card" data-cat="quiz-books" data-price="19.99" data-rating="4.6" data-id="2">
            <div class="product-cover" style="background:#2d2d2d">
              <div class="cover-text">
                <p class="cover-author">Steve Krug</p>
                <h3>ROCKET<br>SURGERY<br>MADE<br>EASY</h3>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(2)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">UX & Design</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                  <span class="fmt"><i class="fas fa-headphones"></i></span>
                </div>
              </div>
              <h4 class="product-title">Rocket Surgery Made Easy</h4>
              <p class="product-author">Steve Krug</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:92%"></span>
                <span class="rating-num">4.6</span>
                <span class="rating-cnt">(2,103)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$19.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(2,'Rocket Surgery Made Easy',19.99,'#2d2d2d')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 3 -->
          <div class="product-card" data-cat="general-knowledge-books" data-price="22.99" data-rating="4.7" data-id="3">
            <div class="product-badges">
              <span class="badge badge-new">New</span>
            </div>
            <div class="product-cover" style="background:#1a2d5a">
              <div class="cover-text">
                <p class="cover-author">Don Norman</p>
                <h3>THE<br>DESIGN<br>OF<br>EVERYDAY<br>THINGS</h3>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(3)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">UX & Design</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                </div>
              </div>
              <h4 class="product-title">The Design of Everyday Things</h4>
              <p class="product-author">Don Norman</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:94%"></span>
                <span class="rating-num">4.7</span>
                <span class="rating-cnt">(3,891)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$22.99</span>
                  <span class="price-old">$28.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(3,'The Design of Everyday Things',22.99,'#1a2d5a')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 4 -->
          <div class="product-card" data-cat="essay-books" data-price="18.99" data-rating="4.9" data-id="4">
            <div class="product-badges">
              <span class="badge badge-best">Top Rated</span>
            </div>
            <div class="product-cover" style="background:#4a5240">
              <div class="cover-text">
                <p class="cover-author">Stephen King</p>
                <h3>ON<br>WRITING</h3>
                <p class="cover-sub">A Memoir of the Craft</p>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(4)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">Writing</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                  <span class="fmt"><i class="fas fa-headphones"></i></span>
                </div>
              </div>
              <h4 class="product-title">On Writing: A Memoir of the Craft</h4>
              <p class="product-author">Stephen King</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:98%"></span>
                <span class="rating-num">4.9</span>
                <span class="rating-cnt">(6,120)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$18.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(4,'On Writing',18.99,'#4a5240')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 5 -->
          <div class="product-card" data-cat="general-knowledge-books" data-price="27.99" data-rating="4.5" data-id="5">
            <div class="product-cover" style="background:#8b4513">
              <div class="cover-text">
                <p class="cover-author">Malcolm Gladwell</p>
                <h3>THE<br>TIPPING<br>POINT</h3>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(5)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">Business</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                </div>
              </div>
              <h4 class="product-title">The Tipping Point</h4>
              <p class="product-author">Malcolm Gladwell</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:90%"></span>
                <span class="rating-num">4.5</span>
                <span class="rating-cnt">(5,440)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$27.99</span>
                  <span class="price-old">$32.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(5,'The Tipping Point',27.99,'#8b4513')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 6 -->
          <div class="product-card" data-cat="grammar-books" data-price="16.99" data-rating="4.7" data-id="6">
            <div class="product-cover" style="background:#2c4a3e">
              <div class="cover-text">
                <p class="cover-author">Ann Lamott</p>
                <h3>BIRD<br>BY<br>BIRD</h3>
                <p class="cover-sub">Instructions on Writing and Life</p>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(6)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">Writing</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                </div>
              </div>
              <h4 class="product-title">Bird by Bird</h4>
              <p class="product-author">Ann Lamott</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:94%"></span>
                <span class="rating-num">4.7</span>
                <span class="rating-cnt">(2,890)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$16.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(6,'Bird by Bird',16.99,'#2c4a3e')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 7 -->
          <div class="product-card" data-cat="novels" data-price="14.99" data-rating="4.6" data-id="7">
            <div class="product-badges">
              <span class="badge badge-sale">Sale</span>
            </div>
            <div class="product-cover" style="background:#6b2d6b">
              <div class="cover-text">
                <p class="cover-author">Gabriel García Márquez</p>
                <h3>ONE<br>HUNDRED<br>YEARS OF<br>SOLITUDE</h3>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(7)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">Fiction</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                </div>
              </div>
              <h4 class="product-title">One Hundred Years of Solitude</h4>
              <p class="product-author">Gabriel García Márquez</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:92%"></span>
                <span class="rating-num">4.6</span>
                <span class="rating-cnt">(8,231)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$14.99</span>
                  <span class="price-old">$21.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(7,'One Hundred Years of Solitude',14.99,'#6b2d6b')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 8 -->
          <div class="product-card" data-cat="comics" data-price="32.99" data-rating="4.8" data-id="8">
            <div class="product-cover" style="background:#1a3a5c">
              <div class="cover-text">
                <p class="cover-author">Eric Ries</p>
                <h3>THE<br>LEAN<br>STARTUP</h3>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(8)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">Technology</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                  <span class="fmt"><i class="fas fa-headphones"></i></span>
                </div>
              </div>
              <h4 class="product-title">The Lean Startup</h4>
              <p class="product-author">Eric Ries</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:96%"></span>
                <span class="rating-num">4.8</span>
                <span class="rating-cnt">(4,102)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$32.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(8,'The Lean Startup',32.99,'#1a3a5c')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 9 -->
          <div class="product-card" data-cat="journals" data-price="21.99" data-rating="4.4" data-id="9">
            <div class="product-cover" style="background:#3d3226">
              <div class="cover-text">
                <p class="cover-author">Cal Newport</p>
                <h3>DEEP<br>WORK</h3>
                <p class="cover-sub">Rules for Focused Success</p>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(9)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">Business</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                </div>
              </div>
              <h4 class="product-title">Deep Work</h4>
              <p class="product-author">Cal Newport</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:88%"></span>
                <span class="rating-num">4.4</span>
                <span class="rating-cnt">(3,550)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$21.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(9,'Deep Work',21.99,'#3d3226')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 10 -->
          <div class="product-card" data-cat="story-books" data-price="13.99" data-rating="4.9" data-id="10">
            <div class="product-badges">
              <span class="badge badge-best">Classic</span>
            </div>
            <div class="product-cover" style="background:#8b3a0f">
              <div class="cover-text">
                <p class="cover-author">F. Scott Fitzgerald</p>
                <h3>THE<br>GREAT<br>GATSBY</h3>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(10)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">Fiction</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                </div>
              </div>
              <h4 class="product-title">The Great Gatsby</h4>
              <p class="product-author">F. Scott Fitzgerald</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:98%"></span>
                <span class="rating-num">4.9</span>
                <span class="rating-cnt">(12,400)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$13.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(10,'The Great Gatsby',13.99,'#8b3a0f')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 11 -->
          <div class="product-card" data-cat="general-knowledge-books" data-price="29.99" data-rating="4.6" data-id="11">
            <div class="product-cover" style="background:#1c4532">
              <div class="cover-text">
                <p class="cover-author">Andrew Ng</p>
                <h3>AI FOR<br>EVERYONE</h3>
                <p class="cover-sub">A Practical Guide</p>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(11)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">Technology</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                </div>
              </div>
              <h4 class="product-title">AI for Everyone</h4>
              <p class="product-author">Andrew Ng</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:92%"></span>
                <span class="rating-num">4.6</span>
                <span class="rating-cnt">(1,820)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$29.99</span>
                  <span class="price-old">$39.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(11,'AI for Everyone',29.99,'#1c4532')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
          <!-- Card 12 -->
          <div class="product-card" data-cat="grammar-books" data-price="17.99" data-rating="4.5" data-id="12">
            <div class="product-badges">
              <span class="badge badge-new">New</span>
            </div>
            <div class="product-cover" style="background:#5c2a6b">
              <div class="cover-text">
                <p class="cover-author">Ursula K. Le Guin</p>
                <h3>STEERING<br>THE<br>CRAFT</h3>
                <p class="cover-sub">A 21st Century Guide</p>
              </div>
              <div class="product-overlay">
                <button class="overlay-btn" onclick="quickView(12)"><i class="fas fa-eye"></i> Quick View</button>
                <button class="overlay-btn overlay-wish" onclick="toggleWishlist(this)"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <div class="product-info">
              <div class="product-meta">
                <span class="product-cat">Writing</span>
                <div class="product-formats">
                  <span class="fmt"><i class="fas fa-file-pdf"></i></span>
                  <span class="fmt"><i class="fas fa-book"></i></span>
                </div>
              </div>
              <h4 class="product-title">Steering the Craft</h4>
              <p class="product-author">Ursula K. Le Guin</p>
              <div class="product-rating">
                <span class="stars-fill" style="--w:90%"></span>
                <span class="rating-num">4.5</span>
                <span class="rating-cnt">(980)</span>
              </div>
              <div class="product-footer">
                <div class="product-price">
                  <span class="price-current">$17.99</span>
                </div>
                <button class="add-cart-btn" onclick="addToCart(12,'Steering the Craft',17.99,'#5c2a6b')">
                  <i class="fas fa-shopping-cart"></i> Add
                </button>
              </div>
            </div>
          </div>
 
        </div><!-- /products-grid -->
 
        <!-- Pagination -->
        <div class="pagination">
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <span class="page-dots">…</span>
          <button class="page-btn">8</button>
          <button class="page-next">Next <i class="fas fa-arrow-right"></i></button>
        </div>
 
      </div><!-- /products-area -->
    </div><!-- /shop-layout -->
  </section>
 
  <!-- ═══════════ QUICK VIEW MODAL ═══════════ -->
  <div class="modal-overlay" id="modalOverlay">
    <div class="quick-modal" id="quickModal">
      <button class="modal-close" id="modalClose"><i class="fas fa-times"></i></button>
      <div class="modal-grid">
        <div class="modal-cover" id="modalCover">
          <div class="modal-cover-text" id="modalCoverText"></div>
        </div>
        <div class="modal-info">
          <span class="modal-cat" id="modalCat"></span>
          <h2 class="modal-title" id="modalTitle"></h2>
          <p class="modal-author" id="modalAuthor"></p>
          <div class="modal-rating" id="modalRating"></div>
          <p class="modal-desc" id="modalDesc"></p>
          <div class="modal-formats">
            <h5>Available As:</h5>
            <div class="modal-format-btns" id="modalFormats"></div>
          </div>
          <div class="modal-price-row">
            <span class="modal-price" id="modalPrice"></span>
            <button class="btn btn-red" id="modalAddCart">
              <i class="fas fa-shopping-cart"></i> Add to Cart
            </button>
          </div>
          <div class="modal-actions">
            <button class="btn btn-ghost btn-sm" id="modalDownload"><i class="fas fa-download"></i> Download Preview</button>
            <button class="btn btn-ghost btn-sm" id="modalWishlist"><i class="far fa-heart"></i> Wishlist</button>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!-- ═══════════ SUBSCRIBE STRIP ═══════════ -->
  <section class="subscribe-strip">
    <div class="container subscribe-inner">
      <div>
        <h3>Get New Releases First</h3>
        <p>Join 12,000+ readers and never miss a new title.</p>
      </div>
      <form class="sub-form" onsubmit="return false;">
        <input type="email" placeholder="your@email.com"/>
        <button class="btn btn-red">Subscribe</button>
      </form>
    </div>
  </section>
 
  <!-- ═══════════ FOOTER ═══════════ -->
  <footer class="footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <a href="index.html" class="brand">
          <span class="brand-icon"><i class="fas fa-book-open"></i></span>
          <span class="brand-name">Authore<span class="brand-dot">.</span></span>
        </a>
        <p>Digitizing the publishing world.</p>
        <div class="footer-socials">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h5>Shop</h5>
        <ul>
          <li><a href="#">eBooks (PDF)</a></li>
          <li><a href="#">Hard Copies</a></li>
          <li><a href="#">Audio & CDs</a></li>
          <li><a href="#">Bundles</a></li>
          <li><a href="#">Gift Cards</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Support</h5>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Returns Policy</a></li>
          <li><a href="#">Order Tracking</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Company</h5>
        <ul>
          <li><a href="#">About Authore</a></li>
          <li><a href="#">Competitions</a></li>
          <li><a href="#">Submit Manuscript</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container footer-bottom-inner">
        <p>© 2026 Authore Publishing Portal. All rights reserved.</p>
        <div class="footer-links">
          <a href="#">Privacy</a>
          <a href="#">Terms</a>
          <a href="#">Cookies</a>
        </div>
      </div>
    </div>
  </footer>
 
  <!-- ═══════════ TOAST ═══════════ -->
  <div class="toast" id="toast">
    <i class="fas fa-check-circle"></i>
    <span id="toastMsg">Added to cart!</span>
  </div>
 
<script>
/* ── Cart State ── */
const cart = [];
 
function addToCart(id, title, price, color) {
  const existing = cart.find(i => i.id === id);
  if (existing) { existing.qty++; }
  else { cart.push({ id, title, price, color, qty: 1 }); }
  renderCart();
  showToast(`"${title}" added to cart!`);
  // Animate count
  const cnt = document.getElementById('cartCount');
  cnt.classList.remove('pop');
  void cnt.offsetWidth;
  cnt.classList.add('pop');
}
 
function renderCart() {
  const items = document.getElementById('cartItems');
  const footer = document.getElementById('cartFooter');
  const countEl = document.getElementById('cartCount');
  const total = cart.reduce((s, i) => s + i.price * i.qty, 0);
  const totalCount = cart.reduce((s, i) => s + i.qty, 0);
  countEl.textContent = totalCount;
  document.getElementById('cartTotal').textContent = '$' + total.toFixed(2);
 
  if (cart.length === 0) {
    items.innerHTML = `<div class="cart-empty"><i class="fas fa-shopping-bag"></i><p>Your cart is empty</p><span>Add books to get started</span></div>`;
    footer.style.display = 'none';
    return;
  }
  footer.style.display = 'block';
  items.innerHTML = cart.map(item => `
    <div class="cart-item">
      <div class="cart-item-cover" style="background:${item.color}">
        <span>${item.title.split(' ').slice(0,2).join(' ')}</span>
      </div>
      <div class="cart-item-info">
        <h5>${item.title}</h5>
        <span>$${item.price.toFixed(2)}</span>
      </div>
      <div class="cart-item-qty">
        <button onclick="changeQty(${item.id},-1)">−</button>
        <span>${item.qty}</span>
        <button onclick="changeQty(${item.id},1)">+</button>
      </div>
      <button class="cart-item-remove" onclick="removeFromCart(${item.id})"><i class="fas fa-trash"></i></button>
    </div>
  `).join('');
}
 
function changeQty(id, delta) {
  const item = cart.find(i => i.id === id);
  if (!item) return;
  item.qty = Math.max(1, item.qty + delta);
  renderCart();
}
function removeFromCart(id) {
  const idx = cart.findIndex(i => i.id === id);
  if (idx > -1) cart.splice(idx, 1);
  renderCart();
}
document.getElementById('clearCart').addEventListener('click', () => { cart.length = 0; renderCart(); });
 
/* ── Cart Sidebar Toggle ── */
const sidebar = document.getElementById('cartSidebar');
const overlay = document.getElementById('cartOverlay');
document.getElementById('cartToggle').addEventListener('click', () => {
  sidebar.classList.toggle('open');
  overlay.classList.toggle('show');
});
document.getElementById('cartClose').addEventListener('click', () => { sidebar.classList.remove('open'); overlay.classList.remove('show'); });
overlay.addEventListener('click', () => { sidebar.classList.remove('open'); overlay.classList.remove('show'); });
 
/* ── Navbar scroll ── */
window.addEventListener('scroll', () => {
  document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 60);
});
 
/* ── Hamburger ── */
document.getElementById('hamburger').addEventListener('click', () => {
  document.getElementById('navLinks').classList.toggle('open');
  document.getElementById('hamburger').classList.toggle('active');
});
 
/* ── Mobile filter toggle ── */
document.getElementById('filterToggle').addEventListener('click', () => {
  document.getElementById('filtersSidebar').classList.toggle('open');
});
 
/* ── Category Filter ── */
document.querySelectorAll('#categoryFilters .filter-check').forEach(lbl => {
  lbl.addEventListener('click', () => {
    document.querySelectorAll('#categoryFilters .filter-check').forEach(l => l.classList.remove('active-filter'));
    lbl.classList.add('active-filter');
    const cat = lbl.dataset.cat;
    const cards = document.querySelectorAll('.product-card');
    let count = 0;
    cards.forEach(c => {
      const show = cat === 'all' || c.dataset.cat === cat;
      c.style.display = show ? '' : 'none';
      if (show) count++;
    });
    document.getElementById('resultCount').textContent = count;
  });
});
 
/* ── Price Range ── */
document.getElementById('priceRange').addEventListener('input', function() {
  document.getElementById('priceLabel').textContent = '$' + this.value;
  const max = parseFloat(this.value);
  const cards = document.querySelectorAll('.product-card');
  let count = 0;
  cards.forEach(c => {
    const show = parseFloat(c.dataset.price) <= max;
    c.style.display = show ? '' : 'none';
    if (show) count++;
  });
  document.getElementById('resultCount').textContent = count;
});
 
/* ── Rating Filter ── */
document.querySelectorAll('.rating-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.rating-btn').forEach(b => b.classList.remove('active'));
    this.classList.add('active');
    const min = parseFloat(this.dataset.rating);
    const cards = document.querySelectorAll('.product-card');
    let count = 0;
    cards.forEach(c => {
      const show = parseFloat(c.dataset.rating) >= min;
      c.style.display = show ? '' : 'none';
      if (show) count++;
    });
    document.getElementById('resultCount').textContent = count;
  });
});
 
/* ── Search ── */
document.getElementById('searchInput').addEventListener('input', function() {
  const q = this.value.toLowerCase();
  const cards = document.querySelectorAll('.product-card');
  let count = 0;
  cards.forEach(c => {
    const title = c.querySelector('.product-title').textContent.toLowerCase();
    const author = c.querySelector('.product-author').textContent.toLowerCase();
    const show = title.includes(q) || author.includes(q);
    c.style.display = show ? '' : 'none';
    if (show) count++;
  });
  document.getElementById('resultCount').textContent = count;
});
 
/* ── Clear Filters ── */
document.getElementById('clearFilters').addEventListener('click', () => {
  document.querySelectorAll('.product-card').forEach(c => c.style.display = '');
  document.getElementById('resultCount').textContent = 12;
  document.getElementById('priceRange').value = 100;
  document.getElementById('priceLabel').textContent = '$100';
  document.getElementById('searchInput').value = '';
  document.querySelectorAll('[data-cat]').forEach(l => l.classList.remove('active-filter'));
  document.querySelector('[data-cat="all"]').classList.add('active-filter');
  document.querySelectorAll('.rating-btn').forEach(b => b.classList.remove('active'));
  document.querySelector('.rating-btn[data-rating="0"]').classList.add('active');
});
 
/* ── Sort ── */
document.getElementById('sortSelect').addEventListener('change', function() {
  const grid = document.getElementById('productsGrid');
  const cards = [...grid.querySelectorAll('.product-card')];
  cards.sort((a, b) => {
    if (this.value === 'price-low') return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
    if (this.value === 'price-high') return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
    if (this.value === 'rating') return parseFloat(b.dataset.rating) - parseFloat(a.dataset.rating);
    return 0;
  });
  cards.forEach(c => grid.appendChild(c));
});
 
/* ── View Toggle ── */
document.getElementById('gridView').addEventListener('click', function() {
  document.getElementById('productsGrid').classList.remove('list-view');
  document.getElementById('listView').classList.remove('active');
  this.classList.add('active');
});
document.getElementById('listView').addEventListener('click', function() {
  document.getElementById('productsGrid').classList.add('list-view');
  document.getElementById('gridView').classList.remove('active');
  this.classList.add('active');
});
 
/* ── Wishlist Toggle ── */
function toggleWishlist(btn) {
  btn.classList.toggle('wished');
  const icon = btn.querySelector('i');
  icon.classList.toggle('far');
  icon.classList.toggle('fas');
  showToast(btn.classList.contains('wished') ? 'Added to wishlist!' : 'Removed from wishlist');
}
 
/* ── Quick View Modal ── */
const bookData = {
  1: { title: "Don't Make Me Think, Revisited", author: "Steve Krug", cat: "UX & Design", color: "#c8102e", price: "$24.99", rating: "4.8 (4,682 reviews)", desc: "The classic guide to web usability, now fully updated for mobile and tablet. Steve Krug's brilliant, funny, and insightful guide to understanding web usability remains essential reading.", formats: ["eBook PDF", "Hard Copy"] },
  2: { title: "Rocket Surgery Made Easy", author: "Steve Krug", cat: "UX & Design", color: "#2d2d2d", price: "$19.99", rating: "4.6 (2,103 reviews)", desc: "A practical guide to usability testing — do-it-yourself usability testing from the author of Don't Make Me Think.", formats: ["eBook PDF", "Hard Copy", "Audio CD"] },
  3: { title: "The Design of Everyday Things", author: "Don Norman", cat: "UX & Design", color: "#1a2d5a", price: "$22.99", rating: "4.7 (3,891 reviews)", desc: "A powerful primer on how — and why — some products satisfy customers while others only frustrate them. One of the most influential books on design ever written.", formats: ["eBook PDF", "Hard Copy"] },
  4: { title: "On Writing: A Memoir of the Craft", author: "Stephen King", cat: "Writing", color: "#4a5240", price: "$18.99", rating: "4.9 (6,120 reviews)", desc: "Part memoir, part master class by one of the bestselling authors of all time, this superb volume is a revealing and practical view of the writer's craft.", formats: ["eBook PDF", "Hard Copy", "Audio CD"] },
  5: { title: "The Tipping Point", author: "Malcolm Gladwell", cat: "Business", color: "#8b4513", price: "$27.99", rating: "4.5 (5,440 reviews)", desc: "That moment when an idea, trend, or social behavior crosses a threshold, tips, and spreads like wildfire — Malcolm Gladwell's landmark bestseller.", formats: ["eBook PDF", "Hard Copy"] },
  6: { title: "Bird by Bird", author: "Ann Lamott", cat: "Writing", color: "#2c4a3e", price: "$16.99", rating: "4.7 (2,890 reviews)", desc: "A witty, generous book full of practical and inspirational advice on writing and life from the author who has helped countless writers.", formats: ["eBook PDF", "Hard Copy"] },
  7: { title: "One Hundred Years of Solitude", author: "Gabriel García Márquez", cat: "Fiction", color: "#6b2d6b", price: "$14.99", rating: "4.6 (8,231 reviews)", desc: "A literary masterpiece. The story of seven generations of the Buendía family in the fictional town of Macondo.", formats: ["eBook PDF", "Hard Copy"] },
  8: { title: "The Lean Startup", author: "Eric Ries", cat: "Technology", color: "#1a3a5c", price: "$32.99", rating: "4.8 (4,102 reviews)", desc: "Most startups fail. But many of those failures are preventable. The Lean Startup is a new approach being adopted across the globe.", formats: ["eBook PDF", "Hard Copy", "Audio CD"] },
  9: { title: "Deep Work", author: "Cal Newport", cat: "Business", color: "#3d3226", price: "$21.99", rating: "4.4 (3,550 reviews)", desc: "Rules for focused success in a distracted world. The ability to perform deep work is becoming increasingly rare and increasingly valuable.", formats: ["eBook PDF", "Hard Copy"] },
  10: { title: "The Great Gatsby", author: "F. Scott Fitzgerald", cat: "Fiction", color: "#8b3a0f", price: "$13.99", rating: "4.9 (12,400 reviews)", desc: "The story of the fabulously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan — a lyrical, tragic American classic.", formats: ["eBook PDF", "Hard Copy"] },
  11: { title: "AI for Everyone", author: "Andrew Ng", cat: "Technology", color: "#1c4532", price: "$29.99", rating: "4.6 (1,820 reviews)", desc: "A non-technical guide to understanding AI capabilities, building AI strategies, and navigating an AI-powered future.", formats: ["eBook PDF", "Hard Copy"] },
  12: { title: "Steering the Craft", author: "Ursula K. Le Guin", cat: "Writing", color: "#5c2a6b", price: "$17.99", rating: "4.5 (980 reviews)", desc: "A 21st-century guide to the craft of fiction writing, with exercises and discussions perfect for writers at every level.", formats: ["eBook PDF", "Hard Copy"] },
};
 
functio
n quickView(id) {
  const d = bookData[id];
  if (!d) return;
  document.getElementById('modalCover').style.background = d.color;
  document.getElementById('modalCoverText').innerHTML = `<p>${d.author}</p><h2>${d.title}</h2>`;
  document.getElementById('modalCat').textContent = d.cat;
  document.getElementById('modalTitle').textContent = d.title;
  document.getElementById('modalAuthor').textContent = d.author;
  document.getElementById('modalRating').innerHTML = `<span class="stars-fill" style="--w:95%"></span> ${d.rating}`;
  document.getElementById('modalDesc').textContent = d.desc;
  document.getElementById('modalPrice').textContent = d.price;
  document.getElementById('modalFormats').innerHTML = d.formats.map(f => `<span class="modal-fmt-btn">${f}</span>`).join('');
  document.getElementById('modalAddCart').onclick = () => {
    addToCart(id, d.title, parseFloat(d.price.replace('$','')), d.color);
  };
  document.getElementById('modalOverlay').classList.add('show');
  document.body.style.overflow = 'hidden';
}
document.getElementById('modalClose').addEventListener('click', closeModal);
document.getElementById('modalOverlay').addEventListener('click', function(e) { if (e.target === this) closeModal(); });
function closeModal() {
  document.getElementById('modalOverlay').classList.remove('show');
  document.body.style.overflow = '';
}
 
/* ── Toast ── */
function showToast(msg) {
  const t = document.getElementById('toast');
  document.getElementById('toastMsg').textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 2800);
}
 
/* ── Banner close ── */
document.getElementById('bannerClose').addEventListener('click', () => {
  document.querySelector('.featured-banner').style.display = 'none';
});
 
/* ── Pagination ── */
document.querySelectorAll('.page-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.page-btn').forEach(b => b.classList.remove('active'));
    this.classList.add('active');
  });
});
 
/* ── Scroll Reveal ── */
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.08 });
document.querySelectorAll('.product-card').forEach((el, i) => {
  el.classList.add('reveal');
  el.style.transitionDelay = (i % 4) * 0.07 + 's';
  observer.observe(el);
});
</script>
</body>
</html>