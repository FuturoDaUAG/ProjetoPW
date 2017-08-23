@extends('layout.principal')
@section('conteudo')
<form  action="adicionar" method="post">
    <fieldset>
        <!-- Form Name -->
        <input type="hidden"
               name="_token" value="{{ csrf_token() }}" />
        <div class="container-fluid">
            <section class="container">
                <div class="container-page">
                    <div class="col-md-6">
                        <h2 class="dark-grey">Nova Solicitação</h2>

                        <div class="form-group col-lg-12">
                            <label>@lang('messages.nome')</label>
                            <input type="text" name="nome" class="form-control" id="" value="{{ old('nome') }}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>@lang('messages.matricula')</label>
                            <input type="text" name="matricula" class="form-control" id="" value="{{ old('matricula') }}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>@lang('messages.cargo')</label>
                            <input type="text" name="cargo" class="form-control" id=""  value="{{ old('cargo') }}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>@lang('messages.sala')</label>
                            <input type="text" name="sala" class="form-control" id="" value="{{ old('sala') }}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>@lang('messages.predio')</label>
                            <input type="text" name="predio" class="form-control" id=""  value="{{ old('predio') }}">
                        </div>
                           
                        <div class="form-group col-lg-6">
                                <label>@lang('messages.ramal')</label>
                                <input type="text" name="ramal" class="form-control" id="" value="{{ old('ramal') }}">
                         </div>

                            <div class="form-group col-lg-6">
                                <label>@lang('messages.curso')</label>
                                <input type="text" name="curso" class="form-control" id=""  value="{{ old('curso') }}">
                            </div>
                        
                        
                            <div class="form-group col-lg-6">
                                <label>@lang('messages.data')</label>
                                <input type="date" name="data" class="form-control" id=""  value="{{ old('data') }}">
                            </div>
                            <div class="form-group col-lg-6">
                            <label>@lang('messages.descricao')</label>
                            <input type="text" name="descricao" class="form-control" id=""  value="{{ old('descricao') }}">                           </div>
                            </div>   
                    
                          <div class="form-group col-lg-8">
                                <label>@lang('messages.setor')</label>
                                <select class="selectpicker" name="setor_id">
                                    @foreach($setors as $setor)
                                        <option value="{{ $setor->id }}">{{ $setor->nome }}</option>
                                    @endforeach
                                </select>
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
