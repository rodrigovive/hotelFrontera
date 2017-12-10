@extends('backend.layouts.app')
<!-- Content
	================================================== -->
@section('content')
		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Huespedes Registrados</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/admin/dashboard">Dashboard</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>



		<div class="table-responsive">
  			<table class="table table-bordered table-hover table-striped" style="background: rgba(17,246,238,0.54)">
			  	<thead>
					<tr class="active success">
						<th>
							Nombre
						</th>
						<th>
							Apellidos
						</th>
						
						<th>
							Ciudad
						</th>
						<th>
							Direccion
						</th>
						<th>
							Dni
						</th>
						<th>
							Ocupacion
						</th>
						<th>
							Editar
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $guests as $key => $guest)
						<tr>
							<td>
								{{$guest->name}}
							</td>
							<td>
								{{$guest->name}}
							</td>
				
							<td>
								{{$guest->city}}
							</td>
							<td>
								{{$guest->direction}}
							</td>
							<td>
								{{$guest->dni}}
							</td>
							<td>
								{{$guest->occupation}}
							</td>
							<td>
								<button class="btn btn-primary guest-edit" value="{{$guest->id}}" href="  ">
									<span >Editar</span>
								</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
@endsection


@section('after-scripts')
	<script type="text/javascript" src=" {{ asset('js/datatables.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('js/backend/report.js') }}"></script>
@endsection