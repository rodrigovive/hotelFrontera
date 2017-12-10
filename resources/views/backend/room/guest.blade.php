@extends('backend.layouts.app')
<!-- Content
	================================================== -->
@section('content')
		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Habitaciones Registrados</h2>
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
							Id
						</th>
						<th>
							Descripcion
						</th>
						
						<th>
							Numero de habitacion
						</th>
						<th>
							Foto
						</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach( $rooms as $key => $room)
						<tr>
							<td>
								{{$room->id}}
							</td>
							<td>
								{{$room->description}}
							</td>
				
							<td>
								{{$room->num_room}}
							</td>
							<td>
								{{$room->photo}}
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