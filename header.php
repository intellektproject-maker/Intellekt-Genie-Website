<nav class="navbar navbar-expand-lg   " id="navbar">
	<div class="container">
		<a class="navbar-brand" href="index.php"><img src="assets/image/new-images/logo.png" alt="" class="w-100"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span>
				<i class="fa-solid fa-bars  fs-4" onclick="changeIcon()" id="open-icon"></i>
				<i class="fa-solid fa-xmark fa-flip-horizontal fs-2 text-primary" onclick="changeIcon()" id="close-icon" style="display: none;"></i>
			</span>
		</button>
		<div class="collapse navbar-collapse " id="navbarNavDropdown">
			<ul class="navbar-nav gap-3 ms-auto text-start ps-3">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="index.php">Home</a>
				</li>
				<li class="nav-item dropdown  dropdown-1">
					<a class="nav-link " role="button" data-bs-toggle="dropdown" aria-expanded="false">
						About Us<i class="fas fa-angle-down ps-2 "></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-1 main">
						<li class="dropdown-submenu dropdown ">
							<a class="dropdown-item  d-flex justify-between align-items-center " href="company-profile.php"> Company Profile </a>
						</li>
						<li class="dropdown-submenu dropdown">
							<a class="dropdown-item  text-wrap d-flex justify-between align-items-center flex-row" href="our-team.php">Our Team</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown  dropdown-1">
					<a class="nav-link " href="services.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Services<i class="fas fa-angle-down ps-2 "></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-1 dropdown-menu-service main">

						<li class="dropdown-submenu dropdown ">
							<a class="dropdown-item  d-flex justify-between align-items-center " href="services.php">Corporate Training </a>
						</li>
						<li class="dropdown-submenu dropdown">
							<a class="dropdown-item  text-wrap d-flex justify-between align-items-center flex-row" href="services.php"> Organization Restructure solutions</a>
						</li>
						<li class="dropdown-submenu dropdown">
							<a class="dropdown-item  text-wrap d-flex justify-between align-items-center flex-row" href="services.php"> Value- Added Programmes for colleges</a>
						</li>
					</ul>
				</li>


				<li class="nav-item dropdown dropdown-1 ">
					<a class="nav-link " href="programmes.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Programmes <i class="fas fa-angle-down ps-1 "></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-1  main">

						<li class="dropdown-submenu dropdown ">
							<a class="dropdown-item  d-flex justify-between align-items-center " href="behavioural.php">Behavioural </a>

						</li>

						<li class="dropdown-submenu dropdown">
							<a class="dropdown-item  text-wrap d-flex justify-between align-items-center flex-row" href="business-management.php">Business Management </a>

						</li>

						<li class="dropdown-submenu dropdown">
							<a class="dropdown-item  text-wrap d-flex justify-between align-items-center flex-row" href="compliance.php">Compliance </a>

						</li>

						<li class="dropdown-submenu dropdown">
							<a class="dropdown-item  text-wrap d-flex justify-between align-items-center flex-row" href="leadership.php">Leadership </a>

						</li>

					</ul>
				</li>

				<li class="nav-item">
					<a class="nav-link " aria-current="page" href="gallary.php">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="contact-us.php">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
