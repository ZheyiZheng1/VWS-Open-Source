
@section('surveyAppendixS')
    <!-- THIS IS ASKED PERIODICALLY -->
	<div class="survey-title">
        <h2>Appendix S: Work Productivity And Activity Impairment Questionnaire General Health (WPAI-GH)</h2>
    </div>

	<div class='survey'>
		<div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">Are you currently employed (working for pay)?</label>
            <div class="form-check">
                <input class="form-check-input" onclick="becomeAvailable();" type="radio" name="questionOne" id="questionOneAnswer1" checked>
                <label class="form-check-label" for="questionOneAnswer1">
                	Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" onclick="becomeReadOnly();"type="radio" name="questionOne" id="questionOneAnswer2">
                <label class="form-check-label" for="questionOneAnswer2">
                	No
                </label>
            </div>
        </div>

		<div class="mb-3"id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">The next questions are about the past seven days, not including today.  During the past seven days, how many hours did you miss from work because of health problems?  Include hours you missed on sick days, times you went in late, left early, etc.  Do not include time you missed to participate in this study.</label>
            <input type="text" class="form-control" id="questionTwo" placeholder="(Hours)" aria-describedby="questionTwo">
        </div>

		<div class="mb-3"id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">During the past seven days, how many hours did you miss from work because of any other reason, such as vacation, holidays, time off to participate in this study? </label>
            <input type="text" class="form-control" id="questionThree" placeholder="(Hours)" aria-describedby="questionThree">
        </div>

		<div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">During the past seven days, how many hours did you actually work?</label>
            <input type="text" class="form-control" id="questionFour" placeholder="(Hours)" aria-describedby="questionFour">
        </div>

		<div class="mb-3"id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">During the past seven days, how much did health problems affect your productivity while you were working?  Think about days you were limited in the amount or kind of work you could do, days you accomplished less than you would like, or days you could not do your work as carefully as usual.  On a scale from 0 to 10, with 0 meaning health problems had no effect on work, and 10 meaning health problems completely prevented you from working, how much did health problems affect your productivity while you were working? If health problems affected your work only a little, choose a low number.  Choose a high number if health problems affected your work a great deal.  What number do you choose? </label>
            <input type="text" class="form-control" id="questionFive" placeholder="(0-10)" aria-describedby="questionFive">
        </div>

		<div class="mb-3"id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">
				<p>Now I’d like to ask you about your regular daily activities, (other than your job). By this I mean the usual activities that you do every day, such as work around the house, shopping, child care, exercising, etc.</p>
				<p>During the past seven days, not including today, how much did health problems affect your ability to do your regular daily activities?  Think about times you were limited in the amount or kind of activities you could do, times you accomplished less than you would like or times you could not do your regular activities as carefully as usual. On a scale from 0 to 10, with 0 meaning health problems had no effect on your regular activities, and 10 meaning health problems completely prevented you from doing your regular activities, how much did health problems affect your regular activities?</p>
				<p>If health problems affected your activities only a little, choose a low number.  Choose a high number if health problems affected your activities a great deal. What number do you choose?	</p>
			</label>
            <input type="text" class="form-control" id="questionSix" placeholder="(0-10)" aria-describedby="questionSix">
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
@endsection('surveyAppendixS')
