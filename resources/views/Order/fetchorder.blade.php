
@use('Illuminate\Support\Facades\Storage')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Orders Table | Authore</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- ICONS -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <link rel="stylesheet" href="/css/fetchstyle.css">
</head>
<body>
  @if(session('error'))
            <div class="alert alert-danger" role="alert">
 {{session('error')}}
</div>
            @endif
<!-- error -->
  @if(session('success'))
            <div class="alert alert-success" role="alert">
 {{session('success')}}
</div>
            @endif
<div class="page">

  <div class="table-container">

    <!-- HEADER -->
    <div class="table-header">

      <div>
        <h1>Browse Orders</h1>
        <p>Manage all Orders from Authore dashboard</p>
      </div>


    </div>

    <!-- SEARCH -->
    <div class="table-toolbar">

      <div class="search-box">

        <i class="fa-solid fa-magnifying-glass"></i>

        <input type="text" placeholder="Search Books...">

      </div>

    </div>

    <!-- TABLE -->
    <div class="table-wrapper">

      <table>

        <thead>
          <tr>
            <th>Order ID</th>
            <th>User_id</th>
            <th>Book_id</th>
            <th>User name</th>
            <th>Book Name</th>
            <th>Book Quantity</th>
            <th>Book format</th>
            <th>Unit Price</th>
            <th>Total Price</th>
            <th>Payment Method</th>
            <th>Card Number</th>
            <th>Name on Card</th>
            <th>Expiry_Date</th>
            <th>CVV</th>
            <th>Status</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tbody>

        @foreach ($checkout as $item)
  <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->user_id }}</td>
    <td>{{ $item->user_name }}</td>
    <td>{{ $item->book_id }}</td>
    <td>{{ $item->book_name }}</td>
    <td>{{ $item->quantity }}</td>
    <td>{{ $item->format }}</td>
    <td>{{ $item->unit_price }}</td>
    <td>{{ $item->total_amount }}</td>
    <td>{{ $item->payment_method }}</td>
    <td>{{ $item->card_number }}</td>
    <td>{{ $item->card_name }}</td>
    <td>{{ $item->expiry_date }}</td>
    <td>{{ $item->cvv}}</td>
    <td>{{ $item->status }}</td>
    <td class="delete-btn"><a href="{{route('deleteorder',$item->id)}}"><i class="fa-regular fa-trash-can"></i></a></td>
  </tr>
@endforeach

</body>
</html>