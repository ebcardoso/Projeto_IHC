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
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Alimento</th>
                                    <th>Calorias</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ca3 as $a)
                                <tr class="odd gradeX"> 
                                    <td> {{$a->nome}} </td> 
                                    <td> {{$a->calorias}} Calorias </td> 
                                    <td>
                                        <center>
                                            <a href="{{route('dieta.janta_excluir', $a->id)}}"
                                                class="btn btn-danger btn-circle">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>       

                        <p>                        
                            <b> Dietômetro: </b>
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <b>0%</b>
                            </div>
                            <div class="col-lg-6" align="right">
                                <b>100%</b>
                            </div>
                        </div>

                        <p>
                            <div class="progress progress-striped active">
                                <div 
                                    class="progress-bar progress-bar-success"
                                    role="progressbar"
                                    aria-valuenow="40"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                    style="width: {{100*$cal_janta/$calorias_janta}}%">
                                </div>
                            </div>
                        </p>

                        <br/>

                        <p align='right'>
                            <button class="btn btn-primary btn-circle btn-lg" data-toggle="modal" data-target="#domingo_modal">
                                <i class="fa fa-plus"></i>
                            </button>
                        </p>

                        <div class="modal fade" id="domingo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Escolha o Alimento</h4>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <form method="post" action="{{route('dieta.inserirnadieta')}}">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <input type="hidden" name="dia" value="{{3}}"/>
                                            <div class="form-group">
                                                <label>Exercício:*</label>
                                                <select name="id_alimento" class="form-control">
                                                    @foreach($alimentos as $e)
                                                        <option value="{{$e->id}}">
                                                            {{$e->nome}} - {{$e->porcao}} - {{$e->calorias}} Calorias
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-success">Inserir</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                </div>
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->       
    </div>
    <!-- /#page-wrapper -->
@endsection