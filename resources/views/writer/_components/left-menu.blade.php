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
				<a class="dashboard" href="{{ '/writer' }}/dashboard"><!-- warning - url used by default by ajax (if eneabled) -->
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
						<a href="{{ '/writer' }}/blog/posts">Published</a>
					</li>
					<li class="@if($data->path->section == 'post') active @endif">
						<a href="{{ '/writer' }}/blog/post/create">Create New</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-menu-arrow pull-right"></i>
					<i class="main-icon fa fa-bar-chart-o"></i> <span>Graphs</span>
				</a>
				<ul><!-- submenus -->
					<li><a href="{{ '/writer' }}">Flot Charts</a></li>
					<li><a href="{{ '/writer' }}">Morris Charts</a></li>
					<li><a href="{{ '/writer' }}">Inline Charts</a></li>
					<li><a href="{{ '/writer' }}">Chart.js</a></li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-menu-arrow pull-right"></i>
					<i class="main-icon fa fa-table"></i> <span>Tables</span>
				</a>
				<ul><!-- submenus -->
					<li><a href="{{ '/writer' }}">Bootstrap Tables</a></li>
					<li><a href="{{ '/writer' }}">jQuery Grid</a></li>
					<li><a href="{{ '/writer' }}">jQuery Footable</a></li>
					<li>
						<a href="#">
							<i class="fa fa-menu-arrow pull-right"></i>
							Datatables
						</a>
						<ul>
							<li><a href="{{ '/writer' }}">Managed Datatables</a></li>
							<li><a href="{{ '/writer' }}">Editable Datatables</a></li>
							<li><a href="{{ '/writer' }}">Advanced Datatables</a></li>
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
					<li><a href="{{ '/writer' }}">Smarty Elements</a></li>
					<li><a href="{{ '/writer' }}">Masked Inputs</a></li>
					<li><a href="{{ '/writer' }}">Pickers</a></li>
					<li><a href="{{ '/writer' }}">UI Sliders</a></li>
					<li><a href="{{ '/writer' }}">Validation Form</a></li>
					<li><a href="{{ '/writer' }}">Html Editors</a></li>
					<li><a href="{{ '/writer' }}">Autosuggest</a></li>
					<li><a href="{{ '/writer' }}">Form X-Editable</a></li>
					<li><a href="{{ '/writer' }}">Dropzone File Upload</a></li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-menu-arrow pull-right"></i>
					<i class="main-icon fa fa-gears"></i> <span>UI Features</span>
				</a>
				<ul><!-- submenus -->
					<li><a href="{{ '/writer' }}">Portlets</a></li>
					<li><a href="{{ '/writer' }}">Buttons</a></li>
					<li>
						<a href="#">
							<i class="fa fa-menu-arrow pull-right"></i>
							Icons
						</a>
						<ul>
							<li><a href="{{ '/writer' }}">Fontawsome</a></li>
							<li><a href="{{ '/writer' }}">Et-Line Icons</a></li>
							<li><a href="{{ '/writer' }}">Glyph Icons</a></li>
							<li><a href="{{ '/writer' }}">Flags</a></li>
						</ul>
					</li>
					<li><a href="{{ '/writer' }}">Alerts &amp; Dialogs</a></li>
					<li><a href="{{ '/writer' }}">Tabs, Acordion &amp; Navs</a></li>
					<li><a href="{{ '/writer' }}">Knob Circles</a></li>
					<li><a href="{{ '/writer' }}">Nestable List</a></li>
					<li><a href="{{ '/writer' }}">Toastr Notifications</a></li>
					<li><a href="{{ '/writer' }}">Modals</a></li>
					<li><a href="{{ '/writer' }}">Grid</a></li>
					<li><a href="{{ '/writer' }}">Google Maps</a></li>
					<li><a href="{{ '/writer' }}">Vector Maps</a></li>
					<li><a href="{{ '/writer' }}">Essentials</a></li>
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
					<li><a href="{{ '/writer' }}">Invoice</a></li>
					<li><a href="{{ '/writer' }}">Login</a></li>
					<li><a href="{{ '/writer' }}">Register</a></li>
					<li><a href="{{ '/writer' }}">Lock Screen</a></li>
					<li><a href="{{ '/writer' }}">Forum</a></li>
					<li><a href="{{ '/writer' }}">Error 404</a></li>
					<li><a href="{{ '/writer' }}">Error 500</a></li>
					<li><a href="{{ '/writer' }}">Pricing Table</a></li>
					<li><a href="{{ '/writer' }}">Search Result</a></li>
					<li><a href="{{ '/writer' }}">Sidebar Page</a></li>
					<li><a href="{{ '/writer' }}">User Profile</a></li>
					<li><a href="{{ '/writer' }}">Blank Page</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ '/writer' }}">
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