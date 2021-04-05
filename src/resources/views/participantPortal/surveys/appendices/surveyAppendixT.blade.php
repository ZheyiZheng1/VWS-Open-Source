@section('surveyAppendixT')
<!-- THIS IS ASKED PERIODICALLY -->
<div class="survey-title">
    <h2>Appendix T: GAD-7 Anxiety</h2>
</div>
			<!--Survey form start from here-->
			<!--Should be in the middle of the screen-->
			<!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
			<div class='survey'>
					<p>Over the last two weeks, how often have you been bothered by the following problems?</p>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">{{ $questions[0] }}</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question" id="answer1" checked>
							<label class="form-check-label" for="answer1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question" id="answer2">
							<label class="form-check-label" for="answer2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question" id="answer3">
							<label class="form-check-label" for="answer3">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question" id="answer4">
							<label class="form-check-label" for="answer4">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">{{ $questions[1] }}</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question2" id="q2answer1" checked>
							<label class="form-check-label" for="q2answer1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question2" id="q2answer2">
							<label class="form-check-label" for="q2answer2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question2" id="q2answer3">
							<label class="form-check-label" for="q2answer3">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question2" id="q2answer4">
							<label class="form-check-label" for="q2answer4">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">{{ $questions[2] }}</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="q3answer1" checked>
							<label class="form-check-label" for="q3answer1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="q3answer2">
							<label class="form-check-label" for="q3answer2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="q3answer3">
							<label class="form-check-label" for="q3answer3">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="q3answer4">
							<label class="form-check-label" for="q3answer4">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">{{ $questions[3] }}</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question4" id="q4answer1" checked>
							<label class="form-check-label" for="q4answer1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question4" id="q4answer2">
							<label class="form-check-label" for="q4answer2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question4" id="q4answer3">
							<label class="form-check-label" for="q4answer3">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question4" id="q4answer4">
							<label class="form-check-label" for="q4answer4">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">{{ $questions[4] }}</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question5" id="q5answer1" checked>
							<label class="form-check-label" for="q5answer1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question5" id="q5answer2">
							<label class="form-check-label" for="q5answer2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question5" id="q5answer3">
							<label class="form-check-label" for="q5answer3">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question5" id="q5answer4">
							<label class="form-check-label" for="q5answer4">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">{{ $questions[5] }}</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question6" id="q6answer1" checked>
							<label class="form-check-label" for="q6answer1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question6" id="q6answer2">
							<label class="form-check-label" for="q6answer2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question6" id="q6answer3">
							<label class="form-check-label" for="q6answer3">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question6" id="q6answer4">
							<label class="form-check-label" for="q6answer4">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">{{ $questions[6] }}</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question7" id="q7answer1" checked>
							<label class="form-check-label" for="q7answer1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question7" id="q7answer2">
							<label class="form-check-label" for="q7answer2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question7" id="q7answer3">
							<label class="form-check-label" for="q7answer3">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question7" id="q7answer4">
							<label class="form-check-label" for="q7answer4">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">{{ $questions[7] }}</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question8" id="q8answer1" checked>
							<label class="form-check-label" for="q8answer1">
								Not difficult at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question8" id="q8answer2">
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
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
@endsection('surveyAppendixT')
