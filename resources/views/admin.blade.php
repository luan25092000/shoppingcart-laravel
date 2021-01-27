<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{{-- libraries --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- style --}}
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
	<link rel="stylesheet" href="{{asset('css/pc.css')}}" media="all" />
	<link rel="stylesheet" href="{{asset('css/tablet.css')}}" media="all and (max-width:1023px) and (min-width:768px)" />
	<link rel="stylesheet" href="{{asset('css/mobile.css')}}" media="all and (max-width:767px)" />
	<link rel="shortcut icon" type="image/png" href="{{ URL::to('/') }}/img/favicon.ico" />
	<title>Admin</title>
</head>
<body>
    <h1>Admin</h1>
</body>
</html>