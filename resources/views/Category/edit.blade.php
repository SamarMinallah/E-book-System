
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Add Book | Authore</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/css/bookformstyle.css">
</head>

<body>

<div class="page">

  <div class="form-container">

    <!-- HEADER -->
    <div class="form-header">

      <div class="logo">A</div>

      <h1>Edit Category</h1>
    </div>

    <!-- FORM -->
    <form class="book-form" method="Post" action="{{route('updatecategory',$category->id)}}">
        @csrf

      <div class="form-group">
        <label>Edit Category Title</label>
        <input type="text" placeholder="Enter book title" name="name" value="{{$category->name}}">
      </div>
      <div class="form-group">
        <label>Edit Description</label>

        <textarea placeholder="Write book description..." name="description">
            {{$category->description}}
        </textarea>
      </div>
      <!-- ACTIONS -->
      <div class="form-actions">

        <a href="{{route('categoryfetch')}}"><button type="button" class="ghost-btn">
          Fetch Category
        </button></a>

        <button type="submit" class="primary-btn">
         Update Category
        </button>

      </div>

    </form>

  </div>

</div>

<script src="app.js"></script>

</body>
</html>