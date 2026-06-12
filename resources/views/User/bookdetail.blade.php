@extends('User.navbar');
@section('user');
<link rel="stylesheet" href="/css/bookdetailstyle.css">

<!-- ══════════════════════════════
       PRODUCT LAYOUT
       ══════════════════════════════ -->
       
  <main class="product-page">
    <!-- ── LEFT: Cover ──────────────── -->
    <aside class="cover-col">
      <div class="cover-main">
        <img src="{{url('storage/bookimages/'.$bookdetail->bookcover) }}"  class="cover-img" />
        <span class="cover-badge">Bestseller</span>
      </div>
 
      <div class="cover-thumbs">
        <div class="thumb active"><img src="{{url('storage/bookimages/'.$bookdetail->bookcover) }}" alt="Front cover" /></div>
        <div class="thumb"><img src="{{url('storage/bookimages/'.$bookdetail->backcover) }}" alt="Back cover" /></div>
      
      </div>
 
      <div class="trust-strip">
        <div class="trust-item">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          DRM-Free
        </div>
        <div class="trust-item">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          Secure
        </div>
        <div class="trust-item">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-4.5"/></svg>
          Instant PDF
        </div>
      </div>
    </aside>
 
 
    <!-- ── RIGHT: Info ──────────────── -->
    
    <section class="info-col">
 
      <p class="genre-tag">{{$bookdetail->category->name}}</p>
      <h1 type="text" class="book-title"> {{$bookdetail->bookname}}</h1>
      <p class="book-author">by <a href="#" class="author-link"></a>{{$bookdetail->authorname}}</p>
 
 
      <hr class="divider" />
 
      <p class="book-blurb">
       {{$bookdetail->description}}
      </p>
 
      <dl class="meta-grid">
        <div class="meta-item"><dt>Publisher</dt><dd>{{$bookdetail->publishername}}</dd></div>
        <div class="meta-item"><dt>Published</dt><dd>{{$bookdetail->publishdate}}</dd></div>
        <div class="meta-item"><dt>Pages</dt><dd>{{$bookdetail->pages}}</dd></div>
        <div class="meta-item"><dt>Language</dt><dd>{{$bookdetail->Language}}</dd></div>
        <div class="meta-item"><dt>ISBN</dt><dd>{{$bookdetail->ISBN}}</dd></div>
        <div class="meta-item"><dt>Edition</dt><dd>{{$bookdetail->Edition}}</dd></div>
      </dl>
 
      <hr class="divider" />
  <h3 class="book-author">Select a Format</h3>
<select class="form-select form-group" name="book_format" id="bookFormat">
    <option value="{{$bookdetail->pricepdf}}">Instant PDF</option>
    <option value="{{$bookdetail->pricehardcopy}}">Hard Copy</option>
    <option value="{{$bookdetail->pricecd}}">CD/Audio</option>
</select>

<div class="price-block">
    Rs: <span id="currentPrice">{{$bookdetail->pricepdf}}</span>
</div>

<script>
document.getElementById('bookFormat').addEventListener('change', function () {
    document.getElementById('currentPrice').innerText = this.value;
});
</script>
  <form action="{{route('orderinsert')}}" method="post" >
  @csrf

  <input type="hidden" value='{{Auth::user()->id}}'>
  <input type="hidden" value='{{$bookdetail->id}}' name="book_id">
  <label class="book-author">Quantity</label>
  <div class="quantity-container">
  <button type="button" class="quantity-btn decrement" onclick="this.nextElementSibling.stepDown()">-</button>
  <input type="number" name="quantity" id="quantity" placeholder="1" min="1" step="1">
  <button type="button" class="quantity-btn increment" onclick="this.previousElementSibling.stepUp()">+</button>
</div>


      <div class="cta-row">
       <!-- ── Toggle Button ── -->
  <button class="btn-checkout mt-5" type="submit">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
    Add To Cart
  </button>
   </form>



      </div>
    </section>
  </main>
 
 
 
  <script>
    const overlay    = document.getElementById('overlay');
    const openBtn    = document.getElementById('openModal');
    const closeBtn   = document.getElementById('closeModal');
    const cancelBtn  = document.getElementById('cancelBtn');
    const payBtn     = document.getElementById('payBtn');
    const cardDetails = document.getElementById('cardDetails');
    const radios     = document.querySelectorAll('input[name="payment"]');
    const cvvInput   = document.getElementById('cvv');
    const cvvToggle  = document.getElementById('cvvToggle');
    const eyeIcon    = document.getElementById('eyeIcon');
    const formBody   = document.getElementById('formBody');
    const formFooter = document.getElementById('formFooter');
    const successMsg = document.getElementById('successMsg');
    const cardNo     = document.getElementById('cardNumber');
    const expiry     = document.getElementById('expiryDate');
 
    /* Open / Close */
    const openModal  = () => overlay.classList.add('open');
    const closeModal = () => {
      overlay.classList.remove('open');
      setTimeout(resetForm, 350);
    };
 
    openBtn.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', e => { if (e.target === overlay) closeModal(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
 
    /* Payment method toggle */
    radios.forEach(r => {
      r.addEventListener('change', () => {
        if (r.value === 'cc' && r.checked) {
          cardDetails.classList.add('visible');
        } else if (r.checked) {
          cardDetails.classList.remove('visible');
        }
      });
    });
 
    /* CVV show/hide */
    let cvvVisible = false;
    cvvToggle.addEventListener('click', () => {
      cvvVisible = !cvvVisible;
      cvvInput.type = cvvVisible ? 'text' : 'password';
      eyeIcon.innerHTML = cvvVisible
        ? `<path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>`
        : `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>`;
    });
 
    /* Card number formatting */
    cardNo.addEventListener('input', () => {
      let v = cardNo.value.replace(/\D/g, '').slice(0, 16);
      cardNo.value = v.replace(/(.{4})/g, '$1  ').trim();
    });
 
    /* Expiry formatting */
    expiry.addEventListener('input', () => {
      let v = expiry.value.replace(/\D/g, '').slice(0, 4);
      if (v.length >= 3) v = v.slice(0,2) + ' / ' + v.slice(2);
      expiry.value = v;
    });
 
    /* Submit */
    payBtn.addEventListener('click', () => {
      formBody.style.display   = 'none';
      formFooter.style.display = 'none';
      successMsg.style.display = 'flex';
      setTimeout(closeModal, 2800);
    });
 
    function resetForm() {
      formBody.style.display   = '';
      formFooter.style.display = '';
      successMsg.style.display = 'none';
      document.getElementById('pm-cc').checked = true;
      cardDetails.classList.add('visible');
    }
    document.getElementById('bookFormat').addEventListener('change', function() {
    // Get the price value from the selected option
    const selectedPrice = this.value;
    
    // Update the price text in the span
    document.getElementById('currentPrice').textContent = selectedPrice;
});

  </script>












@endsection