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
                                @foreach($ca1 as $a)
                                <tr class="odd gradeX"> 
                                    <td> {{$a->nome}} </td> 
                                    <td> {{$a->calorias}} Calorias </td> 
                                    <td>
                                        <center>
                                            <a href="{{route('dieta.cafe_excluir', $a->id)}}"
                                               class="btn btn-danger btn-circle btn-lg">
                                                <i class="fa fa-times"></i>
                                            </a>
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