<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="/ProjetoPW/public/css/custom.css" rel="stylesheet">

	<title>Modulo Patrimonio </title>
</head>
<body>

	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">

					<a class="navbar-brand" href="#">
						Modulo Patrimonio
					</a>
				</div>
				<nav class="menu">
					<ul class="nav navbar-nav navbar-left">
						menu li ul li li
						<li >
							<a href="#" class="dropdown-dropup" data-toggle="dropdown">Pessoas<b class="caret"></b></a>
								<ul class="dropdown-menu" >

									<li class="dropdown">
											<li class="divider"></li>
									<ul >usuarios </ul>
										<li><a href="{{action('UsuarioController@novo')}}">Novo</a></li>
										<li><a href="{{action('UsuarioController@lista')}}">Todos</a></li>
										<li class="divider"></li>
									<ul>exemplo </ul>
										<li><a href="#">Novo</a></li>
										<li><a href="#">Todos</a></li>
										
								</li>

							</ul>
							<li >
								<a href="#" class="dropdown-dropup" data-toggle="dropdown">link <b class="caret"></b></a>
								<ul class="dropdown-menu" >

									<li class="dropdown">
											<li class="divider"></li>
									<ul >usuarios </ul>
										<li><a href="#">Novo</a></li>
										<li><a href="#">Todos</a></li>
										<li class="divider"></li>
									<ul>exemplo </ul>
										<li><a href="#">Novo</a></li>
										<li><a href="#">Todos</a></li>
										
							
						</li>

									</li>

								</ul>

								<li >
									<a href="#" class="dropdown-dropup" data-toggle="dropdown">link <b class="caret"></b></a>
									<ul class="dropdown-menu" >

										<li class="dropdown-submenu">
											
											<li><a href="{{action('UsuarioController@novo')}}">Novo</a></li>
											<li><a href="{{action('UsuarioController@lista')}}">Todos</a></li>

											
										</li>





									</ul>







								</div>
							</nav>
						</nav>

						
						


						@yield('conteudo')
						<footer class="footer">
							<p>© Programação web
							</p>
						</footer>
					</div>
					<script src="{{ asset('/js/app.js') }}"></script>


				</body>
				</html>

