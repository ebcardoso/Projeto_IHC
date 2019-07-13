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

                    <div class="panel-body">
                        <form method="post" action="{{route('meta.inserir_bd')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tipo:*</label>
                                        <select name="tipo" class="form-control">
                                            <option value="1"> Perca de Peso </option>
                                            <option value="2"> Perca de Calorias </option>
                                        </select>
                                    </div>
                                </div> <!-- col-lg-12 -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Duracao:*</label>
                                        <select name="dias" class="form-control">
                                            <option value="7"> 1 Semana </option>
                                            <option value="14"> 2 Semanas </option>
                                            <option value="21"> 3 Semanas </option>
                                            <option value="30" selected> 1 Mês </option>
                                        </select>
                                    </div>
                                </div> <!-- col-lg-12 -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Descrição:*</label>
                                        <input type="text" name="descricao" class="form-control" placeholder="Descrição">
                                    </div>
                                </div> <!-- col-lg-12 -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Quantidade a Perder:*</label>
                                        <input type="text" name="a_perder" class="form-control" placeholder="Quantidade">
                                    </div>
                                </div> <!-- col-lg-12 -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Recompensa:*</label>
                                        <input type="text" name="recompensa" class="form-control" placeholder="Recompensa">
                                    </div>
                                </div> <!-- col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-block btn-success">Finalizar</button>
                                </div> <!-- col-lg-12 -->
                            </div>  
                        </form>
                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->            
    </div>
    <!-- /#page-wrapper -->
@endsection