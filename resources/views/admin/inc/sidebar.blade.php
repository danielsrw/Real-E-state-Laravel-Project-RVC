<div class="pc-mob-header pc-header">
	<div class="pcm-logo">
		<img src="{{ ('assets/img/logo.png') }}">
	</div>
	<div class="pcm-toolbar">
		<a href="#!" class="pc-head-link" id="mobile-collapse">
			<div class="hamburger hamburger--arrowturn">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<a href="#!" class="pc-head-link" id="header-collapse">
			<i data-feather="more-vertical"></i>
		</a>
	</div>
</div>
<!-- [ Mobile header ] End -->

<!-- [ navigation menu ] start -->
<nav class="pc-sidebar ">
	<div class="navbar-wrapper">
		<div class="m-header">
			<a href="{{ route('dashboard') }}" class="b-brand">
				<!-- ========   change your logo hear   ============ -->
				<img src="{{ ('assets/img/logo.png') }}">
			</a>
		</div>
		<div class="navbar-content">
			<ul class="pc-navbar">
				<li class="pc-item pc-caption">
					<label>Navigation</label>
				</li>
				<li>
					<a href="{{ route('dashboard') }}" class="pc-link"><span class="pc-micon"><i data-feather="home"></i></span><span class="pc-mtext">Dashboard</span></a>
				</li>
				<li>
					<a href="{{ route('members') }}" class="pc-link"><span class="pc-micon"><i data-feather="users"></i></span><span class="pc-mtext">Members</span></a>
				</li>
				<li>
					<a href="{{ route('adminProjects') }}" class="pc-link"><span class="pc-micon"><i data-feather="square"></i></span><span class="pc-mtext">Project</span></a>
				</li>
				<li>
					<a href="{{ route('adminService') }}" class="pc-link"><span class="pc-micon"><i data-feather="layers"></i></span><span class="pc-mtext">Services</span></a>
				</li>
				<li>
					<a href="{{ route('adminRequestMoney') }}" class="pc-link"><span class="pc-micon"><i data-feather="sunset"></i></span><span class="pc-mtext">Request Money</span></a>
				</li>
				<li>
					<a href="{{ route('adminClient') }}" class="pc-link"><span class="pc-micon"><i data-feather="user-plus"></i></span><span class="pc-mtext">Clients</span></a>
				</li>
				<li>
					<a href="{{ route('adminContact') }}" class="pc-link"><span class="pc-micon"><i data-feather="user"></i></span><span class="pc-mtext">Contacts</span></a>
				</li>
			</ul>
		</div>
	</div>
</nav>

