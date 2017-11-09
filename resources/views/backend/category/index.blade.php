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
			<div class="col-md-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Categorias</h3>
						</div>

						<!-- Title -->
						<div class="row with-forms">
							

							<!-- estas categorias, crealas directamente en la base de datos, si ves que se te complica crear un abm de cateogiras... -->

							<!-- Status -->
                            <form id="category-form" action="{{ route('category.store') }}" method="POST">
                            {{--  <form id="category-form" method="get">  --}}
                                    {{ csrf_field() }}
                                <div class="col-md-8">
                                    <h5>Nombre de la Categoria</h5>
                                    <input name="name" class="search-field" type="text" value=""/>
                                </div>

                                <div class="col-md-4">
                                    <a href="{{ route('category.store') }}" onclick="event.preventDefault(); document.getElementById('category-form').submit();" class="button preview">Crear <i class="fa fa-arrow-circle-right"></i></a>
                                    {{--  <a href="#" onclick="event.preventDefault(); document.getElementById('category-form').submit();" class="button preview">Crear <i class="fa fa-arrow-circle-right"></i></a>  --}}
									
                                </div>
                            </form>
						</div>
					</div>
					<!-- Section / End -->
				</div>
			</div>

			<div class="col-md-12">
				<div id="add-listing">
					<div class="dashboard-list-box with-icons ">
						<h4>Categorias Creadas</h4>
						<ul id="categories">

						@foreach ($categories as $category)
							<li>
							<i class="list-box-icon sl sl-icon-layers"></i> <strong><a href="#">{{ $category->name}}</a></strong> 
								<div class="buttons-to-right">
									<button href="#" value="{{$category->id}}" class="button gray reject delete"><i class="sl sl-icon-trash"></i> Borrar</button>
									<a href="{{ url('/admin/category/' . $category->id . '/edit') }}"><button href="{{ url('/admin/category/' . $category->id . '/edit') }}" class="button gray approve"><i class="sl sl-icon-magic-wand" ></i> Editar</button></a>
								</div>
							</li>
						@endforeach

						</ul>
					</div>
				</div>
				
			</div>

		</div>

@endsection

@section('after-scripts')
	<script type="text/javascript">
	$(document).ready ( function () {
		$(document).on ("click", ".delete", function (e) {
				
				
				e.preventDefault();
            	e.stopPropagation();
				let self = $(this).attr("value");
				console.log('self',self);
				$.ajax({

					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					url: '/admin/category/delete/' + self,
					type: 'POST',
					success: function (res){
						//toastr.succes('News borrada')
//						window.location.href = '/admin/category';
						let del = Object.keys(res);
						if(del[0] == 'error'){
							console.log('tiene error',res)
//							$('#categories').toggle('xdxdxdx');
							toastr.warning('La categoria tiene noticias dentro','Categoria')

						}else{
							toastr.success('Eliminada!', 'Categoria')
							setTimeout(redirect, 1000)
							function redirect() {
								window.location.href = '/admin/category'
							}
							
							console.log(res)
						}

					},
					error: function (err){
						console.log(err)
					}
				})


		});
	});


	/*	$(function (){
			let listCategories = function (){
				$.ajax({
					url: '/admin/categories/get',
					success: function (res){

						$("#categories").html(res);
					}
				})
			}
			listCategories();
	
		
			})
	*/
	

	</script>

@endsection