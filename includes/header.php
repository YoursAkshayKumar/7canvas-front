    <body class="bg-white">

        <!-- Preloader -->
        <div id="preloader">
			<div class="preloader-inner">
				<div class="spinner"></div>
				<div class="loading-text">
					<span data-preloader-text="7" class="characters">7</span>
					
					<span data-preloader-text="C" class="characters">C</span>
					
					<span data-preloader-text="A" class="characters">A</span>
					
					<span data-preloader-text="N" class="characters">N</span>
					
					<span data-preloader-text="V" class="characters">V</span>

					<span data-preloader-text="A" class="characters">A</span>

					<span data-preloader-text="S" class="characters">S</span>
				</div>
			</div>
		</div>

        <!-- Color Mode Switcher -->
		<div id="mode_switcher" class="d-none">
			<span><i class="bi bi-moon-fill"></i></span>	
		</div>        

        <!-- Cursor Effect -->
        <div class="pointer bnz-pointer" id="bnz-pointer"></div>

        <!-- Header -->
		<header class="header">				
            <div class="container">
                <div class="header_inner d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="index.php" class="light_logo"><img src="assets/img/logo-white.png" alt="logo"></a>
                        <a href="index.php" class="dark_logo"><img src="assets/img/logo.png" alt="logo"></a>
                    </div>

                    
                    <div class="mainnav d-none d-lg-block">
                        <ul class="main_menu">
                            <li class="menu-item active"><a href="index.php">Home</a>
                                
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="#">About us</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="about-company.php">About Company</a></li>
                                    <li class="menu-item"><a href="our-visionaries.php">Our Visionaries</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="services.php">Services</a></li>
                            <li class="menu-item"><a href="blogs.php">Blogs</a></li>
                            <li class="menu-item"><a href="projects.php">Projects</a></li>
                            <li class="menu-item"><a href="contact-us.php">Contact</a></li>
                           
                        </ul>
                    </div>
                    <div class="header_right_part d-flex align-items-center">
                        <button class="aside_open">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
                        <!-- <div class="header_search">								
                            <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                        </div>
                        <div class="open_search">
                            <form class="search_form" action="search.php">
                                <input type="text" name="search" class="keyword form-control" placeholder="Search..." >
                                <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div> -->

                        <!-- Mobile Responsive Menu Toggle Button -->
                        <button type="button" class="mr_menu_toggle d-lg-none">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
			</div>
		</header>

        <!-- Mobile Responsive Menu -->
		<div class="mr_menu">
			<div class="mr_menu_overlay"></div>
			<button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
            <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
			<div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->

            <!-- Footer-->
            <footer class="footer p-0">
                <div class="footer_inner pb-0">
                    <div class="footer_elements d-flex align-items-center justify-content-center">
                        <div class="footer_elements_inner">
                            <div class="footer_social">
                                <ul class="social_list justify-content-center">
                                    <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li class="youbetube"><a href="#"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="terms_condition">
                                <ul>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Condition</a></li>
                                    <li><a href="#">Policy</a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <p>Mrittik 2023. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
		</div>

        <div class="aside_info_wrapper">
			<button class="aside_close"><i class="bi bi-x-lg"></i></button>
            <div class="aside_logo">
                <a href="index.php" class="light_logo"><img src="assets/img/logo-white.png" alt="logo"></a>
                <a href="index.php" class="dark_logo"><img src="assets/img/logo.png" alt="logo"></a>
            </div>
			<div class="aside_info_inner">
                <p>7 Canvas is a creative design studio based in Meerut, Uttar Pradesh. We bring together different services like architecture, interior design, 3D visualization, city planning, and construction management all under one roof.</p>
                
                <div class="aside_info_inner_box">
                    <h5>Contact Info</h5>
                    <p>+91 78957 15406</p>
                    
                    <p>support@7canvas.in</p>

                    <h5>Office Address</h5>
                    <p>MSEVEN COMPLEX, First Floor, Shop 15, A Block, <br> Pallavpuram, Meerut, Uttar Pradesh 250110</p>
                </div>
                <div class="social_sites">
                    <ul class="d-flex align-items-center justify-content-center">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                    </ul>
                </div>
			</div>
		</div>
