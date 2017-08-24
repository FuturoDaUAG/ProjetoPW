<<<<<<< HEAD
@extends('layouts.app')

@section('content')
=======
@extends('layout.principal')

@section('conteudo')
>>>>>>> 3186861fde9e642e91dc3bf7efb0f0e02816eaa7
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<<<<<<< HEAD
                <div class="panel-heading">Reset Password</div>
=======
                <div class="panel-heading">Recuperar Senha</div>
>>>>>>> 3186861fde9e642e91dc3bf7efb0f0e02816eaa7
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
=======
                            <label for="email" class="col-md-4 control-label">Endereço de E-mail</label>
>>>>>>> 3186861fde9e642e91dc3bf7efb0f0e02816eaa7

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    Send Password Reset Link
=======
                                    Enviar link de recuperação da senha
>>>>>>> 3186861fde9e642e91dc3bf7efb0f0e02816eaa7
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
