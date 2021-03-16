@section('surveyPatientHealth')
    <!--top includes greetings, avatar, user name and drop down list-->
    <!--all followed the mainpage design in first mockup, might change in later-->
    <div class="survey-title">
        <h2>PATIENT HEALTH QUESTIONNAIRE</h2>
    </div>

    <!--Survey form start from here-->
    <!--Should be in the middle of the screen-->
    <!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
    <div class='survey'>
            @csrf
            <p>Answer each question by clicking on the option that best describes your mood:</p>
			<p>0 = Not at all</p>
			<p>1 = Several Days</p>
			<p>2 = More than half the days</p>
			<p>3 = Nearly every day</p>
            <p>Over the last 2 weeks, how often have you been bothered by any of the following problems?</p>
            <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 1) Little interest or pleasure in doing things</label>
                 <input type="range" class="form-range" min="0" max="3" step="1" id="customRange1" onchange="updateQuestion(0)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 2) Feeling down, depressed, or hopeless</label>
                 <input type="range" class="form-range" min="0" max="3" step="1" id="customRange1" onchange="updateQuestion(1)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 3) Trouble falling or staying asleep, or sleeping too much</label>
                 <input type="range" class="form-range" min="0" max="3" step="1" id="customRange1" onchange="updateQuestion(2)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 4) Feeling tired or having little energy</label>
                 <input type="range" class="form-range" min="0" max="3" step="1" id="customRange1" onchange="updateQuestion(3)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 5) Poor appetite or overeating</label>
                 <input type="range" class="form-range" min="0" max="3" step="1" id="customRange1" onchange="updateQuestion(4)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 6) Feeling bad about yourself – or that you are a failure or have let yourself or your family down</label>
                 <input type="range" class="form-range" min="0" max="3" step="1" id="customRange1" onchange="updateQuestion(5)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 7) Trouble concentrating on things, such as reading the newspaper or watching television</label>
                 <input type="range" class="form-range" min="0" max="3" step="1" id="customRange1" onchange="updateQuestion(6)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 8) Moving or speaking so slowly that other people could have noticed? Or the opposite – being so fidgety or restless that you have been moving around a lot more than usual</label>
                 <input type="range" class="form-range" min="0" max="3" step="1" id="customRange1" onchange="updateQuestion(7)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label">9) Thoughts that you would be better off dead or of hurting yourself in some way</label>
                 <input type="range" class="form-range" min="0" max="3" step="1" id="customRange1" onchange="updateQuestion(8)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>

             <div class="sliderCount"></div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>

        let getAllQuestions = document.querySelectorAll('.question');

        for (let i = 0; i < getAllQuestions.length; i++) {
            let outputDiv = getAllQuestions[i].querySelector('.output');
            let currentLikertValue = getAllQuestions[i].querySelector('.form-range').value;
            outputDiv.innerText = currentLikertValue;
        }

        for (let i = 0; i <getAllQuestions; i++)
        {
            let sliderCountDiv = getAllQuestions[i].querySelector('.output');
            let sliderTemp = sliderTemp + getAllQuestions[i].querySelector('.form-range').value;
            sliderCountDiv.innerText = sliderTemp;
        }

        function updateQuestion(questionNum) {
            let getAllQuestions = document.querySelectorAll('.question');
            let outputDiv = getAllQuestions[questionNum];
            let inlineElement = outputDiv.querySelector('.output');
            let currentLikertValue = getAllQuestions[questionNum].querySelector('.form-range').value;
            inlineElement.innerText = currentLikertValue;
        }

    </script>
@endsection('surveyPatientHealth')
