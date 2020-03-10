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
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="route('login')" class="button large fit">Log In</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->

						<article class="post">
            <header>
                <div class="title">
                    <h2><a href="single.html">New Post</h2>
                    </div>
                <div class="meta">
                    <time class="published" datetime="2015-11-01">{{date('M d, Y')}}</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <p>@yield('form')</p>
            <footer>

            </footer>
        </article>
					</div>

				<!-- Footer -->
					<section id="footer">

						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Blacknative Inc: <a href="http://blacknativeInc.com"></a>.<a href="#">Newletter</a>.</p>
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
