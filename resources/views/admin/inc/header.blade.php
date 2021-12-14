<header class="pc-header ">
	<div class="header-wrapper">
		<div class="ml-auto">
			<ul class="list-unstyled">
				<li class="dropdown pc-h-item">
					<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<i data-feather="search"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
						<form class="px-3">
							<div class="form-group mb-0 d-flex align-items-center">
								<i data-feather="search"></i>
								<input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
							</div>
						</form>
					</div>
				</li>
				<li class="dropdown pc-h-item">
					<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<i class="material-icons-two-tone" class="mr-5">account_circle</i>
						<span>
							<span class="user-name" style="text-transform: capitalize;">{{ Auth::user()->name }}</span>
							<span class="user-desc">{{ Auth::user()->role->name }}</span>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
						<a href="{{ route('logout') }}" class="dropdown-item">
							<i class="material-icons-two-tone">chrome_reader_mode</i>
							<span>Logout</span>
						</a>
					</div>
				</li>
			</ul>
		</div>

	</div>
</header>