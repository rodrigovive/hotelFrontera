@extends('backend.layouts.app')
<!-- Content
	================================================== -->
@section('content')
		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Crear una nueva habitacion del hotel</h2>
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
							<h3><i class="sl sl-icon-doc"></i> Crear una nueva habitacion</h3>
						</div>
					<form id="new-form" action="habitacion" method="POST" enctype="multipart/form-data">

						<!-- Title -->
						<div class="row with-forms">
						{{ csrf_field() }}
							<div class="col-md-4">
								<h5>Estado <i class="tip" data-tip-content="Seleccionar el estado actual"></i></h5>
								
								<select name="state" class="chosen-select-no-single" id="category">
									<option value="" label="blank">Seleccionar Estado</option>	
										<option value="1">Normal</option>
										<option value="2">Peor</option>
										<option value="3">Mejor</option>
									
								</select>
							</div>

							<div class="col-md-8">
								<h5>Numero de la habitacion</h5>
								<input name="num_room" id="title"class="search-field" type="text" value=""/>
							</div>
						</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-picture"></i> Foto</h3>
						</div>

						<div class="submit-section">
							<!-- Row -->
							<div class="row with-forms">
								<!-- Avatar -->
								<div class="edit-profile-photo">
								<div class="col-md-4">
										<img id="blah"  alt="" style="width:100%;height:100%">
										<input id="imgInp" type="file" name="image" onchange="previewFile()" class="custom-file-input form-control">
								</div>
								</div>

									{{--  <img src="images/user-avatar.jpg" alt="">
									<div class="change-photo-btn">
										<div class="photoUpload">
										    <span><i class="fa fa-upload"></i> Subir Foto</span>
											
										    <input name="photo" type="file" id="photo"  class="upload" />
										</div>
									</div>  --}}
							</div>
							<!-- Row / End -->

						</div>
					</div>
					<!-- Section / End -->
					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-docs"></i> Detalle de la Habitacion</h3>
						</div>

						<!-- Description -->
						<div class="form">
							<h5>Detalles</h5>
							<textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
						</div>
					</div>
					<!-- Section / End -->
					
                		<button type="submit" class="button preview" href="#">Guardar<i class="fa fa-arrow-circle-right"></i></button>

					</form>

				</div>
			</div>
		</div>
@endsection

@section('after-scripts')
	<script type="text/javascript">
		function previewFile() {
			var preview = document.querySelector('#blah');
			var file    = document.querySelector('input[type=file]').files[0];
			var reader  = new FileReader();

			reader.onloadend = function () {
				preview.src = reader.result;
			}

				if (file) {
					reader.readAsDataURL(file);
				} else {
					preview.src = "";
				}
			}
	</script>

@endsection