
@extends('User.navbar')

@section('user')

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link rel="stylesheet" href="/css/shop1.css"/>
<link rel="stylesheet" href="/css/modal.css"/>

<!-- ═══════════ HERO SECTION ═══════════ -->
<section class="shop-hero">

  <div class="hero-overlay"></div>

  <div class="hero-content">


    <h1>
      Discover Stories <br>
      That Stay With You
    </h1>

    <p>
      Explore bestselling novels, timeless classics, inspiring biographies,
      and premium digital books curated for passionate readers.
    </p>

    <div class="hero-actions">
      <a href="#" class="hero-btn hero-btn-primary">
        Browse Collection
      </a>

      <a href="#" class="hero-btn hero-btn-outline">
        Best Sellers
      </a>
    </div>

  </div>

</section>


<!-- ═══════════ SHOP SECTION ═══════════ -->
<section class="shop-wrapper">

  <div class="shop-header">

    <div>
      <span class="shop-mini-title">Explore Collection</span>
      <h2>Explore Our Latest Books</h2>
    </div>

    <div class="shop-results">
      Showing {{count($allbooks)}} Books
    </div>

  </div>
<!-- filter of books -->
 <div class="shop-filters">

    <form action="{{ route('shopsearch') }}" method="GET">

        <input
            type="text"
            name="search"
            placeholder="Search books..."
            value="{{ request('search') }}"
        >

        <select name="category">

            <option value="">All Categories</option>

            @foreach($categories as $category)

                <option
                    value="{{ $category->id }}"
                    {{ request('category') == $category->id ? 'selected' : '' }}
                >
                    {{ $category->name }}
                </option>

            @endforeach

        </select>

        <button type="submit">
            Search
        </button>

    </form>

</div>

  <!-- card grid -->
  <main class="books-grid">

    @foreach($allbooks as $book)

    <article class="book-card">

      

      <div class="cover-wrap">
        <img
          src="{{url('storage/bookimages/'.$book->bookcover) }}"
        />
      </div>

      <div class="card-body">

        <p class="book-genre">
          Category: &nbsp{{$book->category->name}}
        </p>

        <h2 class="book-title">
          {{$book->bookname}}
        </h2>

        <p class="book-author">
          {{$book->authorname}}
        </p>

        <div class="price-row">
          <span class="price-current">
            Rs:{{$book->pricepdf}}
          </span>

          <span class="price-save">
            {{$book->stock}}&nbsp In-stock
          </span>
        </div>

        <div class="divider"></div>

        <div class="actions">

          @auth
          <a href="{{route('bookdetail',$book->id)}}">
            <button class="btn btn-cart">
              <span>View More Details</span>
            </button>
          </a>

          @else
          <a href="{{route('bookdetail',$book->id)}}">

            <button class="btn btn-cart" disabled>
              <span>View More Details</span>
            </button>

          </a>

          <p class="lock-notice">

            <svg width="10" height="10" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">

              <rect x="3" y="11" width="18" height="11" rx="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>

            </svg>

            You must
            <a href="{{route('login')}}">sign in</a>
            or
            <a href="{{ route('register') }}">register</a>

          </p>

          @endauth

        </div>

      </div>
    </article>
    @endforeach
  </main>
</section>
<!-- ═══════════ SUBSCRIBE STRIP ═══════════ -->

<section class="subscribe-strip">

  <div class="container subscribe-inner">

    <div>
      <h3>Get New Releases First</h3>

      <p>
        Join thousands of passionate readers and never miss a new release.
      </p>
    </div>

    <form class="sub-form">

      <input type="email" placeholder="your@email.com"/>

      <button class="btn btn-red">
        Subscribe
      </button>

    </form>

  </div>

</section>

@endsection

