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
            		<a class="nav-link" href="{{route('index')}}">Accueil</a>
          		</li>


           		<li class="nav-item ">
            		<a class="nav-link" href="{{route('formulaire')}}">Ajouter topic</a>
          		</li>

				{{-- <li>
					<div style="display: inline-block;">
						<p class="navbar-btn">
							<a href="{{route('index')}}" class="btn btn-primary">Accueil</a>
						</p>
					</div>
				</li>


				
				<li>
					<div style="display: inline-block;">
						<p class="navbar-btn">
							<a href="{{route('formulaire')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Ajouter un topic</a>
						</p>
					</div>
				</li> --}}

				
			</ul>
			</div>
	</div>	
</nav>