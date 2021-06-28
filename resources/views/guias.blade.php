@extends("layouts.paginas")

@section("pagina")
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-12">
        <div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-300 text-center" style="background-image:url('img/Index_files/XBOX.jpg'); background-position: center left; background-size: cover;">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
            <div class="w-100 my-auto">
							<div class="text-white mb-3">
								<h2 class="text-white display-5">Las mejores guias de videojuegos</h2>
							</div>
          	</div>
        </div>
      </div>
    </div>
	</div>
</section>

<!-- =======================
Main content START -->
<section class="position-relative pt-0">
	<div class="container" data-sticky-container>
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9">
				<div class="row gy-4">
					@foreach ($guia as $guias)
					<!-- Card item START -->
					<div class="col-sm-6">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="{{asset('storage/'.$guias->image)}}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="{{url('guiaUnica/'.$guias->id)}}" class="btn-link text-reset fw-bold">{{$guias->title}}</a></h4>
								<p class="card-text">{{$guias->content}}</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												@foreach ($profile as $profiles)
											@if ($profiles->user_id == $guias->user_id)

											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{asset('storage/'.$profiles->profilephoto)}}" alt="avatar">
											</div>
												
											@endif
											@endforeach


											@foreach ($user as $users)
											@if ($users->id == $guias->user_id)
											<span class="ms-3">by <a href="{{url('users/'.$users->id)}}" class="stretched-link text-reset btn-link" >{{$users->name}}</a></span>
											@endif
											@endforeach
											</div>
										</div>
									</li>
									<li class="nav-item">{{$guias->created_at->toFormattedDateString()}}</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					@endforeach
					{{$guia->links()}}

					<!-- Pagination END -->
				</div>
			</div>
			<!-- Main Post END -->

			<!-- Sidebar START -->
			<div class="col-lg-3 mt-5 mt-lg-0">
				<div data-sticky data-margin-top="80" data-sticky-for="767">
					<!-- Categories -->
					<div class="row g-2">
						<h5>Anuncios</h5>
						<a href="https://i.ytimg.com/vi/6Cck4GIQWIE/maxresdefault.jpg">
							<img src="img/Captura.PNG" alt="">
						</a>
					</div>
					<div data-sticky data-margin-top="80" data-sticky-for="767">
						
				</div>
			</div>
			<!-- Sidebar END -->
		</div> <!-- Row end -->
	</div>
</section>
</main>
</body>
</html>
@endsection