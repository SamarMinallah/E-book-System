@use('Illuminate\Support\Facades\Storage')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Books Table | Authore</title>
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
        <h1>Browse Books</h1>
        <p>Manage all Books from Authore dashboard</p>
      </div>

      <a href="{{route('addbook')}}"><button class="primary-btn">
        + Add New Book
      </button></a>

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
            <th>ID</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Category</th>
            <th>Description</th>
            <th>Book Cover</th>
            <th>Book PDF</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tbody>

        @foreach ($book as $item)
  <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->bookname }}</td>
    <td>{{ $item->authorname }}</td>
    <td>{{ $item->price }}</td>
    <td>{{ $item->stock }}</td>
    <td>{{ $item->category_id }}</td>
    <td>{{ $item->description }}</td>
    <td>
      <img src="{{url('storage/bookimages/'.$item->bookcover) }}" alt="Book Cover" width="100" height="150" style="object-fit: cover;">
    </td>
    <td>
    <a href="{{ url('storage/bookimages/' . $item->bookpdf) }}" target="_blank" class="primary-btn">
        PDF
    </a>
</td>
    <td class="edit-btn"><a href="{{route('editbook',$item->id)}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
    <td class="delete-btn"><a href="{{route('deletebook',$item->id)}}"><i class="fa-regular fa-trash-can"></i></a></td>
  </tr>
@endforeach

</body>
</html>