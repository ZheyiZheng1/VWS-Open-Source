@section('leftsidebar')
<section class="left-panel">
    <div class="vws-title"><h2>VWS</h2></div>
    <div class="wrapper">
        <ul class="list-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <li class="list-group-item">
              <a class="{{ request()->routeIs('dashboard') ? 'active' : null }}" role="tablist" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="list-group-item">
              <a class="disabled"  href="#">Wellness Activity</a>
            </li>
            <li class="list-group-item">
              <a class="{{ request()->is('surveys*') ? 'active' : null }}" role="tablist" href="{{route('researchSurvey')}}">Survey</a>
            </li>
            <li class="list-group-item ">
              <a class="{{ request()->is('dashboard/searchUserProfilePage*') ? 'active' : null }}" role="tablist" href="{{route('searchUsers')}}">Survey Viewer</a>
            </li>
            <li class="list-group-item ">
                <a class="disabled" href="#">Forums</a>
              </li>
              <li class="list-group-item">
                <a class="disabled" href="#">Messages</a>
              </li>
              @auth
              <li class="list-group-item">
                <a href="/userProfilePage/{{ auth()->user()->id }}">{{ auth()->user()->name }}</a>
              </li>

              <li class="list-group-item">
                <form action="{{ route('logout') }}" method="post" class="form-inline" style="width:100%; display: flex; align-items: center; justify-content: center;">
                    @csrf
                        <button class="btn btn-outline-success" type="submit">Logout</button>
                    </form>
              </li>
              @endauth

              @guest
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
              </li>
              @endguest

        </ul>
    </div>
    <div class="upei-logo"><img src="{{URL::to('/images/UPEI_Logo.png')}}" style="height: 54px; width: 134px;"></img></div>
</section>
@endsection('leftsidebar')
