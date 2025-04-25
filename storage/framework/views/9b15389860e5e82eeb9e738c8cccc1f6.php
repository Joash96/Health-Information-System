<header class="geex-header">
	<div class="geex-header__wrapper">
		<div class="geex-header__logo-wrapper">
			<a href="/dashboard" class="geex-header__logo">
				<img class="logo-lite" src="<?php echo e(asset('public/assets/img/cemapng3.png')); ?>" alt="logo" style="max-width: 100%; height: auto; width: 300px;" />
	<img class="logo-dark" src="<?php echo e(asset('public/assets/img/cemapng3.png')); ?>" alt="logo" style="max-width: 100%; height: auto; width: 300px;" />
			</a>
		</div>
		<nav class="geex-header__menu-wrapper">
			<ul class="geex-header__menu">
				<li class="geex-header__menu__item">
					<a href="/dashboard" class="geex-header__menu__link">
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_1139_9707)">
							<path d="M21.1943 8.31319L14.2413 1.35936C13.3808 0.501345 12.2152 0.0195312 11 0.0195312C9.78482 0.0195312 8.61921 0.501345 7.75868 1.35936L0.805761 8.31319C0.549484 8.56782 0.3463 8.8708 0.207987 9.20454C0.0696733 9.53829 -0.00101787 9.89617 1.10729e-05 10.2574V19.2564C1.10729e-05 19.9857 0.289742 20.6852 0.805467 21.2009C1.32119 21.7166 2.02067 22.0064 2.75001 22.0064H19.25C19.9794 22.0064 20.6788 21.7166 21.1946 21.2009C21.7103 20.6852 22 19.9857 22 19.2564V10.2574C22.001 9.89617 21.9303 9.53829 21.792 9.20454C21.6537 8.8708 21.4505 8.56782 21.1943 8.31319ZM13.75 20.173H8.25001V16.5669C8.25001 15.8375 8.53974 15.138 9.05547 14.6223C9.57119 14.1066 10.2707 13.8169 11 13.8169C11.7294 13.8169 12.4288 14.1066 12.9446 14.6223C13.4603 15.138 13.75 15.8375 13.75 16.5669V20.173ZM20.1667 19.2564C20.1667 19.4995 20.0701 19.7326 19.8982 19.9045C19.7263 20.0764 19.4931 20.173 19.25 20.173H15.5833V16.5669C15.5833 15.3513 15.1005 14.1855 14.2409 13.3259C13.3814 12.4664 12.2156 11.9835 11 11.9835C9.78444 11.9835 8.61865 12.4664 7.75911 13.3259C6.89956 14.1855 6.41668 15.3513 6.41668 16.5669V20.173H2.75001C2.5069 20.173 2.27374 20.0764 2.10183 19.9045C1.92992 19.7326 1.83334 19.4995 1.83334 19.2564V10.2574C1.83419 10.0145 1.93068 9.78168 2.10193 9.60935L9.05485 2.65827C9.57157 2.14396 10.271 1.85522 11 1.85522C11.7291 1.85522 12.4285 2.14396 12.9452 2.65827L19.8981 9.61211C20.0687 9.78375 20.1651 10.0155 20.1667 10.2574V19.2564Z" fill="#B9BBBD"/>
							</g>
							<defs>
							<clipPath id="clip0_1139_9707">
							<rect width="22" height="22" fill="white"/>
							</clipPath>
							</defs>
						</svg>							
						<span>Dashboard</span>
					</a>  
					
				</li>

				<li class="geex-header__menu__item has-children">
					<a href="#" class="geex-header__menu__link">
						<i class="fas fa-th-list"></i>					
						<span>Programs</span>
					</a>  
					<ul class="geex-header__submenu">
						<li class="geex-header__menu__item">
							<a href="<?php echo e(route('programs.index')); ?>" class="geex-header__menu__link ">All Programs</a>
						</li>
						<li class="geex-header__menu__item">
							<a href="<?php echo e(route('programs.create')); ?>" class="geex-header__menu__link ">New Program</a>
						</li>
						
						
					</ul>
				</li>
				
				<li class="geex-sidebar__menu__item has-children">
					<a href="#" class="geex-sidebar__menu__link">
						<i class="fas fa-user-check"></i>
					
						<span>Enrollments</span>
					</a>  
					<ul class="geex-sidebar__submenu">
						
						<li class="geex-sidebar__menu__item">
							<a href="<?php echo e(route('enrollments.index')); ?>" class="geex-sidebar__menu__link ">Enrollments</a>
						</li>
						<li class="geex-header__menu__item">
							<a href="<?php echo e(route('enrollments.create')); ?>" class="geex-header__menu__link ">New Enrollment</a>
						</li>
						
					</ul>
				</li>

				<li class="geex-header__menu__item has-children">
					<a href="#" class="geex-header__menu__link">
						<i class="fas fa-users"></i>						
						<span>Clients</span>
					</a>  
					<ul class="geex-header__submenu">
						<li class="geex-header__menu__item">
							<a href="<?php echo e(route('clients.index')); ?>" class="geex-header__menu__link">All Clients</a>
						</li>
						<li class="geex-header__menu__item">
							<a href="<?php echo e(route('clients.create')); ?>" class="geex-header__menu__link">New Client</a>
						</li>

					</ul>
				</li>

				<li class="geex-header__menu__item has-children">
					<a href="#" class="geex-header__menu__link">
						<i class="fas fa-user-md"></i>						
						<span>Doctors</span>
					</a>  
					<ul class="geex-header__submenu">
						<li class="geex-header__menu__item">
							<a href="<?php echo e(route('doctors.index')); ?>" class="geex-header__menu__link">All Doctors</a>
						</li>
						<li class="geex-header__menu__item">
							<a href="<?php echo e(route('doctors.create')); ?>" class="geex-header__menu__link">New Doctor</a>
						</li>
						
					</ul>
				</li>

				<li class="geex-header__menu__item has-children">
					<a href="#" class="geex-header__menu__link">
						<i class="fas fa-cogs"></i>						
						<span>Settings</span>
					</a>  
					<ul class="geex-header__submenu">
						<li class="geex-header__menu__item">
							<a href="<?php echo e(route('profile.edit')); ?>" class="geex-header__menu__link">Profile</a>
						</li>
						<li class="geex-header__menu__item">
							<a href="/generate-api-key" class="geex-header__menu__link">API Details</a>
						</li>
						
					</ul>
				</li>
			</ul>
		</nav>
		<div class="geex-header__action">
			<div class="geex-header__action__item">
				<button class="geex-btn geex-btn__customizer">
					<i class="uil uil-pen"></i> 
					<span>Customizer</span>
				</button>
			</div> 
		</div>
	</div>
</header><?php /**PATH /home1/pulselin/public_html/hospital/resources/views/includes/header.blade.php ENDPATH**/ ?>