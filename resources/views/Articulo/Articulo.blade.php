@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
				<ul class="nav navbar-nav">
					<li>
						<a href="{{ URL::to('categoria') }}">
							<i class="fa fa-paste"></i> 
							Categorías
						</a>
					</li>
					<li>
						<a href="{{ URL::to('articulo') }}">
							<i class="fa fa-suitcase"></i> 
							Artículos 
						</a>
					</li>
				</ul>
	</div>
	<div class="row">
		<div class="col-lg-12">
					<h1 class="page-header">Artículo</h1>
					
					<form id="form" method="POST" action="@foreach ($action as $data) {{ URL::to("/") }}/{{$data->url}} @endforeach">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="panel panel-filter panel-default">
				
						<div class="panel-body ">
								<div class="col-sm-4">
									<label for="categoria" class="required">
										Número de registro
									</label>
									<input type="text" id="numero_registro" name="numero_registro" value="@isset($search) @foreach ($search as $data) {{ $data->nombre}} @endforeach @endisset" required="required" class="form-control" />
									@isset($registro)  
									<div class="alert alert-warning">Ya existe el Número de registro:<strong>@foreach ($registro as $data) {{$data->numero}} @endforeach</strong>.</div>
									@endisset
								</div>
								<div class="col-sm-3">
									<label for="categoria" class="required">
										Nombre del artículo
									</label>
									<input type="text" id="nombre" name="nombre" value="@isset($search) @foreach ($search as $data) {{ $data->nombre}} @endforeach @endisset" required="required" class="form-control" />
								</div>
								<div class="col-sm-4">
									<label for="categoria" class="required">
										Nombre de la Categoría
									</label>
									{{ Form::select('categoria_id', $categoria->pluck('nombre' , 'id'), null, ['class' => 'form-control', 'id' => 'categoria_id']) }}
						
								</div>
								<div class="col-sm-1">
									<label for="cantidad" class="required">
										Cantidad
									</label>
									<input type="number" id="cantidad" name="cantidad" class="form-control" value="0" min="1"
                                                max="50" step="5">
								</div>
								
						</div>

						<div class="panel-footer">
							<div class="text-right">
									<button type="submit" class="btn btn-primary" data-loading-text="Cargando...">
								<i class="fa fa-check"></i>
								Guardar
							  </button>
							</div>
						</div>

					</div>
					</form>

					<div class="table-responsive">
						 <table class="table table-hover" id="articleTable" style="width:100%">
							<thead>
								<tr style="background-color: #f0f0f0;">
									<th>No. registro</th>
									<th>Categoría</th>
									<th>Artículo</th>
									<th>Cantidad</th>
									<th></th>
								</tr>
							</thead>
							<tbody >
								@isset($articulo)
								@foreach ($articulo as $data)
								<tr>
									<td>
										<span class="toolbar pull-center">
											{{ $data->numero_registro}}
										</span>
									</td>
									<td>
										<span class="toolbar pull-center">
											{{ $data->CATEGORY}}
										</span>
									</td>
									<td>
										<span class="toolbar pull-center">
											{{ $data->ARTICLE}}
										</span>
									</td>
									<td>
										<span class="toolbar pull-center">
											{{ $data->cantidad}}
										</span>
									</td>
									<td>
										<span class="toolbar pull-left">
											<a  href='{{ URL::to("/") }}/articulo/update/{{$data->id}}' class="toolbar-edit toggle-tooltip" data-container="body" title="Editar"><i class="fa fa-pencil">Editar</i></a>
										</span>
									</td>
								</tr>
								@endforeach
								@endisset
							</tbody>
						</table>
					</div>
				</div>
	</div>
</div>
<script> 
function clean(){ 
document.getElementById('articulo').setAttribute('value', '');	
}//end clean function

$(document).ready(function() {
        $('#articleTable').DataTable();
    } );
</script>
@endsection
