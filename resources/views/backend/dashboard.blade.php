@extends('backend.layouts.app')
<!-- Content
	================================================== -->
@section('content')
<!-- Dashboard -->

	<!-- Content
	================================================== -->

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Panel de Administracion</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="/">Home</a></li>
							<li>Noticias Creadas</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Recent Activity -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box with-icons margin-top-20">
					<h4>Habitaciones Alquiladas</h4>
					<ul>
						@foreach ($rents as $rent)
							{{--  <li>
								<i class="list-box-icon sl sl-icon-layers"></i> {{$new->category->name}} <strong><br/><a href="#">{{$new->title}}</a></strong> 
								
								<div class="buttons-to-right">
									<a href="{{ asset('uploads/') }}/{{$new->photo}} "target="_blank"><button href="{{ asset('uploads/') }}/{{$new->photo}} "target="_blank" value="{{$new->id}}" class="button gray reject"><i class="sl sl-icon-trash"></i> Ver foto</button></a>
									<button href="#" value="{{$new->id}}" class="button gray reject delete"><i class="sl sl-icon-trash"></i> Borrar</button>
									<a href="{{ url('/admin/news/' . $new->id . '/edit') }}"><button href="{{ url('/admin/news/' . $new->id . '/edit') }}" class="button gray approve"><i class="sl sl-icon-magic-wand" ></i> Editar</button></a>

								</div>
							</li>  --}}
						@endforeach
						
					</ul>
				</div>
			</div>
		</div>
	<!-- Content / End -->

<!-- Dashboard / End -->
@endsection



@section('after-scripts')
	<script type="text/javascript">
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
			$('.delete').click(function(e){
				e.preventDefault();
            	e.stopPropagation();
				let self = $(this).attr("value");
				console.log('self',self);
				$.ajax({

					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					url: '/admin/news/delete/' + self,
					type: 'POST',
					success: function (res){
						//toastr.succes('News borrada')
						window.location.href = '/admin/dashboard';
						console.log(res)
					},
					error: function (err){
						console.log(err)
					}
				})
			})
			
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