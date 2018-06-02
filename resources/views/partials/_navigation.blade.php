
    <body class="landing">

        <!-- Header -->
            <header id="header">
                <h1><strong><a href="">Logo</a></strong> Section</h1>
                <nav id="nav">
                    <ul>
                       
                         @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <li><a href="{{ url('/play_games') }}">Play Games</a></li>
                                <li><a href="{{ url('/home') }}">Home</a></li>
                            @else
                            <a href="{{ url('/play_games') }}">Play Games</a>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endauth
                        </div>
                    @endif 
                    </ul>
                </nav>

 </header>