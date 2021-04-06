@section('leftsidebar')
<section class="left-panel">
    <div class="vws-title"><h2>VWS</h2></div>
    <div class="wrapper">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true"><a>Dashboard</a></li>
            <li class="list-group-item"><a>Wellness Activity</a></li>
            <li class="list-group-item"><a>Survey</a></li>
            <li class="list-group-item"><a>Forums</a></li>
            <li class="list-group-item"><a>Messages</a></li>
            <li class="list-group-item"><a href ="/userProfilePage/{{ auth()->user()->id }}">Profile Page</a></li>
            @auth
            <li class="list-group-item">
                <a href="" class="p-3">{{ auth()->user()->name }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Wellness Activity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" role="tablist" href="#">Survey</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link disabled" href="#">Forums</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Messages</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
              </li>

              <li class="nav-item">
                <form action="{{ route('logout') }}" method="post" class="form-inline" style="
                padding-left: 104px; width:100%">
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
