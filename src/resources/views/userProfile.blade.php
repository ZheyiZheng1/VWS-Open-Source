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
    <title>User Profile</title>

</head>

<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

        <section class="right-panel" >
        <!--Used form just for keep the outlook same with other surveys-->
        <!--The userProfileEdit does not exist currently.-->
        <form id='surveyForm' action="{{ route('userProfileEdit') }}">
		<div class="survey-title">
			<h2>User Profile</h2>
		</div>
        <div>
            <!--All data will read from $SESSION or direct from database-->
            <div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">First Name</label>
            <div><?php echo $_SESSION['firstname'] ?></div>
            </div>
            <div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">Last Name</label>
            <div><?php echo $_SESSION['lastname'] ?></div>
            </div>
            <div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">Phone Number</label>
            <div><?php echo $_SESSION['phoneNumber'] ?></div>
            </div>
            <div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">Email Address</label>
            <div><?php echo $_SESSION['emailAddress'] ?></div>
            </div>
            <div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">Address</label>
            <div><?php echo $_SESSION['address'] ?></div>
            </div>
            <div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">City</label>
            <div><?php echo $_SESSION['city'] ?></div>
            </div>
            <div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">Zip Code</label>
            <div><?php echo $_SESSION['zipCode'] ?></div>
            </div>
            <div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">Country</label>
            <div><?php echo $_SESSION['Country'] ?></div>
            </div>
            <!--Where the password should go. Not sure about print password directly on the user profile page.-->
        </div>
        <button type="submit" class="btn btn-primary" style="width: 150px;">Edit</button>
        </form>
        </section>
    </div>
</body>

</html>