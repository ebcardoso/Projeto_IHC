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
                        Família {{ $nome_familia or '(null)'}}
                    </div> 

                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th><center>Nome</center></th>
                                    <th><center>Idade</center></th>
                                    @if ($status_membro == 1)
                                    <th><center>Atribuir Responsável</center></th>
                                    @endif
                                    @if ($status_membro == 0)
                                    <th><center>Responsável</center></th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($membros as $m)
                                    <tr class="odd gradeX"> 
                                        <td> {{$m->name}} </td>
                                        <td><center>{{$m->idade}}</center></td>
                                        <td>
                                            @if ($m->responsavel >= 1)
                                                {{ route('grupo.getresponsavel', $m->responsavel) }}
                                            @else
                                                @if ($status_membro == 1)
                                                    <center>
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-{{$m->id}}">
                                                            Escolher Membro
                                                        </button>
                                                    </center>

                                                    <div class="modal fade" id="modal-{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    <h4 class="modal-title" id="myModalLabel">Escolha o Responsável</h4>
                                                                </div>
                                                                
                                                                <div class="modal-body">
                                                                    <form method="post" action="{{route('responsavel.atribuir')}}">
                                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                        <input type="hidden" name="id_user" value="{{ $m->id }}">

                                                                        <div class="form-group">
                                                                            <label>Membro Responsável:*</label>
                                                                            <select name="id_responsavel" class="form-control">
                                                                                @foreach($membros as $resp)
                                                                                    @if($resp->id != $m->id)
                                                                                        <option value="{{$resp->id}}">
                                                                                            {{$resp->name}}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-block btn-primary">Definir</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <p align="right">
                            <a href="{{ route('grupo.convidar') }}" class="btn btn-primary">Convidar</a>
                        </p>
                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->            
    </div>
    <!-- /#page-wrapper -->
@endsection