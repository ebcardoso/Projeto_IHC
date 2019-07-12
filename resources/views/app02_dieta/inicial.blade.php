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
                                    <th>Refeição</th>
                                    <th>Meta Definida</th>
                                    <th>Calorias Selecionadas</th>
                                    <th>Ajustar Dieta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX"> 
                                    <td> Café da Manhã </td>
                                    <td> {{ $calorias_cafe }} Calorias </td>
                                    <td>
                                        {{ $cal_cafe }} Calorias
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success"
                                                role="progressbar"
                                                aria-valuenow="40"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                                style="width: {{ 100*$cal_cafe/$calorias_cafe }}%">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="{{route('dieta.cafe')}}"
                                               class="btn btn-warning btn-circle btn-lg">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="odd gradeX"> 
                                    <td> Almoço </td>
                                    <td> {{ $calorias_almoco }} Calorias </td>
                                    <td>
                                        {{$cal_almoco}} Calorias
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success"
                                                role="progressbar"
                                                aria-valuenow="40"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                                style="width: {{ 100*$cal_almoco/$calorias_almoco }}%">
                                            </div>
                                        </div>
                                    </td>
                                    <td> 
                                        <center>
                                        <a href="{{route('dieta.almoco')}}"
                                               class="btn btn-warning btn-circle btn-lg">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="odd gradeX"> 
                                    <td> Jantar </td>
                                    <td> {{ $calorias_janta }} Calorias </td>
                                    <td>
                                        {{$cal_janta}} Calorias
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success"
                                                role="progressbar"
                                                aria-valuenow="40"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                                style="width: {{ 100*$cal_janta/$calorias_janta }}%">
                                            </div>
                                        </div>
                                    </td>
                                    <td> 
                                        <center>
                                            <a href="{{route('dieta.janta')}}"
                                               class="btn btn-warning btn-circle btn-lg">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>          
                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->       
    </div>
    <!-- /#page-wrapper -->
@endsection