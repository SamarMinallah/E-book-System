<div>
  @use('Illuminate\Support\Facades\Storage')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Plan Table | Authore</title>
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
        <h1>Browse Pricing & Plans</h1>
        <p>Manage all Plans from Authore dashboard</p>
      </div>

    </div>

    <!-- SEARCH -->
    <div class="table-toolbar">

      <div class="search-box">

        <i class="fa-solid fa-magnifying-glass"></i>

        <input type="text" placeholder="Search Plan...">

      </div>

    </div>

    <!-- TABLE -->
    <div class="table-wrapper">

      <table>

        <thead>
          <tr>
            <th>ID</th>
            <th>User_Id</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Plan Name</th>
            <th>Plan Duration</th>
            <th>Plan Amount</th>
            <th>Plan Start date</th>
            <th>Plan End Date</th>
            <th>Name on Card</th>
            <th>Card Number</th>
            <th>Expiry Date</th>
            <th>CVV</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tbody>

        @foreach ($plan as $plan)
  <tr>
    <td>{{ $plan->id }}</td>
    <td>{{ $plan->user_id }}</td>
    <td>{{ $plan->user_name }}</td>
    <td>{{ $plan->user_email }}</td>
   <td>
    <span class="badge 
        {{ $plan->plan_name == 'Reader' ? 'bg-secondary' : '' }}
        {{ $plan->plan_name == 'Scholar' ? 'bg-dark' : '' }}
    " style="{{ $plan->plan_name == 'Luminary' ? 'background-color: #9e0b24; color: white;' : '' }}">
        {{ $plan->plan_name }}
    </span>
</td>

    <td>{{ $plan->plan_duration }}</td>
    <td>
    <span class="badge {{ $plan->plan_name == 'Reader' ? 'bg-secondary' : ($plan->plan_name == 'Scholar' ? 'bg-dark' : '') }}" 
          style="{{ $plan->plan_name == 'Luminary' ? 'background-color: #9e0b24; color: white;' : '' }}">
        ${{ number_format($plan->plan_amount, 2) }}
    </span>
</td>

    <td>{{ $plan->start_date }}</td>
    <td>{{ $plan->end_date }}</td>
    <td>{{ $plan->Name_On_Card }}</td>
    <td>{{ $plan->card_number }}</td>
    <td>{{ $plan->expiry_date }}</td>
    <td>{{ $plan->CVV }}</td>
    <td class="delete-btn"><a href="{{route('deleteplanuser',$plan->id)}}"><i class="fa-regular fa-trash-can"></i></a></td>
  </tr>
@endforeach

