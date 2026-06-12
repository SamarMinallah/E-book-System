<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>{{$mailmassage}}</h1>
<h2>{{$mailsubject}}</h2>

<h4>Your Book Price is : {{$price}}</h4>
<h5>Your Book's format is : {{$format}}</h5>
<h5>Your Book name is : {{$booksname}}</h5>
<hr><hr>
@if(strtolower($format) == 'instant pdf' && strtolower($payment_method) == 'card')
    <h3>Here is your PDF Link:</h3>
    <a href="{{ url('storage/bookimages/' . $bookpdf) }}" target="_blank" style="background: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
        Download PDF
    </a>
    <p>Do Not Share This Message with Anyone............</p>
@elseif(strtolower($format) == 'instant pdf' && strtolower($payment_method) != 'card')
    <p style="color: #ff0000; font-weight: bold;">Your PDF link will be emailed to you once your payment is manually verified and approved.</p>
@else
    <p>Thank you for your physical order! We will ship your package shortly.</p>
@endif

</body>
</html>