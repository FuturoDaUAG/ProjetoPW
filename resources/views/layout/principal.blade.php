
<html>
<head>
	<title>modulo patrimonio</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	<link href="/ProjetoPW/public/css/prim.css" rel="stylesheet">

</head>
<body>

@if(count($errors)>0)
<div class="alert alert-danger">
    <ul>@foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach</ul>
        
    </div>
@endif
<div class="container">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Patrimônio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
        <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pessoas </a>
          <ul class="dropdown-menu mega-dropdown-menu">
              <li class="dropdown1 col-sm-3">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                    <ul class="dropdown-menu">
            	        <li><a href="{{action('UsuarioController@novo')}}">Novo</a></li>
                        <li><a href="{{action('UsuarioController@lista')}}">Todos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">link</a></li>
                    </ul>
              </li>
              <li class="dropdown1 col-sm-3">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servidor</a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="{{action('ServidorController@novo')}}">
                              <span class="glyphicon glyphicon-user"> Novo </span>
                          </a>
                      </li>
                      <li>
                          <a href="{{action('ServidorController@listar')}}">
                              <span class="glyphicon glyphicon-list"> Todos </span>
                          </a>
                      </li>
                  </ul>
              </li>

              <li class="col-sm-3">Administrador</li>

          </ul>
        </li>
         <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">link</a>
          <ul class="dropdown-menu mega-dropdown-menu">
					<li class="dropdown1 col-sm-3">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">link</a>
          <ul class="dropdown-menu">
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">link</a></li>
          </ul>
        </li>
        
					<li class="col-sm-3">link
						
					</li>
					<li class="col-sm-3">link
						
					</li> 
					<li class="col-sm-3">link
						
					</li>

				</ul>		
        </li>
         <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">link</a>
          <ul class="dropdown-menu mega-dropdown-menu">
					<li class="dropdown1 col-sm-3">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">link</a>
          <ul class="dropdown-menu">
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">Slink</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Slink</a></li>
          </ul>
        </li>
					<li class="col-sm-3">link
						
					</li>
					<li class="col-sm-3">link
						
					</li>
					<li class="col-sm-3">link
						
					</li>
				</ul>		
        </li>
         <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">link</a>
          <ul class="dropdown-menu mega-dropdown-menu">
					<li class="dropdown1 col-sm-3">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Installers</a>
          <ul class="dropdown-menu">
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">linkk</a></li>
          </ul>
        </li>
					<li class="col-sm-3">Felink
						
					</li>
					<li class="col-sm-3">link
						
					</li>
					<li class="col-sm-3">link
						
					</li>
				</ul>		
        </li>
         <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">link</a>
          <ul class="dropdown-menu mega-dropdown-menu">
					<li class="dropdown1 col-sm-3">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">link </a>
          <ul class="dropdown-menu">
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">ve</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">link</a></li>
          </ul>
        </li>
					<li class="col-sm-3">link
						
					</li>
					<li class="col-sm-3">link
						
					</li>
					<li class="col-sm-3">link
						
					</li>
				</ul>		
        </li>
        <li class="dropdown mega-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Locais</a>
            <ul class="dropdown-menu mega-dropdown-menu">
                <li class="dropdown1 col-sm-3">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Predios</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{action('PredioController@novo')}}">Adicionar Prédio</a></li>
                            <li><a href="{{action('PredioController@listar')}}">Mostar Todos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">link</a></li>
                        </ul>
 
                </li>

                <li class="dropdown1 col-sm-3">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salas</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{action('SalaController@novo')}}">Adicionar Sala</a></li>
                        <li><a href="{{action('SalaController@listar')}}">Mostar Todas</a></li>

                        <li role="separator" class="divider"></li>
                        <li><a href="#">link</a></li>
                    </ul>

                </li>
                <li class="col-sm-3">link

                </li> 
                <li class="col-sm-3">link

                </li>

            </ul>		
        </li>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown1">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> </a>
          <ul class="dropdown-menu">
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@yield('conteudo')


<footer class="footer" role="separator" class="divider">
	
	<p>© Programação web
	</p>
</footer>
</div>



<script src="{{ asset('/js/app.js') }}"></script>


</body>

<script type="text/javascript">$(document).ready(function(){
	$(".dropdown1").hover(            
		function() {
			$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
			$(this).toggleClass('open');        
		},
		function() {
			$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
			$(this).toggleClass('open');       
		}
		);
});</script>


<style type="text/css">
body,html {
  font-family: 'Open Sans', 'sans-serif';
   height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(217, 227, 231), rgb(217, 227, 231));
}
.mega-dropdown {
  position: static !important;
}
.mega-dropdown-menu {
    padding: 20px 0px;
    width: 100%;
    box-shadow: none;
    -webkit-box-shadow: none;
}
.mega-dropdown-menu > li > ul {
  padding: 0;
  margin: 1px;
}
.mega-dropdown-menu > li > ul > li {
  list-style: none;
}
.mega-dropdown-menu > li > ul > li > a {
  display: block;
  color: #222;
  padding: 3px 5px;
}
.mega-dropdown-menu > li ul > li > a:hover,
.mega-dropdown-menu > li ul > li > a:focus {
  text-decoration: none;
}
.mega-dropdown-menu .dropdown-header {
  font-size: 18px;
  color: #ff3546;
  padding: 5px 60px 5px 5px;
  line-height: 30px;
}

.carousel-control {
  width: 30px;
  height: 30px;
  top: -35px;

}
.left.carousel-control {
  right: 30px;
  left: inherit;
}
.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right {
  font-size: 12px;
  background-color: #fff;
  line-height: 30px;
  text-shadow: none;
  color: #333;
  border: 1px solid #ddd;
}

.nav .open > a, .nav .open > a:focus, .nav  .open  > a:hover {
  background-color: #fff;
  border-color: #337ab7;
}
/*Login Screen Style*/

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px ;
   /* box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px ;*/
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
   /* background-color: rgb(104, 145, 162);*/
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(97, 133, 150);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
   
  footer.footer {
background-color: #000000;
border-color: #2e6da4;
margin-top: 55px;
color: white;
border-radius: 5px;
}
footer.footer p {
padding: 10px;
}

/*Login screen End*/</style>

</html>
