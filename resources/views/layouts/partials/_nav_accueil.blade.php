





<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle de navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand"  href="#">Partage de connaissance</a>	
		</div>
			<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">



                <li class="nav-item ">
                    <a class="nav-link" href="{{route('connexion')}}">Login</a>
                </li>


                <li class="nav-item ">
                    <a class="nav-link" href="{{route('inscription')}}">Register</a>
                </li>



				{{-- 
				<li>
					<div style="display: inline-block;">
						<p class="navbar-btn">
							<a href="/connexion"class="btn btn-primary">Login</a>
						</p>
					</div>
				</li>
				

				<li>
					<div style="display: inline-block;">
						<p class="navbar-btn">
							<a href="/inscription" class="btn btn-primary">Register</a>
						</p>
					</div>
				</li> --}}
				
			</ul>
			</div>
	</div>	
</nav>