@extends('layout.principal')
@section('conteudo')

    <h1>Editar</h1>

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form  action="alterar" method="post">
        <fieldset>

            <!-- Form Name -->

            <input type="hidden"
                   name="_token" value="{{ csrf_token() }}" />

            <input type="hidden"
                   name="id" value="{{$setor->id}}" />

            <div class="container-fluid">
                <section class="container">
                    <div class="container-page">
                        <div class="col-md-6">

                            <div class="form-group col-lg-12">
                                <label>@lang('messages.descricao')</label>
                                <input type="text" name="descricao" class="form-control" id="" value="{{ $setor->descricao }}">
                            </div>

                            <div class="form-group col-lg-4">
                                <label>@lang('messages.sala')</label>
                                <select class="selectpicker" name="sala_id">
                                    @foreach($salas as $sala)
                                        <option value="{{ $sala->id }}">{{ $sala->descricao }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>@lang('messages.responsavel')</label>
                                <select class="selectpicker" name="servidor_id">
                                    @foreach($servidores as $servidor)
                                        <option value="{{ $servidor->id }}">{{ $servidor->nome }} - {{ $servidor->cargo }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>@lang('messages.curso')</label>
                                <select class="selectpicker" name="curso_id" selected>
                                    @foreach($cursos as $curso)
                                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn-inverse btn-large btn-block">Editar</button>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </fieldset>
    </form>
@stop


