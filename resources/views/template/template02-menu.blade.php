@extends('template.template01-primary')

@section('content_secondary')
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">Dieta da Família</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{route('home')}}"><i class="fa fa-dashboard fa-fw"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('diario.inicial')}}"><i class="fa fa-calendar-o fa-fw"></i>Meu Diário</a>
                        </li>
                        <li>
                            <a href="{{route('grupo.index')}}"><i class="fa fa-group fa-fw"></i>Minha Família</a>
                        </li>
                        <li>
                            <a href="{{route('dieta.inicial')}}"><i class="fa fa-apple fa-fw"></i>Minha Dieta</a>
                        </li>
                        <li>
                            <a href="{{route('exercicios.inicial')}}"><i class="fa fa-gears fa-fw"></i>Meus Exercícios</a>
                        </li>
                        <li>
                            <a href="{{route('meta.inicial')}}"><i class="fa fa-share fa-fw"></i>Metas</a>
                        </li>
                        <li>
                            <a href="{{route('notificacao.index')}}"><i class="fa fa-tag fa-fw"></i>Notificações</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-sign-out  fa-fw"></i>Sair</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        @yield('page_content')

    </div>
    <!-- /#wrapper -->
@endsection