	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				@if (Route::has('login'))
						@auth
						<span class="topbar-child1">
								@foreach(App\Bannerpromocione::orderBy('created_at','desc')->take(1)->get() as $promocion)
									{{$promocion->descripcion}}
								@endforeach
						</span>
				@else
						<span class="topbar-child1">
							Registrate para obtener descuentos de hasta un -60% en tus primeras compras
						</span>
						@endauth
				@endif

			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="/" class="logo">
					<img src="images/icons/logoC.jpg" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="/">Hogar</a>
							</li>

							<li>
								<a href="productos">Categorias</a>
							</li>

							<li>
								<a href="blog">Blog</a>
							</li>

							<li>
								<a href="nosotros">Quienes somos</a>
							</li>

							<li>
								<a href="contactanos">Contactanos</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->

				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					@if (Route::has('login'))
						@auth
						<span class="topbar-email">
								<div class="wrap_menu">
										<nav class="menu">
											<ul class="main_menu">
												<li>
													<a href="#">{{ Auth::user()->name }}</a>
													<ul class="sub_menu">
													<li><a href="/logout">Salir</a></li>
													</ul>
												</li>
											</ul>
										</nav>
								</div>	
						</span>
					@else
						<div class="wrap_menu">
							<nav class="menu">
								<ul class="main_menu">
									<li>
										<a href="#">Invitado</a>
										<ul class="sub_menu">
											<li><a href="#" data-toggle="modal" data-target="#ingresar">Ingresar</a></li>
											<li><a href="#" data-toggle="modal" data-target="#registro">Crea una cuenta</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
						@endauth
					@endif

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="carrito" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

			<div class="modal fade" id="ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="myModalLabel">Entrar</h4>
							</div>
							<div class="modal-body">
									<form class="form-horizontal" method="POST" action="{{ route('login') }}">
											{{ csrf_field() }}
					
											<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
												<label for="email" class="col-md-4 control-label">E-Mail Address</label>
					
												<div class="col-md-6">
													<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
					
													@if ($errors->has('email'))
														<span class="help-block">
															<strong>{{ $errors->first('email') }}</strong>
														</span>
													@endif
												</div>
											</div>
					
											<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
												<label for="password" class="col-md-4 control-label">Password</label>
					
												<div class="col-md-6">
													<input id="password" type="password" class="form-control" name="password" required>
					
													@if ($errors->has('password'))
														<span class="help-block">
															<strong>{{ $errors->first('password') }}</strong>
														</span>
													@endif
												</div>
											</div>
					
											<div class="form-group">
												<div class="col-md-6 col-md-offset-4">
													<div class="checkbox">
														<label>
															<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
														</label>
													</div>
												</div>
											</div>
											<div class="col-md-8 col-md-offset-4">
													<button type="submit" class="btn btn-primary">
														Login
													</button>
									</form>
							</div>
							<div class="modal-footer">
									<a class="btn btn-link" href="{{ route('password.request') }}">
											Olvidaste tu contraseña?
										</a>
							</div>
						</div>
					</div>
				</div>


		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logoC.jpg" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<div class="wrap_menu">
							<nav class="menu">
								<ul class="main_menu">
									<li>
										<a href="#">Perfil</a>
										<ul class="sub_menu">
											<li><a href="#">Ingresar</a></li>
											<li><a href="#">Crea una cuenta</a></li>
										</ul>
									</li>
								</ul>
							</nav>
					</div>	

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">

									<!-- Button -->
									<a href="carrito" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>




		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Obten grandes beneficios...
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								wilsoncajisaca@gmail.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="/">Hogar</a>
					</li>

					<li class="item-menu-mobile">
						<a href="productos">Categorias</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="nosotros">Quienes somos</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contactanos">Contactanos</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>