<!-- Navigation
	================================================== -->
	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Menu</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}"><a href="dashboard"><i class="sl sl-icon-settings"></i> Administracion</a></li>
				<li class= "{{ active_class(Active::checkUriPattern('admin/news')) }}" ><a href="alquiler"><i class="sl sl-icon-arrow-right"></i> Crear Alquilar </a></li>
				<li class="{{ active_class(Active::checkUriPattern('admin/category')) }}"><a href="habitacion"><i class="sl sl-icon-arrow-right"></i> Crear Habitaciones </a></li>
				<li class="{{ active_class(Active::checkUriPattern('admin/category')) }}"><a href="huesped"><i class="sl sl-icon-arrow-right"></i> Crear Huesped </a></li>
				<li class="{{ active_class(Active::checkUriPattern('admin/habitaciones-alquiladas')) }}"><a href="habitaciones-alquiladas"><i class="sl sl-icon-arrow-right"></i> Habitaciones Alquiladas </a></li>
				<li class="{{ active_class(Active::checkUriPattern('admin/huesped-registrados')) }}"><a href="huesped-registrados"><i class="sl sl-icon-arrow-right"></i> Huespedes Registrados </a></li>
			</ul>
			<ul data-submenu-title="Salir?">
				<li>
                {{--  <a href="/auth/logout"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  --}}
                <a href="/auth/logout">
                        <i class="sl sl-icon-power"></i> Logout</a></li>
                 </a>

                {{--  <form id="logout-form" action="/auth/logout" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>  --}}
                </li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->