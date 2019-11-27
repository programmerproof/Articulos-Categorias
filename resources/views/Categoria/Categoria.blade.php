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
					<h1 class="page-header">Categoría</h1>
					
					<form id="form" method="POST" action="@foreach ($action as $data) {{ URL::to("/") }}/{{$data->url}} @endforeach">
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="panel panel-filter panel-default">
				
						<div class="panel-body ">
								<div class="col-sm-3">
									<label for="categoria" class="required">
										Nombre de la categoría
									</label>
									<input type="text" id="nombre" name="nombre" value="@isset($search) @foreach ($search as $data) {{ $data->nombre}} @endforeach @endisset" required="required" class="form-control" />
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
						 <table class="table table-hover" id="categoryTable" style="width:100%">
							<thead>
								<tr style="background-color: #f0f0f0;">
									<th>Categoria</th>
									<th></th>
								</tr>
							</thead>
							<tbody >
								@isset($categoria)
								@foreach ($categoria as $data)
								<tr>
									<td>
										<span class="toolbar pull-center">
											{{ $data->nombre}}
										</span>
									</td>
									<td>
										<span class="toolbar pull-left">
											<a  href='{{ URL::to("/") }}/categoria/update/{{$data->id}}' class="toolbar-edit toggle-tooltip" data-container="body" title="Editar"><i class="fa fa-pencil">Editar</i></a>
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
document.getElementById('categoria').setAttribute('value', '');	
}//end clean function

$(document).ready(function() {
        $('#categoryTable').DataTable();
    } );	
</script>
@endsection
