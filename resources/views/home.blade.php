<!DOCTYPE HTML>

<html>
<head>
    <title>Practical Based Popurum Community</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="/">PBPC Beyond Reality</a></h1>
        <nav class="links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Post</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <nav class="main">
            <ul>
                <li class="search">
                    <a class="fa-search" href="#search">Search</a>
                    <form id="search" method="get" action="#">
                        <input type="text" name="query" placeholder="Search">
                    </form>
                </li>
                <li class="menu">
                    <a class="fa-bars" href="#menu">Menu</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <section id="menu">

        <!-- Search -->
        <section>
            <form class="search" method="get" action="#">
                <input type="text" name="query" placeholder="Search" />
            </form>
        </section>

        <!-- Links -->
        <section>
            <ul class="links">
                <li>
                    <a href="#">
                        <h3>Wisdom</h3>
                        <p>Kownledge may be power but wisdom is unmatched</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Courage</h3>
                        <p>it feels too far until your there.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Noise</h3>
                        <p>Discriptive forces comes in all shapes and size</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Enlightment</h3>
                        <p>insight is more valuable than hindsight</p>
                    </a>
                </li>
            </ul>
        </section>

        <!-- Actions -->
        <section>
            <ul class="actions stacked">
                <li><a href="{{url('login')}}" class="button large fit">Log In</a></li>
            </ul>
            <ul class="actions stacked">
                <li><a href="{{url('register')}}" class="button large fit">Register</a></li>
            </ul>
        </section>

    </section>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="{{url('/pbpc_Main_content_1')}}">PbPC INITIATIVE</a></h2>
                    <p>PBPC helps young generation to know when to pull the trigger in their lives</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-11-01">November 1, 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <a href="{{url('/pbpc_Main_content_1')}}" class="image featured"><img src="{{asset('images/girls.jpg')}}" alt="" /></a>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            <footer>
                <ul class="actions">
                    <li><a href="{{url('/pbpc_Main_content_1')}}" class="button large">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="#">General</a></li>
                     @if (Auth::user() == null)
                       <li><a href="{{url('login')}}" class="icon solid fa-heart">28</a></li>
                       @elseif(Auth::user() != null)
                         <li><a href="{{url('/likes')}}" class="icon solid fa-heart">28</a></li>
                     @endif

                    <li><a href="#" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
        </article>

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="{{url('/pbpc_Main_content_2')}}">a pride of mswiswi</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-10-25">October 25, 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <a href="{{url('/pbpc_Main_content_2')}}" class="image featured"><img src="{{asset('images/children.jpg')}}" alt="" /></a>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
            <footer>
                <ul class="actions">
                    <li><a href="{{url('/pbpc_Main_content_2')}}" class="button large">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                  @if (Auth::user() == null)
                    <li><a href="{{url('login')}}" class="icon solid fa-heart">28</a></li>
                    @elseif(Auth::user() != null)
                      <li><a href="{{url('/likes')}}" class="icon solid fa-heart">28</a></li>
                  @endif

                  <li><a href="#" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
        </article>

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="{{url('/pbpc_Main_content_3')}}">it feels too far until your there</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-10-22">October 22, 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <a href="{{url('/pbpc_Main_content_3')}}" class="image featured"><img src="{{asset('images/climbing.jpg')}}" alt="" /></a>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
            <footer>
                <ul class="actions">
                    <li><a href="{{url('/pbpc_Main_content_3')}}" class="button large">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                  <li><a href="#">General</a></li>
                  @if (Auth::user() == null)
                    <li><a href="{{url('login')}}" class="icon solid fa-heart">28</a></li>
                    @elseif(Auth::user() != null)
                      <li><a href="{{url('/likes')}}" class="icon solid fa-heart">28</a></li>
                  @endif


                  <li><a href="#" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
        </article>



        <!-- Pagination -->
        <ul class="actions pagination">
            <li><a href="" class="disabled button large previous">Previous Page</a></li>
            <li><a href="#" class="button large next">Next Page</a></li>
        </ul>

    </div>

    <!-- Sidebar -->
    <section id="sidebar">

        <!-- Intro -->
        <section id="intro">
            <a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
            <header>
                <h3>Wisdom</h3>
                <p>Kownledge may be power but wisdom is unmatched</p>
            </header>
        </section>

        <!-- Mini Posts -->
        <section>
            <div class="mini-posts">

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="{{url('/pbpc_Sub_content_1')}}">Courage</a></h3>
                        <time class="published" datetime="2015-10-20">October 20, 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="{{url('/pbpc_Sub_content_1')}}" class="image"><img src="{{asset('images/obstacle.jpg')}}" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="{{url('/pbpc_Sub_content_2')}}">Noise</a></h3>
                        <time class="published" datetime="2015-10-19">October 19, 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="{{url('/pbpc_Sub_content_2')}}" class="image"><img src="{{asset('images/bell.jpg')}}" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="{{url('/pbpc_Sub_content_3')}}">Englightment</a></h3>
                        <time class="published" datetime="2015-10-18">October 18, 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="{{url('/pbpc_Sub_content_3')}}" class="image"><img src="{{asset('images/book.jpg')}}" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="{{url('/pbpc_Sub_content_4')}}">Life Without Purpose</a></h3>
                        <time class="published" datetime="2015-10-17">October 17, 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="{{url('/pbpc_Sub_content_4')}}" class="image"><img src="{{asset('images/meaningless.jpg')}}" alt="" /></a>
                </article>

            </div>
        </section>

        <!-- Posts List -->
        <section>
            <ul class="posts">
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('/pbpc_Min_content_1')}}">Knowing where your going seems not enough now days</a></h3>
                            <time class="published" datetime="2015-10-20">October 20, 2015</time>
                        </header>
                        <a href="{{url('/pbpc_Min_content_1')}}" class="image"><img src="{{asset('images/knowing.jpg')}}" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('/pbpc_Min_content_2')}}">life without green</a></h3>
                            <time class="published" datetime="2015-10-15">October 15, 2015</time>
                        </header>
                        <a href="{{url('/pbpc_Min_content_2')}}" class="image"><img src="{{asset('images/dry.jpg')}}" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('/pbpc_Min_content_3')}}">going to school is illusion now days</a></h3>
                            <time class="published" datetime="2015-10-10">October 10, 2015</time>
                        </header>
                        <a href="{{url('/pbpc_Min_content_3')}}" class="image"><img src="{{asset('images/illusion.jpg')}}" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('/pbpc_Min_content_4')}}">starting with why</a></h3>
                            <time class="published" datetime="2015-10-08">October 8, 2015</time>
                        </header>
                        <a href="{{url('/pbpc_Min_content_4')}}" class="image"><img src="{{asset('images/why.jpg')}}" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('/pbpc_Min_content_5')}}">what  takes to mold your life</a></h3>
                            <time class="published" datetime="2015-10-06">October 7, 2015</time>
                        </header>
                        <a href="{{url('/pbpc_Min_content_5')}}" class="image"><img src="{{asset('images/magic.jpg')}}" alt="" /></a>
                    </article>
                </li>
            </ul>
        </section>

        <!-- About -->
        <section class="blurb">
            <h2>About</h2>
            <p>PBPC helps young generation to know when to pull the trigger in their lives Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <ul class="actions">
                <li><a href="{{url('/author')}}" class="button">Learn More</a></li>
            </ul>
        </section>

        <!-- Footer -->
        <section id="footer">
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
                <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <p class="copyright">&copy;Blacknative SmArt Tech (B.SmArt).</p>
        </section>

    </section>

</div>

<!-- Scripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/browser.min.js')}}"></script>
<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
