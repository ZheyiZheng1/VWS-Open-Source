@section('surveyAppendixO')
    <!--top includes greetings, avatar, user name and drop down list-->
    <!--all followed the mainpage design in first mockup, might change in later-->
    <div class="survey-title">
        <h2>Appendix O: Demographic Survey</h2>
    </div>

    <!-- TODO: this is asked once on login -->
    <!--Survey form start from here-->
    <!--Should be in the middle of the screen-->
    <!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
    <div class='survey'>
            @csrf
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" id="inputAge"  name="inputAge" aria-describedby="Age">

                @error('inputAge') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    {{$message}}
                </div>
                 @enderror

            </div>
            <div class="mb-3" id='gender'>
                <label for="gender" class="form-label">Gender</label>
                <!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                    <label class="form-check-label" for="gender">
                        male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female" checked>
                    <label class="form-check-label" for="gender">
                        female
                    </label>
                </div>

                @error('gender') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    {{$message}}
                </div>
                 @enderror



            </div>

            <div class="mb-3">
                <label for="height" class="form-label">Height</label>
                <input type="text" class="form-control" id="inputHeight" name="inputHeight" aria-describedby="Height">

                @error('inputHeight') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    {{$message}}
                </div>
                 @enderror

            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control" id="inputWeight" name="inputWeight" aria-describedby="weight">

                @error('inputWeight') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    {{$message}}
                </div>
                 @enderror
            </div>

            <div class="mb-3">
                <label for="occupation" class="form-label">Occupation</label>
                <input type="text" class="form-control" id="inputOccupation" name="inputOccupation" aria-describedby="occupation">
                @error('inputOccupation') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    {{$message}}
                </div>
                 @enderror
            </div>

            <div class="mb-3">
                <label for="workSituation" class="form-label">Full time or part time employment</label>
                <input type="text" class="form-control" id="inputEmployment" name="inputEmployment" aria-describedby="workSituation">
                @error('inputEmployment') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    {{$message}}
                </div>
                 @enderror
            </div>

            <div class="form-group">
                <label for="chronic">Chronic conditions:</label>
                <textarea class="form-control" rows="5" id="chronic" name="chronic""></textarea>
                @error('chronic') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    {{$message}}
                </div>
                 @enderror
            </div>

    </div>
@endsection('surveyAppendixO')
