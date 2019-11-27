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
					<h1 class="page-header">PRUEBA TÉCNICA: JULIÁN BAQUERO</h1>
		</div>
	</div>
</div>
@endsection
