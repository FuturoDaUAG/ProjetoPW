@extends('layout.principal')
@section('conteudo')
    <form  action="salvar" method="post">
        <fieldset>
            <!-- Form Name -->
            <input type="hidden"
                   name="_token" value="{{ csrf_token() }}" />
            <div class="container-fluid">
                <section class="container">
                    <div class="container-page">
                        <div class="col-md-6">
                           <h1 class="dark-grey">UFRPE-UAG</h1>
                           <h2>Patrimonio</h2>

                            < inserir Logo >


                        </div>
                    </div>
                </section>
            </div>
        </fieldset>
    </form>
@stop
