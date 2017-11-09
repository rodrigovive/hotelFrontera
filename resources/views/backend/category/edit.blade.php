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
                            <form id="category-form" action="{{ url('/admin/category/update/' . $category->id) }}" method="POST">
                            {{--  <form id="category-form" method="get">  --}}
                                    {{ csrf_field() }}
                                <div class="col-md-8">
                                    <h5>Nombre de la Categoria</h5>
                                    <input name="name" class="search-field" type="text" value="{{$category->name}}"/>
                                </div>

                                <div class="col-md-4">
                                    {{--  <a href="{{ route('category.store') }}" onclick="event.preventDefault(); document.getElementById('category-form').submit();" class="button preview">Crear <i class="fa fa-arrow-circle-right"></i></a>  --}}
                                    {{--  <a href="#" onclick="event.preventDefault(); document.getElementById('category-form').submit();" class="button preview">Crear <i class="fa fa-arrow-circle-right"></i></a>  --}}
                                    <button type="submit" class="button preview" href="#">Guardar<i class="fa fa-arrow-circle-right"></i></button>
									
                                </div>
                            </form>
						</div>
					</div>
					<!-- Section / End -->
				</div>
			</div>

		</div>

@endsection
