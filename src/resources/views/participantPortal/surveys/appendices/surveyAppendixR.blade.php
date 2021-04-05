@section('surveyAppendixR')
        @csrf
            <!-- THIS IS ASKED EVERY 6 MONTHS likely -->
            <p>During the past 6 months, how many times have you</p>
            <div class="mb-3">
                <label for="physicianFequency" class="form-label">{{ $questions[0] }}</label>
                <input type="text" class="form-control" id="inputphysician" name="inputPhysician" aria-describedby="physicianFequency" value="{{ old('inputPhysician') }}">

                @error('inputPhysician') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    {{$message}}
                </div>
                 @enderror

            </div>

            <div class="mb-3">
                <label for="specialist" class="form-label">{{ $questions[1] }}</label>
                <input type="text" class="form-control" id="inputspecialist" name="inputSpecialist" aria-describedby="specialist" value="{{ old('inputSpecialist') }}">

                @error('inputSpecialist') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror

            </div>

            <div class="mb-3">
                <label for="healthcare" class="form-label">{{ $questions[2] }}</label>
                <input type="text" class="form-control" id="inputHealthcare" name="inputHealthcare" aria-describedby="healthcare" value="{{ old('inputHealthcare') }}">

                @error('inputSpecialist') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror
            </div>

            <div class="form-group">
                <label for="otherHealthcare">{{ $questions[3] }}</label>
                <textarea class="form-control" rows="5" id="otherHealthcare" name="otherHealthcare"> {{ old('otherHealthcare') }}</textarea>

                @error('otherHealthcare') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror

            </div>

            <div class="mb-3" id='walkIn'>
                <label for="walkIn" class="form-label">{{ $questions[4] }}</label>
                <!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="questionFive" id="questionFiveAnswer1" value="Yes"  {{ old('questionFive') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label" for="questionFiveAnswer1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="questionFive" id="questionFiveAnswer2" value="No" {{ old('questionFive') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label" for="questionFiveAnswer2">
                        No
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="walkInTimes" class="form-label">{{ $questions[5] }}</label>
                <input type="text" class="form-control" id="walkInTimes" name="walkInTimes" aria-describedby="walkInTimes" value="{{ old('walkInTimes') }}">

                @error('walkInTimes') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror

            </div>

            <div class="mb-3" id='emergencyRoom'>
                <label for="emergencyRoom" class="form-label">{{ $questions[6] }}?</label>
                <!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="questionSeven" id="questionSevenAnswer1" value="Yes" {{ old('questionSeven') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label" for="questionSevenAnswer1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="questionSeven" id="questionSevenAnswer2" value="No" {{ old('questionSeven') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label" for="questionSevenAnswer2">
                        No
                    </label>
                </div>

                @error('questionSeven') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror
            </div>

            <div class="mb-3">
                <label for="emergencyRoomTimes" class="form-label">{{ $questions[7] }}</label>
                <input type="text" class="form-control" id="emergencyRoomTimes" name="emergencyRoomTimes" aria-describedby="emergencyRoomTimes" value="{{ old('emergencyRoomTimes') }}">

                @error('emergencyRoomTimes') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror

            </div>

            <div class="mb-3" id='hospital'>
                <label for="hospital" class="form-label">{{ $questions[8] }}</label>
                <!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="questionNine" id="questionNineAnswer1" value="Yes" {{ old('questionNine') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label" for="questionNineAnswer1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="questionNine" id="questionNineAnswer2" value="No" {{ old('questionNine') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label" for="questionNineAnswer2">
                        No
                    </label>
                </div>

                @error('questionNine') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror
            </div>

            <div class="mb-3">
                <label for="hospitalTimes" class="form-label">{{ $questions[9] }}</label>
                <input type="text" class="form-control" id="hospitalTimes" name="hospitalTimes" aria-describedby="hospitalTimes" value="{{ old('hospitalTimes') }}">

                @error('hospitalTimes') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror
            </div>

            <div class="mb-3" id='nightHospital'>
                <label for="nightHospital" class="form-label">{{ $questions[10] }}</label>
                <!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="questionEleven" id="questionElevenAnswer1" value="Yes" {{ old('questionEleven') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label" for="questionElevenAnswer1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="questionEleven" id="questionElevenAnswer2" value="No" {{ old('questionEleven') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label" for="questionElevenAnswer2">
                        No
                    </label>
                </div>

                @error('questionEleven') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror
            </div>

            <div class="mb-3">
                <label for="nightHospitalTimes" class="form-label">{{ $questions[11] }}</label>
                <input type="text" class="form-control" id="nightHospitalTimes" name="nightHospitalTimes" aria-describedby="nightHospitalTimes" value="{{ old('nightHospitalTimes') }}">

                @error('nightHospitalTimes') <!-- outputs error message -->
                <div class="mt-2 text-danger">
                    <p>This is required</p>
                </div>
                 @enderror

            </div>
@endsection('surveyAppendixR')
