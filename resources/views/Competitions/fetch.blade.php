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
        <h1>Browse Competition</h1>
        <p>Manage all competition from Authore dashboard</p>
      </div>
<a href="{{route('viewform')}}"><button class="primary-btn">
        + Add New competition
      </button></a>

    </div>

    <!-- SEARCH -->
    <div class="table-toolbar">

      <div class="search-box">

        <i class="fa-solid fa-magnifying-glass"></i>

        <input type="text" placeholder="Search Competitions...">

      </div>

    </div>

    <!-- TABLE -->
    <div class="table-wrapper">

      <table>

        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type</th>
            <th>Start_date</th>
            <th>End_date</th>
            <th>Prize 1</th>
            <th>Prize 2</th>
            <th>Prize 3</th>
            <th>Rules</th>
            <th>Description</th>
             <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tbody>

        @foreach ($competitions as $competition)
  <tr>
    <td>{{ $competition->id }}</td>
    <td>{{ $competition->title }}</td>
    <td>{{ $competition->type }}</td>
    <td>{{ $competition->start_date }}</td>
    <td>{{ $competition->end_date }}</td>
    <td>{{ $competition->prize1 }}</td>
    <td>{{ $competition->prize2 }}</td>
    <td>{{ $competition->prize3 }}</td>
   <td>{{ $competition->rules }}</td>
   <td>{{ $competition->description }}</td>
   <td>{{ $competition->status }}</td>
    <td class="edit-btn"><a href="{{route('editcompetition',$competition->id)}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
    <td class="delete-btn"><a href="{{route('deletecompetition',$competition->id)}}"><i class="fa-regular fa-trash-can"></i></a></td>
  </tr>
@endforeach

</body>
</html> 