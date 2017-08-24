@extends('layout.principal')
@section('conteudo')

    <h1>Editar Setor - {{ $setor->id }}</h1>

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

                            <div class="form-group col-lg-7">
                                <label>@lang('messages.sala')</label>
                                <select class="selectpicker" name="sala_id">
                                    @foreach($salas as $sala)
                                        @if($setor->sala->id == $sala->id)
                                            <option value="{{ $sala->id }}" selected>{{ $sala->descricao }}</option>
                                        @else
                                            <option value="{{ $sala->id }}">{{ $sala->descricao }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>@lang('messages.responsavel')</label>
                                <select class="selectpicker" name="servidor_id">
                                    @foreach($servidores as $servidor)
                                        @if($setor->servidor->id == $servidor->id)
                                            <option value="{{ $servidor->id }}" selected>{{ $servidor->nome }} - {{ $servidor->cargo }}</option>
                                        @else
                                            <option value="{{ $servidor->id }}">{{ $servidor->nome }} - {{ $servidor->cargo }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-8">
                                <label>@lang('messages.curso')</label>
                                <select class="selectpicker" name="curso_id" selected>
                                    @foreach($cursos as $curso)
                                        @if($setor->curso->id == $curso->id)
                                            <option value="{{ $curso->id }}" selected>{{ $curso->nome }}</option>
                                        @else
                                            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                        @endif
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


