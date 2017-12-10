@extends('backend.layouts.app')
<!-- Content
	================================================== -->
@section('content')
		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Crear un Nuevo Alquiler del Hotel</h2>
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

		<div class="row">
			<div class="col-lg-12">
				<div id="add-listing">
					<!-- Section -->
					<div class="add-listing-section">
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Crear un Alquiler del Hotel</h3>

						</div>
					<form id="new-form" action="" method="POST" enctype="multipart/form-data">

						<!-- Title -->
						<div class="row with-forms">
						{{ csrf_field() }}

                            <div class="col-md-4">
								<h5>Huesped <i class="tip" data-tip-content="Seleccionar el huesped"></i></h5>

								<select name="category" class="chosen-select-no-single" id="category">
									<option value="" label="blank">Seleccionar el huesped</option>	
										@foreach ($guests as $guest)
											<option value="{{$guest->id}}">{{$guest->name}}</option>
										@endforeach
									
								</select>
							</div>
                             
                            <div class="col-md-2">
								<h5>Nuevo  <i class="tip" data-tip-content="Crear nuevo usuario"></i></h5>
								<div >
									<a href="huesped?alquiler=true">Crear un nuevo huesped </a>
								</div>
							</div>

							<div class="col-md-6">
								<h5>Habitacion <i class="tip" data-tip-content="Seleccionar la habitacion"></i></h5>
									
								<select name="category" class="chosen-select-no-single" id="category">
									<option value="" label="blank">Seleccionar el numero de habitacion</option>	
										@foreach ($rooms as $room)
											<option value="{{$room->id}}">{{$room->num_room}}</option>
										@endforeach
								</select>
							</div>


                             
                            <div class="col-md-6">
								<h5>Monto  <i class="tip" data-tip-content="Total pagado"></i></h5>
								<input name="title" id="title"class="search-field" type="text" value=""/>
							</div>

                            
                            <div class="col-md-6">
								<h5>Dias</h5>
								<input name="title" id="title"class="search-field" type="text" value=""/>
							</div>
                            
							{{--  <div class="col-md-6">
								<h5>Fecha de llegada</h5>
								<input name="title" id="title" class="search-field" type="date" value=""/>
							</div>
							<div class="col-md-6">
								<h5>Fecha de salida</h5>
								<input name="title" id="title"class="search-field" type="date" value=""/>
							</div>  --}}
                
                            <div class="col-md-12">
								<h5>Observacion  <i class="tip" data-tip-content="Observacion"></i></h5>
								<input name="title" id="title"class="search-field" type="text" value=""/>
							</div>
						</div>
					</div>
					<!-- Section / End -->
                    <div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-docs"></i> Detalle del Alquiler</h3>
						</div>

						<!-- Description -->
						<div class="form">
							<h5>Detalles</h5>
							<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
						</div>
					</div>

                		<button type="submit" class="button preview" href="#">Guardar<i class="fa fa-arrow-circle-right"></i></button>

					</form>

				</div>
			</div>
		</div>
@endsection
