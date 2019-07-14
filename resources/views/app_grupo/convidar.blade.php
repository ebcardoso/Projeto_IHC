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
                        <form method="post" action="{{route('grupo.convitesave')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>E-Mail:*</label>
                                        <input type="text" name="email" class="form-control" placeholder="Insira o E-Mail">
                                    </div>
                                        <button type="submit" class="btn btn-primary btn-block">Enviar Convite</button>
                                </div> <!-- col-lg-7 -->
                            </div>  
                        </form>
                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->            
    </div>
    <!-- /#page-wrapper -->
@endsection