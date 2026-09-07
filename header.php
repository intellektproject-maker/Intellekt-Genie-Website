<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
?>
<nav class="navbar navbar-expand-lg robotics-navbar" id="navbar">
	<div class="container">
		<a class="navbar-brand robotics-navbar-brand d-flex align-items-center" href="index.php">
			<img src="assets/image/new-images/logo-white.png" alt="Intellekt Genie Robotics" class="img-fluid" style="max-height: 42px;">
		</a>
		<button class="navbar-toggler robotics-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" onclick="changeIcon()">
			<i class="fa-solid fa-bars" id="open-icon"></i>
			<i class="fa-solid fa-xmark text-white" id="close-icon" style="display: none;"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ms-auto align-items-lg-center">
				<!-- 1. Home -->
				<li class="nav-item robotics-nav-item">
					<a class="nav-link robotics-nav-link <?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>" aria-current="page" href="index.php">
						Home
					</a>
				</li>

				<!-- 2. Our Work -->
				<li class="nav-item dropdown robotics-nav-item">
					<a class="nav-link robotics-nav-link dropdown-toggle d-flex align-items-center gap-1 <?php echo in_array($currentPage, ['services.php', 'our-work.php']) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Our Work <i class="fa-solid fa-chevron-down ms-1"></i>
					</a>
					<ul class="dropdown-menu robotics-dropdown-menu">
						<li>
							<a class="dropdown-item robotics-dropdown-item" href="#explore-amrs">
								<span><i class="fa-solid fa-robot me-2"></i> Autonomous Mobile Robots (AMRs)</span>
								<i class="fa-solid fa-arrow-right"></i>
							</a>
						</li>
						<li>
							<a class="dropdown-item robotics-dropdown-item" href="#explore-arms">
								<span><i class="fa-solid fa-microchip me-2"></i> Robotic Arms & Manipulation</span>
								<i class="fa-solid fa-arrow-right"></i>
							</a>
						</li>
						<li>
							<a class="dropdown-item robotics-dropdown-item" href="#automation">
								<span><i class="fa-solid fa-gears me-2"></i> Industrial Automation & Vision</span>
								<i class="fa-solid fa-arrow-right"></i>
							</a>
						</li>
						<li>
							<a class="dropdown-item robotics-dropdown-item" href="services.php">
								<span><i class="fa-solid fa-industry me-2"></i> Custom Deployment Solutions</span>
								<i class="fa-solid fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<!-- 3. Company -->
				<li class="nav-item dropdown robotics-nav-item">
					<a class="nav-link robotics-nav-link dropdown-toggle d-flex align-items-center gap-1 <?php echo in_array($currentPage, ['company-profile.php', 'our-team.php', 'leadership.php']) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Company <i class="fa-solid fa-chevron-down ms-1"></i>
					</a>
					<ul class="dropdown-menu robotics-dropdown-menu">
						<li>
							<a class="dropdown-item robotics-dropdown-item" href="company-profile.php">
								<span><i class="fa-solid fa-building me-2"></i> Company Profile</span>
								<i class="fa-solid fa-arrow-right"></i>
							</a>
						</li>
						<li>
							<a class="dropdown-item robotics-dropdown-item" href="our-team.php">
								<span><i class="fa-solid fa-users me-2"></i> Our Team & Leadership</span>
								<i class="fa-solid fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<!-- 4. Resources -->
				<li class="nav-item dropdown robotics-nav-item">
					<a class="nav-link robotics-nav-link dropdown-toggle d-flex align-items-center gap-1 <?php echo in_array($currentPage, ['programmes.php', 'gallary.php', 'resources.php']) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Resources <i class="fa-solid fa-chevron-down ms-1"></i>
					</a>
					<ul class="dropdown-menu robotics-dropdown-menu">
						<li>
							<a class="dropdown-item robotics-dropdown-item" href="gallary.php">
								<span><i class="fa-solid fa-photo-film me-2"></i> Showcase & Gallery</span>
								<i class="fa-solid fa-arrow-right"></i>
							</a>
						</li>
						<li>
							<a class="dropdown-item robotics-dropdown-item" href="programmes.php">
								<span><i class="fa-solid fa-book-open me-2"></i> Technical Documentation</span>
								<i class="fa-solid fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<!-- 5. Contact -->
				<li class="nav-item robotics-nav-item">
					<a class="nav-link robotics-nav-link <?php echo ($currentPage == 'contact-us.php') ? 'active' : ''; ?>" href="contact-us.php">
						Contact
					</a>
				</li>

				<!-- Navbar CTA Button -->
				<li class="nav-item ms-lg-3 mt-3 mt-lg-0">
					<a href="contact-us.php" class="robotics-nav-btn">
						<span>Contact Us</span>
						<i class="fa-solid fa-arrow-right-long"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
