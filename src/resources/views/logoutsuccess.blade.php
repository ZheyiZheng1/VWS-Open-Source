<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Landing page</title>

</head>

<body>
	<main class="login">
		<div class="login-header">
			<h1>Virtual Wellness System</h1>
			<!--login and register buttom here, change link when these pages done-->
        </div>

        <div class="container" style="display: flex; flex-direction: column; align-items: center;">
            <p>You have been logged out</p>
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

            <div id="sign-in-or-register">
                <div id="login">
                    @section('login')
                        @include('auth.login')
                    @show
                </div>
            </div>
        </div>
    </main>

	<div class="text-center login-footer" style="background: #FCFCFC;">
		<div >
			<img class="img-footer" src="{{'images/UPEI_Logo.png'}}" alt="" srcset="">
		</div>
	</div>

</body>

</html>
