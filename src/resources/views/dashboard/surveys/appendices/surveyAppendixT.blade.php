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
    <title>Appendix T: GAD-7 Anxiety</title>

</head>

<body>
<?php
    // Enter host name, database username, password, and database name.
    // connect to database.
    $con = mysqli_connect("localhost","root","","databaseName");
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
		$answer7 = $_POST['question7'];
		$answer8 = $_POST['question8'];
        //Fill survey related column with empty strings.
		//change the databaseName!!!
        $query    = "INSERT into databaseName (question1 ,question2 ,question3 ,question4, question5, question6, question7, question8)
                     VALUES ('$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href="{{ route('dashboard') }}">dashboard</a>.</p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href="{{ route('surveyAppendixT') }}">do it again</a>.</p>
                  </div>";
        }
    } else {
?>
<div class="main">
    @section('leftsidebar')
        @include('dashboard.leftsidebar')
    @show

    <section class="right-panel" >
		<form id='surveyForm' action="{{ route('surveyAppendixT') }}" method="post">
		<div class="survey-title">
			<h2>Appendix T: GAD-7 Anxiety</h2>
		</div>
		<!--Survey form start from here-->
		<!--Should be in the middle of the screen-->
		<!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
		<div class='survey'>
			<p>Over the last two weeks, how often have you been bothered by the following problems?</p>
				
				<div class="mb-3" id='surveyQuestion'>
					<label for="surveyQuestion" class="form-label">Feeling nervous, anxious, or on edge?</label>
					<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question" id="answer1" value="Not at all">
						<label class="form-check-label"  for="answer1">
							Not at all
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question" id="answer2" value="Several days">
						<label class="form-check-label" for="answer2">
							Several days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question" id="answer3" value="More than half the days">
						<label class="form-check-label" for="answer3">
							More than half the days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question" id="answer4" value="Nearly every day">
						<label class="form-check-label" for="answer4">
							Nearly every day
						</label>
					</div>
				</div>

				<div class="mb-3" id='surveyQuestion'>
					<label for="surveyQuestion" class="form-label">Not being able to stop or control worrying?</label>
					<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
						<input class="form-check-input" type="radio" name="question2" id="q2answer1" value="Not at all">
						<label class="form-check-label" for="q2answer1">
							Not at all
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question2" id="q2answer2" value="Several days">
						<label class="form-check-label" for="q2answer2">
							Several days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question2" id="q2answer3" value="More than half the days">
						<label class="form-check-label" for="q2answer3">
							More than half the days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question2" id="q2answer4" value="Nearly every day">
						<label class="form-check-label" for="q2answer4">
							Nearly every day
						</label>
					</div>
				</div>

				<div class="mb-3" id='surveyQuestion'>
					<label for="surveyQuestion" class="form-label">Worrying too much about different things?</label>
					<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question3" id="q3answer1" value="Not at all">
						<label class="form-check-label" for="q3answer1">
							Not at all
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question3" id="q3answer2" value="Several days">
						<label class="form-check-label" for="q3answer2">
							Several days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question3" id="q3answer3" value="More than half the days">
						<label class="form-check-label" for="q3answer3">
							More than half the days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question3" id="q3answer4" value="Nearly every day">
						<label class="form-check-label" for="q3answer4">
							Nearly every day
						</label>
					</div>
				</div>

				<div class="mb-3" id='surveyQuestion'>
					<label for="surveyQuestion" class="form-label">Trouble relaxing?</label>
					<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question4" id="q4answer1" value="Not at all">
						<label class="form-check-label" for="q4answer1">
							Not at all
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question4" id="q4answer2" value="Several days">
						<label class="form-check-label" for="q4answer2">
							Several days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question4" id="q4answer3" value="More than half the days">
						<label class="form-check-label" for="q4answer3">
							More than half the days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question4" id="q4answer4" value="Nearly every day">
						<label class="form-check-label" for="q4answer4">
							Nearly every day
						</label>
					</div>
				</div>

				<div class="mb-3" id='surveyQuestion'>
					<label for="surveyQuestion" class="form-label">Being so restless that it is hard to sit still?</label>
					<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question5" id="q5answer1" value="Not at all">
						<label class="form-check-label" for="q5answer1">
							Not at all
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question5" id="q5answer2" value="Several days">
						<label class="form-check-label" for="q5answer2">
							Several days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question5" id="q5answer3" value="More than half the days">
						<label class="form-check-label" for="q5answer3">
							More than half the days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question5" id="q5answer4" value="Nearly every day">
						<label class="form-check-label" for="q5answer4">
							Nearly every day
						</label>
					</div>
				</div>

				<div class="mb-3" id='surveyQuestion'>
					<label for="surveyQuestion" class="form-label">Becoming easily annoyed or irritable?</label>
					<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question6" id="q6answer1" value="Not at all">
						<label class="form-check-label" for="q6answer1">
							Not at all
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question6" id="q6answer2" value="Several days">
						<label class="form-check-label" for="q6answer2">
							Several days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question6" id="q6answer3" value="More than half the days">
						<label class="form-check-label" for="q6answer3">
							More than half the days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question6" id="q6answer4" value="Nearly every day">
						<label class="form-check-label" for="q6answer4">
							Nearly every day
						</label>
					</div>
				</div>

				<div class="mb-3" id='surveyQuestion'>
					<label for="surveyQuestion" class="form-label">Feeling afraid, as if something awful might happen?</label>
					<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question7" id="q7answer1" value="Not at all">
						<label class="form-check-label" for="q7answer1">
							Not at all
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question7" id="q7answer2" value="Several days">
						<label class="form-check-label" for="q7answer2">
							Several days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question7" id="q7answer3" value="More than half the days">
						<label class="form-check-label" for="q7answer3">
							More than half the days
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question7" id="q7answer4" value="Nearly every day">
						<label class="form-check-label" for="q7answer4">
							Nearly every day
						</label>
					</div>
				</div>

				<div class="mb-3" id='surveyQuestion'>
					<label for="surveyQuestion" class="form-label">If you check any problems, how difficult have they made it for you to do your work, take care of things at home, or get along with other people?</label>
					<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question8" id="q8answer1" value="Not difficult at all">
						<label class="form-check-label" for="q8answer1">
							Not difficult at all
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question8" id="q8answer2" value="Somewhat difficult">
						<label class="form-check-label" for="q8answer2">
							Somewhat difficult
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question8" id="q8answer3">
						<label class="form-check-label" for="q8answer3">
							Very difficult
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question8" id="q8answer4">
						<label class="form-check-label" for="q8answer4">
							Extremely difficult
						</label>
					</div>
				</div>
		</div>
			<br>
			<p>Source: Primary Care Evaluation of Mental Disorders Patient Health Questionnaire (PRIME-MD-PHQ). The PHQ was developed by Drs. Robert L. Spitzer, Janet B.W. Williams, Kurt Kroenke, and colleagues. For research information, contact Dr. Spitzer at ris8@columbia.edu. PRIME-MD® is a trademark of Pfizer Inc. Copyright© 1999 Pfizer Inc. All rights reserved. Reproduced with permission</p>
        <button type="submit" class="btn btn-primary" style="width: 150px;">Submit</button>
        </form>
	</section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php
}
?>

</body>

</html>