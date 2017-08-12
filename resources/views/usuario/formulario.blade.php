@extends('layout.principal')
@section('conteudo')

<form  action="adiciona" method="post">
    <fieldset>

        <!-- Form Name -->

        <input type="hidden"
               name="_token" value="{{{ csrf_token() }}}" />
        <div class="container-fluid">
            <section class="container">
                <div class="container-page">        
                    <div class="col-md-6">
                        <h2 class="dark-grey">Registrar</h2>

                        <div class="form-group col-lg-12">
                            <label>@lang('messages.apelido')</label>
                            <input type="text" name="apelido" class="form-control" id="" value="{{ old('apelido') }}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>@lang('messages.senha')</label>
                            <input type="password" name="senha" class="form-control" id=""  value="{{ old('apelido') }}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Repita @lang('messages.senha')</label>
                            <input type="password" name="" class="form-control" id="" value= value="{{ old('apelido') }}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>@lang('messages.email')</label>
                            <input type="email" name="email" class="form-control" id="" value="{{ old('apelido') }}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Repita @lang('messages.email')</label>
                            <input type="email" name="email" class="form-control" id="" value="{{ old('apelido') }}">
                        </div>
                        <div class="col-md-12">


                            <button type="submit" class="btn-inverse btn-large btn-block">Registrar</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </fieldset>
</form>



@stop
