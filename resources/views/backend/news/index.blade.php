@extends('backend.layouts.app')
<!-- Content
	================================================== -->
@section('content')
		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Crear un nuevo chusmerio de GAM</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/admin/dashboard">Dashboard</a></li>
							<li>Add Listing</li>
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
							<h3><i class="sl sl-icon-doc"></i> Titulo de la Noticia</h3>
						</div>
					{{--  <form id="new-form" action="{{ route('news.store') }}" method="GET">  --}}
					<form id="new-form" action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">

						<!-- Title -->
						<div class="row with-forms">
						{{ csrf_field() }}
							<div class="col-md-4">
								<h5>Categoria <i class="tip" data-tip-content="Las categorias estan creadas desde la db"></i></h5>
								
								<select name="category" class="chosen-select-no-single" id="category">
									<option value="" label="blank">Select Category</option>	
									@foreach ($categories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
									
								</select>
							</div>

							<!-- estas categorias, crealas directamente en la base de datos, si ves que se te complica crear un abm de cateogiras... -->

							<!-- Status -->
							<div class="col-md-8">
								<h5>Titulo de la Chusma</h5>
								<input name="title" id="title"class="search-field" type="text" value=""/>
							</div>
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
							<h3><i class="sl sl-icon-docs"></i> Detalle de la Noticia</h3>
						</div>

						<!-- Description -->
						<div class="form">
							<h5>Cuerpo</h5>
							<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
						</div>
					</div>
					<!-- Section / End -->
					
						{{--  <a href="{{ route('news.store') }}" onclick="event.preventDefault(); document.getElementById('new-form').submit();" class="button preview">Guardar<i class="fa fa-arrow-circle-right"></i></a>  --}}
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

			let newsForm = function(){
				let data = {
					title: $("#title").val(),
					category: $("#category").val(),
					photo: $("#photo").val(),
					summary: $("#summary").val(),
				};
				return data;	
			}
		
		
		$(function(){
			
			/*$("#new-form").submit(function (e){
				e.preventDefault();
            	e.stopPropagation();
				let data = newsForm();
				console.log(data);
				if(data.title){
					$.ajax({
						headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
						url: '/admin/news',
						data: data,
						type: 'POST',
						success: function(e){
							window.location.href = '/admin/dashboard';
							//toastr.options.timeOut = 10000;
                    		//toastr.options.positionClass = 'toast-top-center';
               				//toastr.success('Se crea una nueva noticia')
							   console.log('llego pw')
						},
						error:function (err) {
                			//toastr.error('No se envio la consulta')
							   console.log('llego pw error :',err)
                		}
					})
				}else{
					console.log('no seas pendejo pon titulo')
				}
				
			})*/

		})

	</script>

@endsection