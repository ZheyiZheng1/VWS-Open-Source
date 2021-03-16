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
            <form id='surveyForm' action="userProfilePage" method="post">
            @csrf
            <input type="hidden" name="userId" placeholder="{{$data['id']}}">
            <label for="surveyQuestion" class="form-label">First Name</label>
            <!--read user information from controller and use those as a placeholder-->
            <input type="text" class="form-control" id="firstName" placeholder="{{$data['firstName']}}" aria-describedby="questionOne">

            <label for="surveyQuestion" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="{{$data['lastName']}}" aria-describedby="questionTwo">

            <label for="surveyQuestion" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="{{$data['phone']}}" aria-describedby="questionThree">

            <label for="surveyQuestion" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="{{$data['email']}}" aria-describedby="questionFour">

            <label for="surveyQuestion" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="{{$data['address']}}" aria-describedby="questionFive">

            <label for="surveyQuestion" class="form-label">City</label>
            <input type="text" class="form-control" id="city" placeholder="{{$data['city']}}" aria-describedby="questionSix">

            <label for="surveyQuestion" class="form-label">Zip Code</label>
            <input type="text" class="form-control" id="zip" placeholder="{{$data['zip']}}" aria-describedby="questionSeven">

            <label for="surveyQuestion" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" placeholder="{{$data['country']}}" aria-describedby="questionEight">

            <button type="submit" class="btn btn-primary" style="width: 150px;">Save</button>
            </form>
        </section>
    </div>
</body>

</html>
