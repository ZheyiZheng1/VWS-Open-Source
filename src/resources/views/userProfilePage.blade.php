<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard/index.css" />
    <link rel="stylesheet" href="/css/dashboard/sidebar.css" />
	<link rel="stylesheet" href="/css/dashboard/surveyrightbar.css" />

	<script src="https://kit.fontawesome.com/555936ed9c.js" crossorigin="anonymous"></script>
    <title>User Profile Page</title>

</head>

<body>


    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

        <section class="right-panel" >
            <form id='surveyForm' action="{{route('userProfilePage')}}" method="post">
            <input type="hidden" name="userid" value="{{ $data }}" />
            @csrf
            <label for="surveyQuestion" class="form-label">User Name</label>
            <!--read user information from controller and use those as a placeholder-->
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="{{$data['firstName']}}" aria-describedby="questionOne">

            <label for="surveyQuestion" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phoneNumber" placeholder="{{$data['phone']}}" aria-describedby="questionTwo">

            <label for="surveyQuestion" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="emailAddress" placeholder="{{$data['email']}}" aria-describedby="questionThree">

            <label for="surveyQuestion" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="{{$data['address']}}" aria-describedby="questionFour">

            <label for="surveyQuestion" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="{{$data['city']}}" aria-describedby="questionFive">

            <label for="surveyQuestion" class="form-label">Postal Code</label>
            <input type="text" class="form-control" id="zip" name="postalCode" placeholder="{{$data['zip']}}" aria-describedby="questionSix">

            <label for="surveyQuestion" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="{{$data['country']}}" aria-describedby="questionSeven">

            <button type="submit" class="btn btn-primary" style="width: 150px;">Save</button>
            </form>
        </section>
    </div>
</body>

</html>
