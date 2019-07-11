@extends('template.template02-menu')

@section('page_content')    
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$titulo_secao}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
        @if (isset($errors) && count($errors) > 0)
            @foreach($errors->all() as $err)
                <div class="alert alert-danger alert-dismissable">
                    {{$err}}
                </div>
            @endforeach
        @endif     
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Preencha as Calorias para Cada Refeição
                    </div>     

                    <div class="panel-body">
                        <form method="post" action="{{route('dieta.setcalorias')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Café-da-Manhã:*</label>
                                        <input type="text" name="cafe" class="form-control" placeholder="Insira a Quantidade do Café">
                                    </div>
                                </div> <!-- col-lg-12 -->
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Almoço:*</label>
                                        <input type="text" name="almoco" class="form-control" placeholder="Insira a Quantidade do Almoço">
                                    </div>
                                </div> <!-- col-lg-12 -->
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Janta:*</label>
                                        <input type="text" name="janta" class="form-control" placeholder="Insira a Quantidade da Janta">
                                    </div>
                                </div> <!-- col-lg-12 -->
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success">Finalizar</button>
                                </div> <!-- col-lg-6 -->
                            </div> <!-- row -->
                        </form>
                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->       
    </div>
    <!-- /#page-wrapper -->
@endsection