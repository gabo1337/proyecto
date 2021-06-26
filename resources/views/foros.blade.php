@extends("layouts.paginas")

@section("pagina")



<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-12">
				<div class="border p-2 text-center rounded-3">
					<h1>Bienvenido a la seccion Foros</h1>
					<nav class="d-flex justify-content-center" aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-dots m-0">
							<li class="breadcrumb-item active">Foros</li>
						</ol>
					</nav>
				</div>
      </div>
    </div>
	</div>
</section>

<section class="position-relative pt-0">
	
		
	
	<div class="container" data-sticky-container="">
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9">
				<!-- Card item START -->
				<div class="card mb-4">
					@foreach ($forum as $forums)
					
						
					

					
					<div class="row">
						<div class="col-md-5">
							<img class="rounded-3" src="{{Storage::url($forums->image)}}" alt="">
						</div>
						<div class="col-md-7 mt-3 mt-md-0">
							<a class="badge bg-danger mb-2" ><i class="fas fa-circle me-2 small fw-bold"></i>Foros</a>
							<h3><a class="btn-link stretched-link text-reset" href="{{url('probar/'.$forums->id)}}">	{{$forums->title}}</a></h3>
						    
							<p>{{$forums->content}}</p>
							<!-- Card info -->
							
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										
										<div class="d-flex align-items-center position-relative">
											@foreach ($profile as $profiles)
											@if ($profiles->user_id == $forums->user_id)

											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{asset('storage/'.$profiles->profilephoto)}}" alt="avatar">
											</div>
												
											@endif
											@endforeach


											@foreach ($user as $users)
											@if ($users->id == $forums->user_id)
											<span class="ms-3">by <a class="stretched-link text-reset btn-link" >{{$users->name}}</a></span>
											@endif
											@endforeach
										</div>
									</div>
								</li>
								<li class="nav-item">{{$forums->created_at->toFormattedDateString()}}</li>
							</ul>
						</div>
					</div><br>
					
					@endforeach
					{{$forum->links()}}
				</div>
				<!-- Card item END -->
				<!-- Card item START -->
				
				<!-- Card item END -->
				<!-- Card item START -->
				
				<!-- Card item END -->
				<!-- Card item START -->
				
				<!-- Card item END -->
				<!-- Card item START -->
				
				<!-- Card item END -->
				<!-- Pagination START -->
				
				<!-- Pagination END -->
			</div>
			<!-- Main Post END -->

            <!-- Sidebar START -->
			<div class="col-lg-3 mt-5 mt-lg-0">
				<div data-sticky="" data-margin-top="80" data-sticky-for="767" style="">
					<!-- Trending topics widget START -->
					<div>
						<h4 class="mb-1">Menu</h4>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(img/POST_files/01.jpg); background-position: center left; background-size: cover;">
							<div class="bg-dark-overlay-4 p-3">
								<a class="stretched-link btn-link fw-bold text-white h5">Sistemas</a>
							</div>
						</div>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(img/POST_files/02.jpg); background-position: center left; background-size: cover;">
							<div class="bg-dark-overlay-4 p-3">
								<a class="stretched-link btn-link fw-bold text-white h5">Informatica</a>
							</div>
						</div>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(img/POST_files/03.jpg); background-position: center left; background-size: cover;">
							<div class="bg-dark-overlay-4 p-3">
								<a class="stretched-link btn-link fw-bold text-white h5">Videojuegos</a>
							</div>
						</div>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(img/POST_files/04.jpg); background-position: center left; background-size: cover;">
							<div class="bg-dark-overlay-4 p-3">
								<a class="stretched-link btn-link fw-bold text-white h5">Tendencias</a>
							</div>
						</div>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(img/POST_files/05.jpg); background-position: center left; background-size: cover;">
							<div class="bg-dark-overlay-4 p-3">
								<a class="stretched-link btn-link fw-bold text-white h5">Soporte</a>
							</div>
						</div>
						<!-- View All Category button -->
						<div class="text-center mt-3">
							<a class="fw-bold text-muted text-primary-hover"><u>Mas categorias</u></a>
						</div>
					</div>
					<!-- Trending topics widget END -->			
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>
@endsection