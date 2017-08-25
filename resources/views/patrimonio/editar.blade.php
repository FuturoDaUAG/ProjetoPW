@extends('layout.principal')
@section('conteudo')

<form action="/patrimonio/atualizar" method='post'>
    <div class="container-fluid">
        <section class="container">
            <div class="container-page">        
                <div class="col-md-6">
                    <h2 class="dark-grey">Editar Patrimônio</h2> <br/>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="hidden" name="id"  value="{{$p->id}}"/>
                    <br>
                    <div class="form-group col-lg-6">
                        Descrição: <input name="descricao" class="form-control" type="text" value="{{$p->descricao}}"/>
                    </div>

                    <div class="form-group col-lg-6"> 
                        Valor: <input name='valor' class="form-control" type="text" value="{{$p->valor}}"/>
                    </div>  
                    
                    <div class="form-group col-lg-6">
                        Número Patrimônio: <input name="numeropatrimonio" class="form-control" type="text" value="{{$p->numeropatrimonio}}"/>
                    </div>
                    
                    <div class="form-group col-lg-6">
                        Número Patrimônio Antigo: <input name="numeropantigo" class="form-control" type="text" value="{{$p->numeropantigo}}"/>
                    </div>

                    <div class="form-group col-lg-6">
                        Número Empenho: <input name="numeroempenho" class="form-control" type="text"value="{{$p->numeroempenho}}"/>
                    </div>

                    <div class="form-group col-lg-6">
                        Número Pregão: <input name="numeropregao" class="form-control" type="text"value="{{$p->numeropregao}}"/>
                    </div>

                    <div class="form-group col-lg-6">
                        Número Nota Fiscal <input name="numeronotafiscal" class="form-control" type="text" value="{{$p-> numeronotafiscal}}"/>
                    </div>
                    <div>
                        Marca: <br/>
                        <select name="marca_id">
                            @foreach ($m as $marca)
				<option value="{{$marca->id}}"> {{$marca -> descricao}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" value="Atualizar"/>
                    </div>
                </div>
            </div>
        </section>  
    </div>
</form>
@stop


