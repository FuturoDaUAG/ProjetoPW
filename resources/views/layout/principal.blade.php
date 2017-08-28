<!DOCTYPE html>
<html lang="pt">
    <head>

        <title>{{ config('principal.title', 'Módulo Patrimônio') }}</title>

        <script src="{{ asset('js/sweetalert2.js') }}"></script>
        <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.css') }}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

        <!-- Styles -->
        <link href="{{ asset('css/prim.css') }}" rel="stylesheet" type="text/css">

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
                        <a class="navbar-brand" href="/index">{{ config('principal.name', 'Patrimonio') }}</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            @if (!Auth::guest())
                            <li class="dropdown1 col-sm-3">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pessoas </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{action('UsuarioController@lista')}}">Usuarios</a></li>
                                    <li role="separator" class="divider"></li>

                                    <li><a href="{{action('ServidorController@listar')}}">Servidor</a></li>
                                </ul>
                            </li>
                            <li class="dropdown1 col-sm-3">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Locais</a>
                                <ul class="dropdown-menu ">

                                    <li><a href="{{action('SetorController@listar')}}" >Setor</a></li>
                                    <li role="separator" class="divider"></li>

                                    <li><a href="{{action('DepartamentoController@lista')}}" >Departamento</a></li>
                                    <li role="separator" class="divider"></li>

                                    <li><a href="{{action('SalaController@listar')}}">Sala</a></li>
                                    <li role="separator" class="divider"></li>

                                    <li><a href="{{action('PredioController@listar')}}" >Prédio</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown1 col-sm-3">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventário</a>
                                <ul class="dropdown-menu ">

                                    <li><a href="{{action('PatrimonioController@listar')}}" >Bens Móveis</a></li>

                                </ul>
                            </li>
                            <li class="dropdown1 col-sm-3">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solicitações</a>
                                <ul class="dropdown-menu ">

                                    <li ><a href="{{action('SolicitacaoController@listar')}}" >Bem Permanente</a></li>

                                </ul>		
                            </li>
                            @endif
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#" >Configuraçao</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
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

    <script type="text/javascript">$(document).ready(function () {
    $(".dropdown1").hover(
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                $(this).toggleClass('open');
            }
        );
    });
    </script>


    <style type="text/css">
        body,html {
            font-family: 'Open Sans', 'sans-serif';
            height: 100%;
            background-repeat: repeat-y;
            background-image: linear-gradient(rgb(200, 227, 231), rgb(217, 227, 231));
        }
    </style>

</html>