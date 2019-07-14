@extends('template.template02-menu')

@section('page_content')    
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$titulo_secao or '(null)'}}</h1>
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
                        Notificações
                    </div> 

                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th><center>Descrição</center></th>
                                    <th><center>Autor</center></th>
                                    <th><center>Ações</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($notifs as $m)
                                    <tr class="odd gradeX"> 
                                        <td> {{$m->descri}} </td>
                                        <td> <center>{{$m->autor}}</center> </td>
                                        <td>
                                            <center>
                                                @if ($m->tipo == 1)
                                                    <!-- Tipo 1 são as que pedem Acetar ou Recusar Grupo  -->
                                                    <a href="{{route('notificacao.aceitar', $m->id)}}" class="btn btn-success btn-circle">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                    <a href="{{route('notificacao.recusar', $m->id)}}" class="btn btn-danger btn-circle">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                @elseif($m->tipo == 5)
                                                    <!-- Tipo 5: Família Aceita -->
                                                    Aceito
                                                @elseif($m->tipo == 6)
                                                    <!-- Tipo 5: Família Recusada -->
                                                    Recusado
                                                @endif
                                            </center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->            
    </div>
    <!-- /#page-wrapper -->
@endsection