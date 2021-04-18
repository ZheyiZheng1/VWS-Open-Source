<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard/index.css" />
    <link rel="stylesheet" href="/css/dashboard/sidebar.css" />
	<link rel="stylesheet" href="/css/dashboard/mainrightbar.css" />
    <link rel="stylesheet" href="/css/dashboard/surveyrightbar.css" />
	<script src="https://kit.fontawesome.com/555936ed9c.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

		<section class="right-panel">
            <div id="greeting">
                <h2> <span id='msg'> Good Morning </span> {{auth()->user()->name}},</h2>
                <br>
            </div>
            @yield('content')
        </section>
</body>
