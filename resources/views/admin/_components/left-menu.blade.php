<!-- 
	ASIDE 
	Keep it outside of #wrapper (responsive purpose)
-->
<aside id="aside">
	<!--
		Always open:
		<li class="active alays-open">

		LABELS:
			<span class="label label-danger pull-right">1</span>
			<span class="label label-default pull-right">1</span>
			<span class="label label-warning pull-right">1</span>
			<span class="label label-success pull-right">1</span>
			<span class="label label-info pull-right">1</span>
	-->
	<nav id="sideNav"><!-- MAIN MENU -->
		<ul class="nav nav-list">
			<li class="@if($data->path->module == 'dashboard') active @endif"><!-- dashboard -->
				<a class="dashboard" href="{{ env('ADMIN_PATH_PREFIX') }}/dashboard"><!-- warning - url used by default by ajax (if eneabled) -->
					<i class="main-icon fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="@if($data->path->module == 'blog') active @endif">
				<a href="#">
					<i class="fa fa-menu-arrow pull-right"></i>
					<i class="main-icon fa fa-book"></i> <span>Blog</span>
				</a>
				<ul><!-- submenus -->
					<li class="@if($data->path->section == 'posts') active @endif">
						<a href="{{ env('ADMIN_PATH_PREFIX') }}/blog/posts">Published</a>
					</li>
					<li class="@if($data->path->section == 'post') active @endif">
						<a href="{{ env('ADMIN_PATH_PREFIX') }}/blog/post/create">Create New</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-menu-arrow pull-right"></i>
					<i class="main-icon fa fa-bar-chart-o"></i> <span>Graphs</span>
				</a>
				<ul><!-- submenus -->
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Flot Charts</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Morris Charts</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Inline Charts</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Chart.js</a></li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-menu-arrow pull-right"></i>
					<i class="main-icon fa fa-table"></i> <span>Tables</span>
				</a>
				<ul><!-- submenus -->
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Bootstrap Tables</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">jQuery Grid</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">jQuery Footable</a></li>
					<li>
						<a href="#">
							<i class="fa fa-menu-arrow pull-right"></i>
							Datatables
						</a>
						<ul>
							<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Managed Datatables</a></li>
							<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Editable Datatables</a></li>
							<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Advanced Datatables</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-menu-arrow pull-right"></i>
					<i class="main-icon fa fa-pencil-square-o"></i> <span>Forms</span>
				</a>
				<ul><!-- submenus -->
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Smarty Elements</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Masked Inputs</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Pickers</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">UI Sliders</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Validation Form</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Html Editors</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Autosuggest</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Form X-Editable</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Dropzone File Upload</a></li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-menu-arrow pull-right"></i>
					<i class="main-icon fa fa-gears"></i> <span>UI Features</span>
				</a>
				<ul><!-- submenus -->
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Portlets</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Buttons</a></li>
					<li>
						<a href="#">
							<i class="fa fa-menu-arrow pull-right"></i>
							Icons
						</a>
						<ul>
							<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Fontawsome</a></li>
							<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Et-Line Icons</a></li>
							<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Glyph Icons</a></li>
							<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Flags</a></li>
						</ul>
					</li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Alerts &amp; Dialogs</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Tabs, Acordion &amp; Navs</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Knob Circles</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Nestable List</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Toastr Notifications</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Modals</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Grid</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Google Maps</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Vector Maps</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Essentials</a></li>
					<li>
						<a href="#">
							<i class="fa fa-menu-arrow pull-right"></i>
							<i class="fa fa-folder-open"></i>
							Deep Navigation
						</a>
						<!-- 3rd Level -->
						<ul>
							<li>
								<a href="#">
									3rd Level
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-menu-arrow pull-right"></i>
									<i class="fa fa-folder-open"></i>
									4rd Level
								</a>
								<!-- 4th Level -->
								<ul>
									<li>
										<a href="#">
											4th Level
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-menu-arrow pull-right"></i>
											<i class="fa fa-folder-open"></i>
											5th Level
										</a>
										<!-- 5th Level -->
										<ul>
											<li>
												<a href="#">
													5th level
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-menu-arrow pull-right"></i>
													<i class="fa fa-folder-open"></i>
													6th level
												</a>
												<!-- 6th Level -->
												<ul>
													<li>
														<a href="#">
															6th level
														</a>
													</li>
													<li>
														<a href="#">
															6th level
														</a>
													</li>
												</ul><!-- /6th Level -->
											</li>
										</ul><!-- /5th Level -->
									</li>
								</ul><!-- /4th Level -->
							</li>
						</ul><!-- /3rd Level -->
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-menu-arrow pull-right"></i>
					<i class="main-icon fa fa-file"></i> <span>Pages</span>
				</a>
				<ul><!-- submenus -->
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Invoice</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Login</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Register</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Lock Screen</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Forum</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Error 404</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Error 500</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Pricing Table</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Search Result</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Sidebar Page</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">User Profile</a></li>
					<li><a href="{{ env('ADMIN_PATH_PREFIX') }}">Blank Page</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ env('ADMIN_PATH_PREFIX') }}">
					<i class="main-icon fa fa-calendar"></i>
					<span class="label label-warning pull-right">2</span> <span>Calendar</span>
				</a>
			</li>
		</ul>

		<!-- SECOND MAIN LIST -->
		<h3>MORE</h3>
		<ul class="nav nav-list">
			<li>
				<a href="/">
					<i class="main-icon fa fa-link"></i>
					<span class="label label-danger pull-right">PRO</span> <span>Frontend</span>
				</a>
			</li>
		</ul>

	</nav>

	<span id="asidebg"><!-- aside fixed background --></span>
</aside>
<!-- /ASIDE -->