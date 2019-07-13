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
					<!--div class="panel-heading">
						Basic Tabs
					</div-->
					<!-- /.panel-heading -->
					<div class="panel-body">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#segunda" data-toggle="tab" aria-expanded="true"> Segunda </a>
							</li>
							<li class="">
								<a href="#terca" data-toggle="tab" aria-expanded="false"> Terça </a>
							</li>
							<li class="">
								<a href="#quarta" data-toggle="tab" aria-expanded="false"> Quarta </a>
							</li>
							<li class="">
								<a href="#quinta" data-toggle="tab" aria-expanded="false"> Quinta</a>
							</li>
							<li class="">
								<a href="#sexta" data-toggle="tab" aria-expanded="false"> Sexta </a>
							</li>
							<li class="">
								<a href="#sabado" data-toggle="tab" aria-expanded="false"> Sábado </a>
							</li>
							<li class="">
								<a href="#domingo" data-toggle="tab" aria-expanded="false"> Domingo </a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane fade active in" id="segunda">
								<h2> Calorias Queimadas: {{ $total_segunda }} cal</h2>
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Exercício</th>
											<th>Calorias</th>
											<th>Ação</th>
										</tr>
									</thead>
									<tbody>
										@foreach($segunda as $a)
										<tr class="odd gradeX"> 
											<td> {{$a->nome}} </td> 
											<td> {{$a->calorias}} Calorias</td> 
											<td>
												<center>
													<a href="{{route('exercicios.excluir', $a->id)}}"
													class="btn btn-danger btn-circle">
														<i class="fa fa-times"></i>
													</a>
												</center>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>          
							</div>
							<div class="tab-pane fade" id="terca">
								<h2> Calorias Queimadas: {{ $total_terca }} cal</h2>
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Exercício</th>
											<th>Calorias</th>
											<th>Ação</th>
										</tr>
									</thead>
									<tbody>
										@foreach($terca as $a)
										<tr class="odd gradeX"> 
											<td> {{$a->nome}} </td> 
											<td> {{$a->calorias}} Calorias</td> 
											<td>
												<center>
													<a href="{{route('exercicios.excluir', $a->id)}}"
													class="btn btn-danger btn-circle">
														<i class="fa fa-times"></i>
													</a>
												</center>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="quarta">
								<h2> Calorias Queimadas: {{ $total_quarta }} cal</h2>
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Exercício</th>
											<th>Calorias</th>
											<th>Ação</th>
										</tr>
									</thead>
									<tbody>
										@foreach($quarta as $a)
										<tr class="odd gradeX"> 
											<td> {{$a->nome}} </td> 
											<td> {{$a->calorias}} Calorias</td> 
											<td>
												<center>
													<a href="{{route('exercicios.excluir', $a->id)}}"
													class="btn btn-danger btn-circle">
														<i class="fa fa-times"></i>
													</a>
												</center>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="quinta">
								<h2> Calorias Queimadas: {{ $total_quinta }} cal</h2>
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Exercício</th>
											<th>Calorias</th>
											<th>Ação</th>
										</tr>
									</thead>
									<tbody>
										@foreach($quinta as $a)
										<tr class="odd gradeX"> 
											<td> {{$a->nome}} </td> 
											<td> {{$a->calorias}} Calorias</td> 
											<td>
												<center>
													<a href="{{route('exercicios.excluir', $a->id)}}"
													class="btn btn-danger btn-circle">
														<i class="fa fa-times"></i>
													</a>
												</center>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="sexta">
								<h2> Calorias Queimadas: {{ $total_sexta }} cal</h2>
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Exercício</th>
											<th>Calorias</th>
											<th>Ação</th>
										</tr>
									</thead>
									<tbody>
										@foreach($sexta as $a)
										<tr class="odd gradeX"> 
											<td> {{$a->nome}} </td> 
											<td> {{$a->calorias}} Calorias</td> 
											<td>
												<center>
													<a href="{{route('exercicios.excluir', $a->id)}}"
													class="btn btn-danger btn-circle">
														<i class="fa fa-times"></i>
													</a>
												</center>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="sabado">
								<h2> Calorias Queimadas: {{ $total_sabado }} cal</h2>
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Exercício</th>
											<th>Calorias</th>
											<th>Ação</th>
										</tr>
									</thead>
									<tbody>
										@foreach($sabado as $a)
										<tr class="odd gradeX"> 
											<td> {{$a->nome}} </td> 
											<td> {{$a->calorias}} Calorias</td> 
											<td>
												<center>
													<a href="{{route('exercicios.excluir', $a->id)}}"
													class="btn btn-danger btn-circle">
														<i class="fa fa-times"></i>
													</a>
												</center>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="domingo">
								<h2> Calorias Queimadas: {{ $total_domingo }} cal</h2>
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Exercício</th>
											<th>Calorias</th>
											<th>Ação</th>
										</tr>
									</thead>
									<tbody>
										@foreach($domingo as $a)
										<tr class="odd gradeX"> 
											<td> {{$a->nome}} </td> 
											<td> {{$a->calorias}} Calorias</td> 
											<td>
												<center>
													<a href="{{route('exercicios.excluir', $a->id)}}"
													class="btn btn-danger btn-circle">
														<i class="fa fa-times"></i>
													</a>
												</center>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>                       
        </div> <!-- row -->       
    </div>
    <!-- /#page-wrapper -->
@endsection
