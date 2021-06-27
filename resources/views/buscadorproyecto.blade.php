@extends('layouts.app')

@section('content')

<!-- Favicon -->
<link rel="shortcut icon" href="https://blogzine.webestica.com/assets/images/favicon.ico">

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="img/Busqueda_files/css2" rel="stylesheet">

<!-- Plugins CSS -->
<link rel="stylesheet" type="text/css" href="img/Busqueda_files/all.min.css">
<link rel="stylesheet" type="text/css" href="img/Busqueda_files/bootstrap-icons.css">

<!-- Theme CSS -->
<link id="style-switch" rel="stylesheet" type="text/css" href="img/Busqueda_files/style.css">

<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header><div id="sticky-space" style="height: 0px;"></div>


<!-- =======================
Inner intro END -->


<!-- =======================
contenedor -->


<!-- =======================
contenedor -->
<center><h2>Noticias</h2></center>
<<div class="row">  
<div class="card border rounded-3 up-hover p-4 mb-4">
<div class="row g-3">
<div class="contenedorscroll">
<!-- =======================
contenedor -->      
               @foreach ($noticia as $noticias)
				<!-- Card item START -->
				<div class="card border rounded-3 up-hover p-4 mb-4">
					<div class="row g-3">
						<div class="col-lg-5">
							<!-- Categories -->
							<a href="" class="badge bg-primary mb-2"></i>Noticia</a>
							<!-- Title -->
							<h2 class="card-title">
								<a href="" class="btn-link text-reset stretched-link">{{$noticias->title}}</a>
							</h2>
							<!-- Author info -->
							<div class="d-flex align-items-center position-relative mt-3">
								<div class="avatar me-2">
									<img class="avatar-img rounded-circle" src="img/logo3.jpg" alt="avatar">
								</div>
								<div>
									<h5 class="mb-1"><a href="" class="stretched-link text-reset btn-link">PostMyGames</a></h5>
									<ul class="nav align-items-center small">
										<li class="nav-item me-3">{{$noticias->created_at->toFormattedDateString()}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Detail -->
						<div class="col-md-6 col-lg-4">
							<p>{{$noticias->content}}</p>
						</div>
						<!-- Image -->
						<div class="col-md-6 col-lg-3">
							<img class="rounded-3" src="{{asset('storage/'.$noticias->image)}}" alt="Card image">
						</div>
					</div>
				</div>
				<!-- Card item END -->
				
				<!-- Card item END -->

			@endforeach
     </div>
     </div>
</div>
     </div>    
 <!-- =======================
contenedor -->
<center><h2>Foros</h2></center>
<<div class="row">  
<div class="card border rounded-3 up-hover p-4 mb-4">
<div class="row g-3">
<div class="contenedorscroll">
<!-- =======================
contenedor -->      
@foreach ($foro as $foros)
				<!-- Card item START -->
				<div class="card border rounded-3 up-hover p-4 mb-4">
					<div class="row g-3">
						<div class="col-lg-5">
							<!-- Categories -->
							<a href="" class="badge bg-primary mb-2"></i>Foro</a>
							<!-- Title -->
							<h2 class="card-title">
								<a href="{{url('probar/'.$foros->id)}}" class="btn-link text-reset stretched-link">{{$foros->title}}</a>
							</h2>
							<!-- Author info -->
							<div class="d-flex align-items-center position-relative mt-3">
								<div class="avatar me-2">
									@foreach ($profile as $profiles)
											@if ($profiles->user_id == $foros->user_id)

											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{asset('storage/'.$profiles->profilephoto)}}" alt="avatar">
											</div>
												
											@endif
											@endforeach
								</div>
								<div>
									@foreach ($user as $users)
											@if ($users->id == $foros->user_id)
											<h5 class="mb-1">by<a href="{{url('users/'.$users->id)}}" class="stretched-link text-reset btn-link">{{$users->name}}</a></h5>
											@endif
											@endforeach
									
									<ul class="nav align-items-center small">
										<li class="nav-item me-3">{{$foros->created_at->toFormattedDateString()}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Detail -->
						<div class="col-md-6 col-lg-4">
							<p>{{$foros->content}}</p>
						</div>
						<!-- Image -->
						<div class="col-md-6 col-lg-3">
							<img class="rounded-3" src="{{asset('storage/'.$foros->image)}}" alt="Card image">
						</div>
					</div>
				</div>
				@endforeach
				<!-- Card item END -->
				
     </div>
     </div>
</div>
     </div>

	 @if ($post !='[]')
      <!-- =======================
contenedor -->
<center><h2>Post</h2></center>
<<div class="row">  
<div class="card border rounded-3 up-hover p-4 mb-4">
<div class="row g-3">
<div class="contenedorscroll">
<!-- =======================
contenedor -->      
@foreach ($post as $posts)
				<!-- Card item START -->
				<div class="card border rounded-3 up-hover p-4 mb-4">
					<div class="row g-3">
						<div class="col-lg-5">
							<!-- Categories -->
							<a href="" class="badge bg-primary mb-2"></i>Noticia</a>
							<!-- Title -->
							<h2 class="card-title">
								<a href="" class="btn-link text-reset stretched-link">{{$posts->title}}</a>
							</h2>
							<!-- Author info -->
							<div class="d-flex align-items-center position-relative mt-3">
								<div class="avatar me-2">
									@foreach ($profile as $profiles)
											@if ($profiles->user_id == $posts->user_id)

											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{asset('storage/'.$profiles->profilephoto)}}" alt="avatar">
											</div>
												
											@endif
											@endforeach
								</div>
								<div>
									@foreach ($user as $users)
											@if ($users->id == $posts->user_id)
											<h5 class="mb-1">by<a href="{{url('users/'.$users->id)}}" class="stretched-link text-reset btn-link">{{$users->name}}</a></h5>
											@endif
											@endforeach
									
									<ul class="nav align-items-center small">
										<li class="nav-item me-3">{{$posts->created_at->toFormattedDateString()}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Detail -->
						<div class="col-md-6 col-lg-4">
							<p>{{$posts->content}}</p>
						</div>
						<!-- Image -->
						<div class="col-md-6 col-lg-3">
							<img class="rounded-3" src="{{asset('storage/'.$posts->image)}}" alt="Card image">
						</div>
					</div>
				</div>
				@endforeach
				@else
					
				@endif
				
					
				

				
				
				<!-- Card item END -->
				
     </div>
     </div>
</div>
     </div>
  <!-- =======================
contenedor -->
<center><h2>Discusiones</h2></center>
<<div class="row">  
<div class="card border rounded-3 up-hover p-4 mb-4">
<div class="row g-3">
<div class="contenedorscroll">
<!-- =======================
contenedor -->      
@foreach ($discucion as $discuciones)
	

				<!-- Card item START -->
				<div class="card border rounded-3 up-hover p-4 mb-4">
					<div class="row g-3">
						<div class="col-lg-5">
							<!-- Categories -->
							<a href="" class="badge bg-primary mb-2"></i>Noticia</a>
							<!-- Title -->
							<h2 class="card-title">
								<a href="" class="btn-link text-reset stretched-link">{{$discuciones->title}}</a>
							</h2>
							<!-- Author info -->
							<div class="d-flex align-items-center position-relative mt-3">
								<div class="avatar me-2">
									@foreach ($profile as $profiles)
											@if ($profiles->user_id == $discuciones->user_id)

											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{asset('storage/'.$profiles->profilephoto)}}" alt="avatar">
											</div>
												
											@endif
											@endforeach
								</div>
								<div>
									@foreach ($user as $users)
											@if ($users->id == $discuciones->user_id)
											<h5 class="mb-1">by<a href="{{url('users/'.$users->id)}}" class="stretched-link text-reset btn-link">{{$users->name}}</a></h5>
											@endif
											@endforeach
									
									<ul class="nav align-items-center small">
										<li class="nav-item me-3">{{$discuciones->created_at->toFormattedDateString()}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Detail -->
						<div class="col-md-6 col-lg-4">
							<p>{{$discuciones->content}}</p>
						</div>
						<!-- Image -->
						<div class="col-md-6 col-lg-3">
							<img class="rounded-3" src="{{asset('storage/'.$discuciones->image)}}" alt="Card image">
						</div>
					</div>
				</div>
				<!-- Card item END -->
				@endforeach
				
     </div>
     </div>
</div>
     </div>				
   
</section>
<!-- =======================
Main content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->


<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="img/Busqueda_files/bootstrap.bundle.min.js.descarga"></script>

<!-- Template Functions -->
<script src="img/Busqueda_files/functions.js.descarga"></script>






@endsection