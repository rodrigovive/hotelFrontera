@extends('backend.layouts.app')
<!-- Content
	================================================== -->
@section('content')
		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Crear un nuevo huesped del hotel</h2>
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
							<h3><i class="sl sl-icon-doc"></i> Crear un nuevo huesped</h3>

						</div>
					<form id="new-form" action="huesped" method="POST" enctype="multipart/form-data">

						<!-- Title -->
						<div class="row with-forms">
						{{ csrf_field() }}

                            <div class="col-md-12">
								<h5>DNI  <i class="tip" data-tip-content="Documento de identificacion"></i></h5>
								<input name="dni" id="title"class="search-field" type="text" value=""/>
							</div>



                            <div class="col-md-6">
								<h5>Nombres</h5>
								<input name="name" id="name"class="search-field" type="text" value=""/>
							</div>
                            <div class="col-md-6">
								<h5>Apellidos</h5>
								<input name="lastname" id="lastname"class="search-field" type="text" value=""/>
							</div>
                            
                            <div class="col-md-12">
								<h5>Ocupacion</h5>
								<input name="occupation" id="occupation"class="search-field" type="text" value=""/>
							</div>



							<div class="col-md-4">
								<h5>Pais <i class="tip" data-tip-content="Seleccionar el pais correspondiente"></i></h5>
								
								<select name="country" class="chosen-select-no-single" id="country">
									<option value="" label="blank">Seleccionar Pais</option>	
										<option value="1">Peru</option>
										<option value="2">Bolivia</option>
										<option value="3">Argentina</option>
										<option value="4">Brasil</option>
										<option value="5">Uruguay</option>
										<option value="6">Paraguay</option>
										<option value="7">Otro</option>
									
								</select>
							</div>

							<div class="col-md-8">
								<h5>Ciudad</h5>
								<input name="city" id="city"class="search-field" type="text" value=""/>
							</div>
							
                            <div class="col-md-12">
								<h5>Direccion  <i class="tip" data-tip-content="Direccion"></i></h5>
								<input name="direction" id="direction"class="search-field" type="text" value=""/>
							</div>
						</div>
					</div>
					<!-- Section / End -->

                		<button type="submit" class="button preview" href="#">Guardar<i class="fa fa-arrow-circle-right"></i></button>

					</form>

				</div>
			</div>
		</div>
@endsection
