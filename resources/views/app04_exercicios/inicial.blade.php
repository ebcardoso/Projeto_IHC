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

                        
                    </div> <!-- panel-body -->
                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->       
    </div>
    <!-- /#page-wrapper -->
@endsection