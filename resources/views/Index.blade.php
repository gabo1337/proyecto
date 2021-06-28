@extends("layouts.paginas")

@section("pagina")
<section class="pt-4 pb-0 card-grid">
	<div class="container">
		<h1>Novedades</h1>
		<div class="row g-4">
			<!-- Noticia grande izquierda -->
			<div class="col-lg-6">
				
				<div class="card card-overlay-bottom card-grid-lg card-bg-scale" style="background-image:url({{asset('storage/'.$noticia[0]->image)}}); background-position: center left; background-size: cover;">
					<!-- Card featured -->
					<span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
					<!-- Card Image overlay -->
					<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
						<div class="w-100 mt-auto">
							
							<!-- Card category -->
							<a href="" class="badge bg-info mb-2"></i>PlayStation</a>
							<!-- Card title -->
							<h2 class="text-white h1"><a href="{{url('noticiaUnica/'.$noticia[0]->id)}}" class="btn-link stretched-link text-reset">{{$noticia[0]->title}}</a></h2>
							<p class="text-white">{{$noticia[0]->content}}</p>
							<!-- Card info -->
							<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
							<li class="nav-item">
								<div class="nav-link">
									<div class="d-flex align-items-center text-white position-relative">
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" src="img/logo3.jpg" alt="avatar">
										</div>
										<span class="ms-3">de <a href="" class="stretched-link text-reset btn-link">PostMyGames</a></span>
									</div>
								</div>
							</li>
							<li class="nav-item">{{$noticia[0]->created_at->toFormattedDateString()}}</li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>

			<!-- Noticias Izquierda -->
			<div class="col-lg-6">
				<div class="row g-4">
					<!-- Noticia de inicio derecho -->
					<div class="col-12">
						<div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url({{asset('storage/'.$noticia[1]->image)}}); background-position: center left; background-size: cover;">
							<!-- Card Image -->
							<!-- Card Image overlay -->
							<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="" class="badge bg-success mb-2"></i>XBOX</a>
									<!-- Card title -->
									<h4 class="text-white"><a href="{{url('noticiaUnica/'.$noticia[1]->id)}}" class="btn-link stretched-link text-reset">{{$noticia[1]->title}}</a></h4>
									<!-- Card info -->
									<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
										<li class="nav-item position-relative">
											<div class="nav-link">de <a href="" class="stretched-link text-reset btn-link">PostMyGames</a>
											</div>
										</li>
										<li class="nav-item">{{$noticia[1]->created_at->toFormattedDateString()}}</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-md-6">
						<div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url({{asset('storage/'.$noticia[2]->image)}}); background-position: center left; background-size: cover;">
							<!-- Card Image overlay -->
							<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="" class="badge bg-danger mb-2"></i>Nintendo</a>
									<!-- Card title -->
									<h4 class="text-white"><a href="{{url('noticiaUnica/'.$noticia[2]->id)}}" class="btn-link stretched-link text-reset">{{$noticia[2]->title}}</a></h4>
									<!-- Card info -->
									<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
										<li class="nav-item position-relative">
											<div class="nav-link">de <a href="" class="stretched-link text-reset btn-link">PostMyGames</a>
												</div>
										</li>
										<li class="nav-item">{{$noticia[2]->created_at->toFormattedDateString()}}</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-md-6">
						<div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url({{asset('storage/'.$noticia[3]->image)}}); background-position: center left; background-size: cover;">
							<!-- Card Image overlay -->
							<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="" class="badge bg-warning mb-2"></i>Windows</a>
									<!-- Card title -->
									<h4 class="text-white"><a href="{{url('noticiaUnica/'.$noticia[3]->id)}}" class="btn-link stretched-link text-reset">{{$noticia[3]->title}}</a></h4>
									<!-- Card info -->
									<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
										<li class="nav-item position-relative">
											<div class="nav-link">de <a href="" class="stretched-link text-reset btn-link">PostMyGames</a>
											</div>
										</li>
										<li class="nav-item">{{$noticia[3]->created_at->toFormattedDateString()}}</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
				</div>
			</div>
		</div>
	</div>
</section>


@endsection