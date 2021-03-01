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
    <title>Appendix S: Work Productivity And Activity Impairment Questionnaire General Health (WPAI-GH)</title>

</head>

<body>
<?php
    // Enter host name, database username, password, and database name.
    // connect to database.
    $con = mysqli_connect("localhost","root","","DatabaseName");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        //Put survey answers into variables.
		$answer1 = $_POST['question'];
		$answer2 = $_POST['question2'];
		$answer3 = $_POST['question3'];
		$answer4 = $_POST['question4'];
		$answer5 = $_POST['question5'];
		$answer6 = $_POST['question6'];
        //Fill survey related column with empty strings.
		//change the databaseName!!!
        $query    = "INSERT into databaseName (question1 ,question2 ,question3 ,question4, question5, question6)
                     VALUES ('$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href="{{ route('dashboard') }}">dashboard</a>.</p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href="{{ route('surveyAppendixS') }}">do it again</a>.</p>
                  </div>";
        }
    } else {
?>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

        <section class="right-panel" >
            <form id='surveyForm' action="{{ route('surveyAppendixS') }}" method="post">
				<div class="survey-title">
					<h2>Appendix S: Work Productivity And Activity Impairment Questionnaire General Health (WPAI-GH)</h2>
				</div>

				<div class='survey'>
					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">Are you currently employed (working for pay)?</label>
						<div class="form-check">
							<input class="form-check-input" onclick="becomeAvailable();" type="radio" name="questionOne" id="questionOneAnswer1" value="Yes" checked>
							<label class="form-check-label" for="questionOneAnswer1">
								Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" onclick="becomeReadOnly();"type="radio" name="questionOne" id="questionOneAnswer2" value="No">
							<label class="form-check-label" for="questionOneAnswer2">
								No
							</label>
						</div>
					</div>

					<div class="mb-3"id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">The next questions are about the past seven days, not including today.  During the past seven days, how many hours did you miss from work because of health problems?  Include hours you missed on sick days, times you went in late, left early, etc.  Do not include time you missed to participate in this study.</label>
						<input type="text" class="form-control" id="questionTwo" placeholder="(Hours)" aria-describedby="questionTwo" name="questionTwo">
					</div>

					<div class="mb-3"id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">During the past seven days, how many hours did you miss from work because of any other reason, such as vacation, holidays, time off to participate in this study? </label>
						<input type="text" class="form-control" id="questionThree" placeholder="(Hours)" aria-describedby="questionThree" name="questionThree">
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">During the past seven days, how many hours did you actually work?</label>
						<input type="text" class="form-control" id="questionFour" placeholder="(Hours)" aria-describedby="questionFour" name="questionFour">
					</div>

					<div class="mb-3"id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">During the past seven days, how much did health problems affect your productivity while you were working?  Think about days you were limited in the amount or kind of work you could do, days you accomplished less than you would like, or days you could not do your work as carefully as usual.  On a scale from 0 to 10, with 0 meaning health problems had no effect on work, and 10 meaning health problems completely prevented you from working, how much did health problems affect your productivity while you were working? If health problems affected your work only a little, choose a low number.  Choose a high number if health problems affected your work a great deal.  What number do you choose? </label>
						<input type="text" class="form-control" id="questionFive" placeholder="(0-10)" aria-describedby="questionFive" name="questionFive">
					</div>

					<div class="mb-3"id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">
							<p>Now I’d like to ask you about your regular daily activities, (other than your job). By this I mean the usual activities that you do every day, such as work around the house, shopping, child care, exercising, etc.</p>
							<p>During the past seven days, not including today, how much did health problems affect your ability to do your regular daily activities?  Think about times you were limited in the amount or kind of activities you could do, times you accomplished less than you would like or times you could not do your regular activities as carefully as usual. On a scale from 0 to 10, with 0 meaning health problems had no effect on your regular activities, and 10 meaning health problems completely prevented you from doing your regular activities, how much did health problems affect your regular activities?</p>
							<p>If health problems affected your activities only a little, choose a low number.  Choose a high number if health problems affected your activities a great deal. What number do you choose?	</p>
						</label>
						<input type="text" class="form-control" id="questionSix" placeholder="(0-10)" aria-describedby="questionSix" name="questionSix">
					</div>
				</div>

				<script>
					function becomeReadOnly(){
						document.getElementById("questionTwo").readOnly = true;
						document.getElementById("questionThree").readOnly = true;
						document.getElementById("questionFour").readOnly = true;
						document.getElementById("questionFive").readOnly = true;
					}

					function becomeAvailable(){
						document.getElementById("questionTwo").readOnly = false;
						document.getElementById("questionThree").readOnly = false;
						document.getElementById("questionFour").readOnly = false;
						document.getElementById("questionFive").readOnly = false;
					}

					function becomeReadOnlyQ4(){
						document.getElementById("questionFour").readOnly = true;
						document.getElementById("questionFive").readOnly = true;
						document.getElementById("questionFourHour").readOnly = true;
					}

					function becomeAvailableQ4(){
						document.getElementById("questionFour").readOnly = false;
						document.getElementById("questionFive").readOnly = false;
						document.getElementById("questionFourHour").readOnly = false;
					}
				</script>
            <button type="submit" class="btn btn-primary" style="width: 150px;">Submit</button>
            </form>
        </section>
    </div>
<?php
}
?>
</body>

</html>
