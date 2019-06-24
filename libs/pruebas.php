<?php
						wp_nav_menu([
							'menu'            => 'top',
							'theme_location'  => 'menu_principal',
							'container'       => 'div',
							'container_id'    => 'navbarSupportedContent',
							//'container_class' => 'collapse navbar-collapse',
							'container_class' => 'collapse navbar-collapse offset',
							'menu_id'         => false,
							//'menu_class'      => 'navbar-nav mr-auto',
							'menu_class'      => 'nav navbar-nav menu_nav ml-auto',
							'depth'           => 2,
							'fallback_cb'     => 'bs4navwalker::fallback',
							'walker'          => new bs4Navwalker()
						]);
					?>


					<?php
					wp_nav_menu([
						'menu'            => 'top',
						'theme_location'  => 'menu_principal',
						'container'       => 'div',
						'container_id'    => 'navbarSupportedContent',
						//'container_class' => 'collapse navbar-collapse',
						'container_class' => 'collapse navbar-collapse offset',
						'menu_id'         => false,
						//'menu_class'      => 'navbar-nav mr-auto',
						'menu_class'      => 'nav navbar-nav menu_nav ml-auto',
						'depth'           => 2,
						'fallback_cb'     => 'bs4navwalker::fallback',
						'walker'          => new bs4Navwalker()
					]);
				?>