
@section('login')
        <div class="container" style="display: flex; flex-direction: column; align-items: center;">
            <p>Please Log in Here As A Participant</p>
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf

                <div >
                    <input type="text" name="email" id="email" placeholder="Your email" class="form-control form-width @error('email') border border-danger @enderror" value="{{old('email')}}">
                    @error('email')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                </div>

                <div class="mb-3">
                    <input type="password" name="password" id="password" placeholder="Your password" class="form-control form-width @error('password') border border-danger @enderror">
                    @error('password')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                </div>
                <div >
                    <button type="submit" class="btn btn-primary btn-block mb-3" style="width: 300px!important;">Log in</button>
                </div>

                <div style="display: flex; flex-direction: column; align-items: center;">
                    <p class>Don't have an account? <a href="{{route('register')}}">Sign Up</a> </p>
                    <p class>Are you a researcher? <a href="{{route('loginresearcher')}}">Login here</a> </p>
                </div>
            </form>
    </div>
@endsection('login')
