<!doctype html>
<html lang="{{ app()->getLocale() }}">
  
    <head>
        <title>The Helper</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body class="landing">

        <!-- Header -->
            <header id="header">
                <h1><strong><a href="index.html">Logo</a></strong> Section</h1>
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

                <div class="flex-center position-ref full-height">
                   
                </div>

            </header>

            <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

        <!-- Banner -->
            <section id="banner" >
                <h2>Sensory Preference Based Learning</h2>
                <p>We learn through all of our senses, but generally favor one or two. </br>We process visually (through images, color and form), aurally (by hearing and sound), kinesthetically</br> (by moving and manipulating) and through formal text processing (through reading and writing.)</p>
                <ul class="actions">
                    <li><a href="" class="button special big">Find out your sensory perference</a></li>
                </ul>
         </section>

            <!-- One -->
                <section id="one" class="wrapper style1">
                    <div class="container 75%">
                        <div class="row 200%">
                            <div class="6u 12u$(medium)">
                                <header class="major">
                                    <h2>Dyslexia</h2>
                                    <p>Dyslexia is a health condition that causes problems with reading, writing and spelling.<a href="#" class = "dbutton">Read More</a></p>
                                </header>
                            </div>
                            <div class="6u$ 12u$(medium)">
                                <header class="major">
                                <h2>Dementia</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ea mollitia corporis id<a href="#" class = "dbutton">Read More</a></p>
                                </header>
                            </div>
                        </div>
                    </div>
                </section>

            <!-- Two -->
                <section id="two" class="wrapper style2 special">
                    <div class="container">
                        <header class="major">
                            <h2>Fusce ultrices fringilla</h2>
                            <p>Maecenas vitae tellus feugiat eleifend</p>
                        </header>
                        <div class="row 150%">
                            <div class="6u 12u$(xsmall)">
                                <div class="image fit captioned">
                                    <img src="{{asset('img/pic02.jpg')}}" alt="" />
                                    <h3>Lorem ipsum dolor sit amet.</h3>
                                </div>
                            </div>
                            <div class="6u$ 12u$(xsmall)">
                                <div class="image fit captioned">
                                    <img src="{{asset('img/pic03.jpg')}}" alt="" />
                                    <h3>Illum, maiores tempora cupid?</h3>
                                </div>
                            </div>
                        </div>
            <!--            <ul class="actions">
                            <li><a href="#" class="button special big">Nulla luctus</a></li>
                            <li><a href="#" class="button big">Sed vulputate</a></li>
            -->         </ul>
                    </div>
                </section>

            <!-- Three -->
                <section id="three" class="wrapper style1">
                    <div class="container">
                        <header class="major special">
                            <h2>About Us</h2>
                        </header>
                        <div class="feature-grid">
                            <div class="feature">
                                <div class="image rounded"><img src="{{asset('img/pic04.jpg')}}" alt="" /></div>
                                <div class="content">
                                    <header>
                                        <h4>Kushal Sharma</h4>
                                        <p>BSC CsIT Student</p>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore esse tenetur accusantium porro omnis, unde mollitia totam sit nesciunt consectetur.</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="image rounded"><img src="{{asset('img/pic05.jpg')}}" alt="" /></div>
                                <div class="content">
                                    <header>
                                        <h4>Arogya Rijal</h4>
                                        <p>BSC CsIT Student</p>
                                    </header>
                                    <p>Animi mollitia optio culpa expedita. Dolorem alias minima culpa repellat. Dolores, fuga maiores ut obcaecati blanditiis, at aperiam doloremque.</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="image rounded"><img src=" {{asset('img/pic06.jpg')}}" alt="" /></div>
                                <div class="content">
                                    <header>
                                        <h4>Sabin Pokhrel</h4>
                                        <p>BSC CsIT Student</p>
                                    </header>
                                    <p>Maiores iusto inventore fugit architecto est iste expedita commodi sed, quasi feugiat nam neque mollitia vitae omnis, ea natus facere.</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="image rounded"><img src="{{asset('img/pic07.jpg')}}" alt="" /></div>
                                <div class="content">
                                    <header>
                                        <h4>Saugat Timsina</h4>
                                        <p>BSC CsIT Student</p>
                                    </header>
                                    <p>Vitae earum unde, autem labore voluptas ex, iste dolorum inventore natus consequatur iure similique obcaecati aut corporis hic in! Porro sed.</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="image rounded"><img src="{{asset('img/pic04.jpg')}}" alt="" /></div>
                                <div class="content">
                                    <header>
                                        <h4>Asish Rayamajhi</h4>
                                        <p>BSC CsIT Student</p>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore esse tenetur accusantium porro omnis, unde mollitia totam sit nesciunt consectetur.</p>
                                </div>
                        </div>
                    </div>
                </section>

            <!-- Four -->
                <section id="four" class="wrapper style3 special">
                    <div class="container">
                        <header class="major">
                            <h2>Aenean elementum ligula</h2>
                            <p>Feugiat sed lorem ipsum magna</p>
                        </header>
                        <ul class="actions">
                            <li><a href="#" class="button special big">Get in touch</a></li>
                        </ul>
                    </div>
                </section>

        <!-- Footer -->
            <footer id="footer">
                <div class="container">
                    <ul class="icons">
                        <li><a href="#" class="icon fa-facebook"></a></li>
                        <li><a href="#" class="icon fa-twitter"></a></li>
                        <li><a href="#" class="icon fa-instagram"></a></li>
                    </ul>
                    <ul class="copyright">
                        <li>&copy; Untitled</li>
                        <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
                        <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
                    </ul>
                </div>
            </footer>

        <!-- Scripts -->
            <script src="js/jquery.min.js"></script>
            <script src="js/skel.min.js"></script>
            <script src="js/util.js"></script>
            <script src="js/main.js"></script>

    </body>
</html>