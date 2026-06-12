
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

      <h1>Add New Book</h1>

      <p>
        Publish and manage books in Authore
      </p>

    </div>

    <!-- FORM -->
    <form class="book-form" method="POST" action="{{route('insertbook')}}" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label>Book Title</label>
        <input type="text" placeholder="Enter book title" name="title">
        @error("title")
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="grid-2">

        <div class="form-group">
          <label>Author Name</label>
          <input type="text" placeholder="Author name" name="authorname">
          @error("authorname")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <div class="form-group">
          <label>Category</label>
          <select name="category">
            <option selected disabled>Select category</option>
        @foreach($category as $category)           
            <option value="{{$category->id}}">{{$category->name}}</option>
          
        @endforeach
        </select>
        @error("category")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        </div>

      <div class="grid-2">
<!-- price in PDF -->
  <div class="form-group">
    <label>Price of PDF</label>
    <input type="text" placeholder="Price of PDF" name="pricepdf">
    @error("pricepdf")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <!-- price in hardcopy -->
  <div class="form-group">
    <label>Price of Hard Copy </label>
    <input type="text" placeholder="Price of Hard Copy" name="pricehardcopy">
    @error("pricehardcopy")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <!-- price in cd -->
  <div class="form-group">
    <label>Price of CD</label>
    <input type="text" placeholder="Price of CD" name="pricecd">
    @error("pricecd")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <!-- Publisher -->
  <div class="form-group">
    <label>Publisher Name</label>
    <input type="text" placeholder="Publisher Name" name="publishername">
    @error("publishername")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <!-- Publish Date -->
  <div class="form-group">
    <label>Publish Date</label>
    <input type="date" name="publishdate">
    @error("publishdate")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <!-- Language -->
  <div class="form-group">
    <label>Language</label>
    <input type="text" placeholder="English" name="language">
    @error("language")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <!-- ISBN -->
  <div class="form-group">
    <label>ISBN Number</label>
    <input type="text" placeholder="ISBN Number" name="ISBN">
    @error("ISBN")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <!-- Edition -->
  <div class="form-group">
    <label>Edition</label>
    <input type="text" placeholder="1st Edition" name="Edition">
    @error("Edition")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <!-- Pages -->
  <div class="form-group">
    <label>Pages</label>
    <input type="number" placeholder="Pages Number" name="pages">
    @error("pages")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <!-- stock -->
   <div class="form-group">
    <label>Stock</label>
    <input type="number" placeholder="Stock Number" name="stock">
    @error("stock")
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

</div>
      <div class="form-group">
        <label>Description</label>

        <textarea placeholder="Write book description..." name="description">
        </textarea>
         @error("description")
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <!-- UPLOAD -->
      <div class="upload-grid">

        <div class="upload-box">

          <div class="upload-icon">📕</div>

          <h3>Book Cover</h3>

          <p>PNG or JPG</p>
<input type="file" name="bookcover" class="form-control">
@error("bookcover")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
    <!-- back cover -->
        <div class="upload-box">

          <div class="upload-icon">📄</div>

          <h3>Back Cover</h3>

          <p>Upload Back Cover</p>
<input type="file" name="backcover" class="form-control">
@error("backcover")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>

      </div>
        <!-- BOOK PDF -->
<div class="upload-box">

  <div class="upload-icon">📄</div>

  <h3>Book PDF</h3>

  <p>Upload PDF file</p>

  <input type="file" name="bookpdf" class="form-control">

  @error("bookpdf")
  <p class="text-danger">{{$message}}</p>
  @enderror

</div>

<!-- ACTION BUTTONS -->
<div class="form-actions">

  <a href="{{route('bookfetch')}}" class="w-100">
    <button type="button" class="ghost-btn w-100">
      Fetch Books
    </button>
  </a>

  <button type="submit" class="primary-btn w-100">
    Publish Book
  </button>

</div>

</form>

</div> <!-- form-container -->

</div> <!-- page -->



<script src="app.js"></script>

</body>
</html>