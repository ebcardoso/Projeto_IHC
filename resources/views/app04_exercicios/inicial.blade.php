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

								<p align='right'>
									<button class="btn btn-primary btn-circle btn-lg" data-toggle="modal" data-target="#segunda_modal">
										<i class="fa fa-plus"></i>
									</button>
								</p>

								<div class="modal fade" id="segunda_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myModalLabel">Escolha o Exercício</h4>
											</div>
											
											<div class="modal-body">
												<form method="post" action="{{route('exercicios.newexer')}}">
													<input type="hidden" name="_token" value="{{csrf_token()}}"/>
													<input type="hidden" name="dia" value="{{1}}"/>
													<div class="form-group">
														<label>Exercício:*</label>
														<select name="id_exercicio" class="form-control">
															@foreach($exercicios as $e)
																<option value="{{$e->id}}">
																	{{$e->nome}} - {{$e->calorias}} Calorias
																</option>
															@endforeach
														</select>
													</div>
													<button type="submit" class="btn btn-block btn-success">Finalizar</button>
												</form>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
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

								<p align='right'>
									<button class="btn btn-primary btn-circle btn-lg" data-toggle="modal" data-target="#terca_modal">
										<i class="fa fa-plus"></i>
									</button>
								</p>

								<div class="modal fade" id="terca_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myModalLabel">Escolha o Exercício</h4>
											</div>
											
											<div class="modal-body">
												<form method="post" action="{{route('exercicios.newexer')}}">
													<input type="hidden" name="_token" value="{{csrf_token()}}"/>
													<input type="hidden" name="dia" value="{{2}}"/>
													<div class="form-group">
														<label>Exercício:*</label>
														<select name="id_exercicio" class="form-control">
															@foreach($exercicios as $e)
																<option value="{{$e->id}}">
																	{{$e->nome}} - {{$e->calorias}} Calorias
																</option>
															@endforeach
														</select>
													</div>
													<button type="submit" class="btn btn-block btn-success">Finalizar</button>
												</form>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
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

								<p align='right'>
									<button class="btn btn-primary btn-circle btn-lg" data-toggle="modal" data-target="#quarta_modal">
										<i class="fa fa-plus"></i>
									</button>
								</p>

								<div class="modal fade" id="quarta_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myModalLabel">Escolha o Exercício</h4>
											</div>
											
											<div class="modal-body">
												<form method="post" action="{{route('exercicios.newexer')}}">
													<input type="hidden" name="_token" value="{{csrf_token()}}"/>
													<input type="hidden" name="dia" value="{{3}}"/>
													<div class="form-group">
														<label>Exercício:*</label>
														<select name="id_exercicio" class="form-control">
															@foreach($exercicios as $e)
																<option value="{{$e->id}}">
																	{{$e->nome}} - {{$e->calorias}} Calorias
																</option>
															@endforeach
														</select>
													</div>
													<button type="submit" class="btn btn-block btn-success">Finalizar</button>
												</form>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
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
								<p align='right'>
									<button class="btn btn-primary btn-circle btn-lg" data-toggle="modal" data-target="#quinta_modal">
										<i class="fa fa-plus"></i>
									</button>
								</p>

								<div class="modal fade" id="quinta_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myModalLabel">Escolha o Exercício</h4>
											</div>
											
											<div class="modal-body">
												<form method="post" action="{{route('exercicios.newexer')}}">
													<input type="hidden" name="_token" value="{{csrf_token()}}"/>
													<input type="hidden" name="dia" value="{{4}}"/>
													<div class="form-group">
														<label>Exercício:*</label>
														<select name="id_exercicio" class="form-control">
															@foreach($exercicios as $e)
																<option value="{{$e->id}}">
																	{{$e->nome}} - {{$e->calorias}} Calorias
																</option>
															@endforeach
														</select>
													</div>
													<button type="submit" class="btn btn-block btn-success">Finalizar</button>
												</form>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
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
								<p align='right'>
									<button class="btn btn-primary btn-circle btn-lg" data-toggle="modal" data-target="#sexta_modal">
										<i class="fa fa-plus"></i>
									</button>
								</p>

								<div class="modal fade" id="sexta_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myModalLabel">Escolha o Exercício</h4>
											</div>
											
											<div class="modal-body">
												<form method="post" action="{{route('exercicios.newexer')}}">
													<input type="hidden" name="_token" value="{{csrf_token()}}"/>
													<input type="hidden" name="dia" value="{{5}}"/>
													<div class="form-group">
														<label>Exercício:*</label>
														<select name="id_exercicio" class="form-control">
															@foreach($exercicios as $e)
																<option value="{{$e->id}}">
																	{{$e->nome}} - {{$e->calorias}} Calorias
																</option>
															@endforeach
														</select>
													</div>
													<button type="submit" class="btn btn-block btn-success">Finalizar</button>
												</form>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
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

								<p align='right'>
									<button class="btn btn-primary btn-circle btn-lg" data-toggle="modal" data-target="#sabado_modal">
										<i class="fa fa-plus"></i>
									</button>
								</p>

								<div class="modal fade" id="sabado_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myModalLabel">Escolha o Exercício</h4>
											</div>
											
											<div class="modal-body">
												<form method="post" action="{{route('exercicios.newexer')}}">
													<input type="hidden" name="_token" value="{{csrf_token()}}"/>
													<input type="hidden" name="dia" value="{{6}}"/>
													<div class="form-group">
														<label>Exercício:*</label>
														<select name="id_exercicio" class="form-control">
															@foreach($exercicios as $e)
																<option value="{{$e->id}}">
																	{{$e->nome}} - {{$e->calorias}} Calorias
																</option>
															@endforeach
														</select>
													</div>
													<button type="submit" class="btn btn-block btn-success">Finalizar</button>
												</form>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
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

								<p align='right'>
									<button class="btn btn-primary btn-circle btn-lg" data-toggle="modal" data-target="#domingo_modal">
										<i class="fa fa-plus"></i>
									</button>
								</p>

								<div class="modal fade" id="domingo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myModalLabel">Escolha o Exercício</h4>
											</div>
											
											<div class="modal-body">
												<form method="post" action="{{route('exercicios.newexer')}}">
													<input type="hidden" name="_token" value="{{csrf_token()}}"/>
													<input type="hidden" name="dia" value="{{7}}"/>
													<div class="form-group">
														<label>Exercício:*</label>
														<select name="id_exercicio" class="form-control">
															@foreach($exercicios as $e)
																<option value="{{$e->id}}">
																	{{$e->nome}} - {{$e->calorias}} Calorias
																</option>
															@endforeach
														</select>
													</div>
													<button type="submit" class="btn btn-block btn-success">Finalizar</button>
												</form>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								
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
