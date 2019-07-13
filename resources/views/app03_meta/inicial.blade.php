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

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach($metas as $m)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$m->id}}" aria-expanded="false" aria-controls="collapse{{$m->id}}">
                                            <b> {{$m->descricao}} </b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$m->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p> <b> Tipo:       </b> @if($m->tipo == 1) Perca de Peso @else Perca de Calorias @endif </p>
                                        <p> <b> Recompensa: </b> {{$m->recompensa}} </p>
                                        <p> <b> Duração:    </b> {{$m->dias}} Dias</p>
                                        <p> <b> Status:     </b>
                                            @if($m->status == 0)
                                                Em Andamento
                                            @endif
                                            @if($m->status == 1)
                                                Em Avaliação
                                            @endif
                                            @if($m->status == 2)
                                                Aprovada
                                            @endif
                                            @if($m->status == 3)
                                                Recusado
                                            @endif
                                        </p>
                                        <p>
                                            <b> Progresso: </b> {{$m->a_perder/4}} @if($m->tipo == 1) Kg Perdidos @else Cal Perdidas @endif 
                                            <div class="progress progress-striped active">
                                                <div 
                                                    @if($m->status == 0)
                                                        class="progress-bar progress-bar-info"
                                                    @elseif($m->status == 1 || $m->status == 2 || $m->status == 3)
                                                        class="progress-bar progress-bar-danger"
                                                    @endif                                                    
                                                    
                                                    role="progressbar"
                                                    aria-valuenow="40"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: {{100/4}}%">
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <b> Tempo Restante: </b> 
                                            @if($m->status == 1)
                                                Em Avaliação
                                            @elseif($m->status == 2 || $m->status == 3)
                                            @else
                                                {{$m->dias - 3}} Dias Restantes
                                            @endif
                                            <div class="progress progress-striped active">
                                                <div
                                                    @if($m->status == 0)
                                                        style="width: {{100*($m->dias - 3)/$m->dias}}%"
                                                        class="progress-bar progress-bar-info"
                                                    @elseif($m->status == 1)
                                                        style="width: {{100}}%"
                                                        class="progress-bar progress-bar-warning"
                                                    @elseif($m->status == 2)
                                                        style="width: {{100}}%"
                                                        class="progress-bar progress-bar-danger"
                                                    @elseif($m->status == 3)
                                                        style="width: {{100}}%"
                                                        class="progress-bar progress-bar-success"
                                                    @endif
                                                    
                                                    role="progressbar"
                                                    aria-valuenow="40"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    >
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <a href="{{route('meta.encerrar', $m->id)}}" class="btn btn-block btn-success">
                                                Encerrar Meta
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <p align='right'>
                            <a href="{{ route('meta.criar') }}" class="btn btn-primary btn-circle btn-lg">
                                <i class="fa fa-plus"></i>
                            </a>
                        </p>
                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->       
    </div>
    <!-- /#page-wrapper -->
@endsection