
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Add Book | Authore</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="/css/bookformstyle.css">
</head>

<body>

<div class="page">

  <div class="form-container">

    <!-- HEADER -->
    <div class="form-header">

      <div class="logo">A</div>

      <h1>Add New Competition</h1>

      <p>
        Publish and manage Competitions in Authore
      </p>

    </div>

    <!-- FORM -->
    <form class="book-form" method="POST" action="{{route('competitionform')}}">
      @csrf

      <div class="form-group">
        <label>Competition Title</label>
        <input type="text" placeholder="Enter Competition title" name="title">
        @error("title")
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="grid-2">
        <div class="form-group">
          <label>Category</label>
          <select name="type">
            <option selected disabled>Select category</option>
            <option >EssayWriting</option>
            <option >Story Writing</option>
            <option >Short Story Writing</option>
        </select>
        @error("type")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
      </div>

      <div class="grid-3">
        <!-- price in PDF -->
        <div class="form-group">
          <label>1 Prize</label>
          <input type="text" placeholder="1 Prize" name="prize1">
          @error("prize1")
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <!-- price in hardcopy -->
        <div class="form-group">
          <label>2 Prize</label>
          <input type="text" placeholder="2 Prize" name="prize2">
          @error("prize2")
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <!-- price in cd -->
        <div class="form-group">
          <label>3 Prize</label>
          <input type="text" placeholder="3 Prize" name="prize3">
          @error("prize3")
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="grid-2">
        <!-- Start Date -->
        <div class="form-group">
          <label>Start Date</label>
          <input type="date" name="start_date">
          @error("start_date")
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <!-- End Date -->
        <div class="form-group">
          <label>End Date</label>
          <input type="date" name="end_date">
          @error("end_date")
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="form-group">
        <label>Rules</label>

        <textarea placeholder="Write Competition Rules..." name="rules">
        </textarea>
         @error("rules")
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>
      <!-- desc -->
       <div class="form-group">
        <label>Description</label>

        <textarea placeholder="Write Competition Description..." name="description">
        </textarea>
         @error("description")
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

<!-- ACTION BUTTONS -->
<div class="form-actions">

  <a href="{{route('allcompetition')}}" class="w-100">
    <button type="button" class="ghost-btn w-100">
      Fetch Competition
    </button>
  </a>

  <button type="submit" class="primary-btn w-100">
    Add Competition
  </button>

</div>

</form>

</div> <!-- form-container -->

</div> <!-- page -->



<script src="app.js"></script>

</body>
</html>