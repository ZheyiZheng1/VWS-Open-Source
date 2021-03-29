@section('leftsidebar')
<section class="left-panel">
    <div class="vws-title"><h2>VWS</h2></div>
    <div class="wrapper">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="list-group-item"><a>Wellness Activity</a></li>
            <li class="list-group-item"><a href="{{route('researchSurvey')}}">Survey</a></li>
            <li class="list-group-item"><a href="/dashboard/searchUserPage">Survey Viewer</a></li>
            <li class="list-group-item"><a>Forums</a></li>
            <li class="list-group-item"><a>Messages</a></li>
            @auth
            <li class="list-group-item">
                <a href="" class="p-3">{{ auth()->user()->name }}</a>
            </li>
            <li class="list-group-item">
                <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @endauth

            @guest
                <li class="list-group-item">
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
            @endguest
        </ul>
    </div>
    <div class="upei-logo"><img src="images/example2.png" style="height: 30px; width: 30px;"></img></div>
</section>
@endsection('leftsidebar')
