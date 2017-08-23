@extends('layout.principal')
@section('conteudo')

<form action="adicionar" method='post'>
    <div class="container-fluid">
        <section class="container">
            <div class="container-page">        
                <div class="col-md-6">
                    <h2 class="dark-grey">Cadastrar Patrimônio</h2> <br/>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                    <div class="form-group col-lg-6">
                        Descrição: <input name="descricao" type="text"/>
                    </div>

                    <div class="form-group col-lg-6"> 
                        Valor: <input name='valor' type="text"/>
                    </div>  
                    
                    <div class="form-group col-lg-6">
                        Número Patrimônio: <input name="numeropatrimonio" type="text"/>
                    </div>
                    
                    <div class="form-group col-lg-6">
                        Número Patrimônio Antigo: <input name="numeropantigo" type="text" />
                    </div>

                    <div class="form-group col-lg-6">
                        Número Empenho: <input name="numeroempenho" type="text"/>
                    </div>

                    <div class="form-group col-lg-6">
                        Número Pregão: <input name="numeropregao" type="text"/>
                    </div>

                    <div class="form-group col-lg-6">
                        Número Nota Fiscal <input name="numeronotafiscal" type="text" />
                    </div>
                    
                    <div>
                        Marca: <br/>
                        
                        <select name="marca_id">
                            @foreach ($m as $marca)
				<option value="{{$marca -> id}}"> {{$marca -> descricao}}</option>
                            @endforeach
                        </select>
                        <a href="/marca/adicionar"class="btn-sm btn-success  glyphicon glyphicon-plus" > <br/></a>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" value="Cadastrar"/>
                    </div>
                    
                </div>
            </div>
        </section>  
    </div>
</form>
@stop

