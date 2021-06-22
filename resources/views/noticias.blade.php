@extends("layouts.paginas")

@section("pagina")
<header class="navbar-light navbar-sticky header-static">

</header><div id="sticky-space" class="" style="height: 0px;"></div>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section class="pt-4">
    <div class="container">
        <div class="row">
      <div class="col-12">
                <div class="border p-2 text-center rounded-3">
                    <h1>Bienvenido a la seccion Noticias</h1>
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
<!-- =======================
Inner intro END -->

<!-- =======================
Main content START -->

	

<section class="position-relative pt-0">
	<div class="container">
		@foreach ($new as $news)
		<div class="row">
			<!-- Main Post START -->
			<div class="col-12">
				<!-- Card item START -->
				<div class="card border rounded-3 up-hover p-4 mb-4">
					<div class="row g-3">
						<div class="col-lg-5">
							<!-- Categories -->
							<a href="" class="badge bg-primary mb-2"></i>PlayStation</a>
							<!-- Title -->
							<h2 class="card-title">
								<a href="" class="btn-link text-reset stretched-link">{{$news->title}}</a>
							</h2>
							<!-- Author info -->
							<div class="d-flex align-items-center position-relative mt-3">
								<div class="avatar me-2">
									<img class="avatar-img rounded-circle" src="img/logo3.jpg" alt="avatar">
								</div>
								<div>
									<h5 class="mb-1"><a href="" class="stretched-link text-reset btn-link">PostMyGames</a></h5>
									<ul class="nav align-items-center small">
										<li class="nav-item me-3">{{$news->created_at->toFormattedDateString()}}</li>
										<li class="nav-item"></i>Hace 5 min</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Detail -->
						<div class="col-md-6 col-lg-4">
							<p>{{$news->content}}</p>
						</div>
						<!-- Image -->
						<div class="col-md-6 col-lg-3">
							<img class="rounded-3" src="{{asset('storage/'.$news->image)}}" alt="Card image">
						</div>
					</div>
				</div>
				@endforeach
				<!-- Card item END -->
				<!-- Card item START -->
				
				<!-- Card item START -->
				
			<!-- Main Post END -->
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->

<!-- Bootstrap JS -->
<script src="./Noticias_files/bootstrap.bundle.min.js.descarga"></script>

<!-- Template Functions -->
<script src="./Noticias_files/functions.js.descarga"></script>
@endsection