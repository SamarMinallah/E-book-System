@extends('User.navbar')
@section('user')




<link rel="stylesheet" href="/css/cart.css">

@if(session('success'))
<div class="alert-success">
    {{ session('success') }}
</div>
@endif
<!-- ══ MAIN ════════════════════════════════════════════ -->
<main class="main-content">
    <div class="container">

        <!-- Breadcrumb -->
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{route('Home')}}">Home</a>
            <span class="bc-sep" aria-hidden="true">›</span>
            <a href="{{route('shoppage')}}">Shop</a>
            <span class="bc-sep" aria-hidden="true">›</span>
            <span class="bc-current">Shopping Cart</span>
        </nav>

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-top">
                <h1 class="page-title">Shopping Cart</h1>
            </div>
            <div class="ornamental-rule">
                <span class="ornament-line"></span>
                <span class="ornament-diamond">✦</span>
                <span class="ornament-line"></span>
            </div>
        </div>

        <!-- ── ACTIVE CART STATE ── -->
        <div class="cart-layout" id="cart-layout">

            <!-- ┌─ ITEMS PANEL ──────────────────────────────┐ -->
            <section class="items-panel" aria-label="Cart items">

                <!-- Column headers -->
                <div class="col-headers" aria-hidden="true">
                    <span class="ch-book">Book</span>
                    <span class="ch-price">Price</span>
                </div>
                @if($cartitem->isEmpty())
                <div class="empty-cart">
                    <h3>Your Cart is empty 🛒</h3>
                    <p>Start shopping to add items to your cart.</p>
                    <a href="{{ route('shoppage') }}" class="btn-shop">Go to Shop</a>
                </div>
                @else
                @foreach($cartitem as $item)
                <article class="cart-item">

                    <div class="book-image">
                        <img src="{{ url('storage/bookimages/'.$item->book->bookcover) }}"
                            alt="{{$item->book->bookname}}" class="cover-img">
                    </div>

                    <div class="book-meta">

                        <h2 class="book-title">
                            {{$item->book->bookname}}
                        </h2>

                        <p class="book-author">
                            {{$item->book->authorname}}
                        </p>

                        <span class="book-badge">
                            {{$item->book->category->name}}
                        </span>

                        <div class="book-qty">
                            Quantity:
                            <span class="bookQuantity">
                                {{$item->book_quantity}}
                            </span>
                        </div>

                        <a href="{{ route('deletecart', $item->id) }}" class="btn-remove">
                            Remove
                        </a>

                    </div>

                    <div class="format-section">

                        <label class="format-label">
                            Select Format
                        </label>

                        <select class="bookFormat">

                            <option value="{{$item->book->pricepdf}}">
                                Instant PDF
                            </option>

                            <option value="{{$item->book->pricehardcopy}}">
                                Hard Copy
                            </option>

                            <option value="{{$item->book->pricecd}}">
                                CD / Audio
                            </option>

                        </select>

                        <div class="price-block">
                            Rs
                            <span class="currentPrice">
                                {{$item->book->pricepdf}}
                            </span>
                        </div>

                    </div>

                    <div class="cart-actions">

                        <button type="button" class="checkout-btn" data-book="{{$item->book->bookname}}"
                            data-bookid="{{$item->book->id}}" data-qty="{{$item->book_quantity}}">

                            Checkout

                        </button>

                    </div>

                </article>
                @endforeach
                @endif
                <div id="checkoutModal" class="modal">

                    <div class="modal-content">

                        <div class="modal-header">
                            <h2>Order Summary</h2>
                            <span class="close-btn">&times;</span>
                        </div>

                        <form action="{{ route('placeorder') }}" method="POST">
                            @csrf

                            <!-- Hidden Fields -->
                            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" id="user_name" name="user_name" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="book_id" id="book_id">
                            <input type="hidden" name="book_name" id="book_name">
                            <input type="hidden" name="format" id="format">
                            <input type="hidden" name="quantity" id="quantity">
                            <input type="hidden" name="unit_price" id="unit_price">
                            <input type="hidden" name="total_amount" id="total_amount">

                            <div class="modal-body">

                                <div class="order-item">
                                    <strong>Book:</strong>
                                    <span id="modalBook"></span>
                                </div>

                                <div class="order-item">
                                    <strong>Format:</strong>
                                    <span id="modalFormat"></span>
                                </div>

                                <div class="order-item">
                                    <strong>Quantity:</strong>
                                    <span id="modalQty"></span>
                                </div>

                                <div class="order-item">
                                    <strong>Unit Price:</strong>
                                    <span id="modalPrice"></span>
                                </div>

                                <hr>

                                <div class="order-item">
                                    <strong>Total Amount:</strong>
                                    <span id="modalTotal"></span>
                                </div>

                                <hr>

                                <div class="form-group">

                                    <label for="payment_method">
                                        Payment Method
                                    </label>

                                    <select name="payment_method" id="payment_method" class="form-control">
                                        <option value="" selected disabled> Select Payment Method</option>
                                        <option value="Card"> Card</option>
                                        <option value="Cash On Delivery">Cash On Delivery</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="DD"> DD</option>
                                    </select>
                                </div>
                                <div id="cardFields" style="display:none;">

                                    <div class="form-group">
                                        <label>Card Number</label>
                                        <input class="form-control" type="text" id="card_number" inputmode="numeric"
                                            placeholder="•••• •••• •••• ••••" maxlength="19" autocomplete="cc-number"
                                            name="card_number">
                                    </div>

                                    <div class="form-group">
                                        <label>Name on Card</label>
                                        <input type="text" name="card_name" id="card_name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <input type="text" inputmode="numeric" placeholder="MM/YY" maxlength="5"
                                            pattern="(0[1-9]|1[0-2])\/([0-9]{2})" autocomplete="cc-exp"
                                            name="expiry_date">

                                    </div>

                                    <div class="form-group">
                                        <label>CVV</label>
                                        <input type="password" name="cvv" type="password" id="cvv" inputmode="numeric"
                                            placeholder="123" maxlength="3" autocomplete="cc-csc" 
                                            class="form-control">
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">

                                <button type="submit" class="confirm-btn">

                                    Confirm Order

                                </button>

                            </div>

                        </form>

                    </div>

                </div>
        </div>
    </div>
    </div>
    </div>

    <script>

        const paymentMethod =
            document.getElementById('payment_method');

        const cardFields =
            document.getElementById('cardFields');

        paymentMethod.addEventListener('change', function () {

            if (this.value === 'Card') {

                cardFields.style.display = 'block';
            }
            else {

                cardFields.style.display = 'none';

                document.getElementById('card_number').value = '';
                document.getElementById('card_name').value = '';
                document.getElementById('expiry_date').value = '';
                document.getElementById('cvv').value = '';

            }

        });
        document.addEventListener('DOMContentLoaded', () => {

            const modal =
                document.getElementById('checkoutModal');

            const closeBtn =
                document.querySelector('.close-btn');

            document.querySelectorAll('.cart-item').forEach(item => {

                const format =
                    item.querySelector('.bookFormat');

                const price =
                    item.querySelector('.currentPrice');

                format.addEventListener('change', () => {

                    price.textContent =
                        format.value;

                });

            });

            document.querySelectorAll('.checkout-btn')
                .forEach(btn => {

                    btn.addEventListener('click', () => {

                        const card =
                            btn.closest('.cart-item');

                        const book =
                            btn.dataset.book;

                        const bookId =
                            btn.dataset.bookid;

                        const qty =
                            parseInt(btn.dataset.qty);

                        const formatSelect =
                            card.querySelector('.bookFormat');

                        const selectedFormat =
                            formatSelect.options[
                                formatSelect.selectedIndex
                            ].text;

                        const unitPrice =
                            parseFloat(formatSelect.value);

                        const total =
                            unitPrice * qty;

                        document.getElementById('modalBook')
                            .textContent = book;

                        document.getElementById('modalFormat')
                            .textContent = selectedFormat;

                        document.getElementById('modalQty')
                            .textContent = qty;

                        document.getElementById('modalPrice')
                            .textContent = "Rs " + unitPrice;

                        document.getElementById('modalTotal')
                            .textContent = "Rs " + total;

                        document.getElementById('book_id')
                            .value = bookId;
                        document.getElementById('user_id');
                        document.getElementById('user_name')
                            ;
                        document.getElementById('book_name')
                            .value = book;

                        document.getElementById('format')
                            .value = selectedFormat;

                        document.getElementById('quantity')
                            .value = qty;

                        document.getElementById('unit_price')
                            .value = unitPrice;

                        document.getElementById('total_amount')
                            .value = total;

                        modal.classList.add('show');

                        document.body.style.overflow =
                            'hidden';

                    });

                });

            closeBtn.addEventListener('click', () => {

                modal.classList.remove('show');

                document.body.style.overflow =
                    'auto';

            });

            window.addEventListener('click', e => {

                if (e.target === modal) {

                    modal.classList.remove('show');

                    document.body.style.overflow =
                        'auto';

                }

            });

        });

    </script>

    @endsection