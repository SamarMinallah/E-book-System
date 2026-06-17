<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/winner.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
 @if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif
    
<div class="winner-page">
    <div class="page-header">
        <h1>Competition Winner Selection</h1>
        <p>Review submissions and choose the official winner.</p>
    </div>

    <!-- Participants Table -->
    <div class="table-wrapper">
        <table class="participants-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Participant</th>
                    <th>Email</th>
                    <th>Submission</th>
                    <th>Score</th>
                    <th>Select Prize</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($participants as $participant)
                <tr>
                    <td>{{ $participant->id }}</td>
                    <td>{{ $participant->fullname }}</td>
                    <td>{{ $participant->useremail }}</td>
                    <td>
                        <a href="{{ url('storage/bookimages/' . $participant->Work) }}" target="_blank" class="primary-btn">PDF</a>
                    </td>

                    <!-- Inputs linked to the form below using the form="winner-form-{{ $participant->id }}" attribute -->
                    <td>
                        <input type="text" placeholder="Enter Score" class="form-control" name="score" form="winner-form-{{ $participant->id }}">
                        @error('score')
                        <p>{{$message}}</p>
                        @enderror
                    </td>
                    <td>
                        <select name="prize" class="form-select" form="winner-form-{{ $participant->id }}">
                            <option selected disabled>Select Prize</option>
                            <option value="Prize 1 $500">Prize 1 $500</option>
                            <option value="Prize 2 $250">Prize 2 $250</option>
                            <option value="Prize 3 $100">Prize 3 $100</option>
                        </select>
                        @error('prize')
                        <p>{{$message}}</p>
                        @enderror
                    </td>
                    <td>
                        
                        <form action="{{route('compwinner')}}" method="post" id="winner-form-{{ $participant->id }}">
                            @csrf
                            <!-- Added hidden field to pass the participant's user ID -->
                            <input type="hidden" name="user_id" value="{{ $participant->id }}">
                            <button class="winner-btn" type="submit">Select Winner</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>
</body>
</html>
