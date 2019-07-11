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
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    @if ($status_membro == 1)
                                    <th>Atribuir Responsável</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($membros as $m)
                                    <tr class="odd gradeX"> 
                                        <td> {{$m->name}} </td>
                                        <td> {{$m->idade}} </td>
                                        @if ($status_membro == 1)
                                            <td>
                                                <form method="post" action="{{route('responsavel.atribuir')}}">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="id_user" value="{{ $m->id }}">

                                                    <select name="id_responsavel" class="form-control">
                                                        @foreach($membros as $resp)
                                                            <option value="{{$resp->id}}">
                                                                {{$resp->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    
                                                    <button type="submit" class="btn btn-success">Definir</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <a href="{{ route('grupo.convidar') }}" class="btn btn-success">Convidar</a>
                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->            
    </div>
    <!-- /#page-wrapper -->
@endsection