<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img class="fictimLogo" src="{{asset('assets/images/fictim.png')}}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts') }}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    @if(session()->has('user') && session()->get('user')->IsAdmin)
                        <li><a class="nav-link" href="{{ url("admin") }}">Admin</a></li>
                    @endif
                    @if(!session()->has("user"))
                        <li><a class="nav-link" href="{{ route("login-form") }}">Login</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-form') }}">Register</a>
                        </li>
                    @endif
                        @if(session()->has("user"))
                            <li><a class="nav-link" href="{{ route("logout") }}">Logout</a></li>
                        @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
