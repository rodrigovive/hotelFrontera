<!-- Navigation
	================================================== -->
	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Menu</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}"><a href="{{ route('admin.index') }}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li class= "{{ active_class(Active::checkUriPattern('admin/news')) }}" ><a href="{{ route('news.index') }}"><i class="sl sl-icon-note"></i> Crear News </a></li>
				<li class="{{ active_class(Active::checkUriPattern('admin/category')) }}"><a href="{{ route('category.index') }}"><i class="sl sl-icon-notebook"></i> Categorias </a></li>
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