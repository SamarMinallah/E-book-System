
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

      <h1>Edit Existing Book</h1>

      <p>
        Publish and manage books in Authore
      </p>

    </div>

    <!-- FORM -->
    <form class="book-form" method="post" action="{{route('updatebook',$book->id)}}" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label>Edit Book Title</label>
        <input type="text" placeholder="Enter book title" name="title" value="{{$book->bookname}}">
        @error("title")
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="grid-2">

        <div class="form-group">
          <label>Edit Author Name</label>
          <input type="text" placeholder="Author name" name="authorname" value="{{$book->authorname}}">
          @error("authorname")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <div class="form-group">
          <label>Edit Category</label>
          <select name="category">
            <option selected disabled>Select category</option>
        @foreach($category as $category)           
            <option value="{{$category->id}}" {{$category->id == $book->category_id ? "selected":""}}>{{$category->name}}</option>
          
        @endforeach
        </select>
        @error("category")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        </div>

      <div class="grid-2">

        <div class="form-group">
          <label>Edit Price of PDF</label>
          <input type="number" placeholder="$0.00" name="pricepdf" value="{{$book->pricepdf}}">
          @error("price")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
         <div class="form-group">
          <label>Edit Price of Hard Copy</label>
          <input type="number" placeholder="$0.00" name="pricehardcopy" value="{{$book->pricehardcopy}}">
          @error("pricehardcopy")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <!-- cd -->
           <div class="form-group">
          <label>Edit Price of CD</label>
          <input type="number" placeholder="$0.00" name="pricecd" value="{{$book->pricecd}}">
          @error("pricecd")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <!-- publisher name -->
           <div class="form-group">
          <label>Edit Publisher Name</label>
          <input name="publishername" value="{{$book->publishername}}">
          @error("publishername")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <!-- date -->
           <div class="form-group">
          <label>Edit Publish Date</label>
          <input  name="publishdate" value="{{$book->publishdate}}">
          @error("publishdate")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
<!-- lang -->
   <div class="form-group">
          <label>Edit Language</label>
          <input name="language" value="{{$book->Language}}">
          @error("language")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <!-- isbn -->
           <div class="form-group">
          <label>Edit ISBN</label>
          <input type="number" placeholder="$0.00" name="ISBN" value="{{$book->ISBN}}">
          @error("ISBN")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <!-- edition -->
  <div class="form-group">
          <label>Edit Edition</label>
          <input  placeholder="$0.00" name="Edition" value="{{$book->Edition}}">
          @error("Edition")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <!-- pages -->
           <div class="form-group">
          <label>Edit Pages</label>
          <input type="number"  name="pages" value="{{$book->pages}}">
          @error("pages")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <!-- stock -->
        <div class="form-group">
          <label>Edit Stock</label>
          <input type="number" placeholder="0" name="stock" value="{{$book->stock}}">
          @error("stock")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>

      </div>

      <div class="form-group">
        <label>Edit Description</label>

        <textarea placeholder="Write book description..." name="description">
            {{$book->description}}
        </textarea>
         @error("description")
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <!-- UPLOAD -->
      <div class="upload-grid">

        <div class="upload-box">

          <div class="upload-icon">📕</div>

          <h3>Edit Book Cover</h3>

          <p>PNG or JPG</p>
<input type="file" name="bookcover" class="form-control">
<img src="{{url('storage/bookimages/'.$book->bookcover) }}" alt="Book Cover" width="100" height="150" style="object-fit: cover;">
@error("bookcover")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <!-- backcover -->
        <div class="upload-grid">

        <div class="upload-box">

          <div class="upload-icon">📕</div>

          <h3>Edit Backk Cover</h3>

          <p>PNG or JPG</p>
<input type="file" name="backcover" class="form-control">
<img src="{{url('storage/bookimages/'.$book->backcover) }}" alt="Book Cover" width="100" height="150" style="object-fit: cover;">
@error("backcover")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>

        <div class="upload-box">

          <div class="upload-icon">📄</div>

          <h3>Edit Book PDF</h3>

          <p>Upload PDF file</p>
<input type="file" name="bookpdf" class="form-control">
<a href="{{ url('storage/bookimages/' . $book->bookpdf) }}" target="_blank" class="mt-5">
       Uploaded PDF
    </a>
@error("bookpdf")
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>

      </div>

      <!-- ACTIONS -->
      <div class="form-actions">

        <a href="{{route('bookfetch')}}"><button type="button" class="ghost-btn">
          Fetch Books
        </button></a>

        <button class="primary-btn">
          Publish Book
        </button>

      </div>

    </form>

  </div>

</div>

<script src="app.js"></script>

</body>
</html>