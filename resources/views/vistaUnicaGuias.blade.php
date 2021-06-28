@extends("layouts.paginas")
@section("pagina")
<!DOCTYPE html>

<html lang="en" class="js-focus-visible" data-js-focus-visible=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta Tags -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

	

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="{{ asset('img/foroedit_files/css2') }}" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('img/foroedit_files/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('img/foroedit_files/bootstrap-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('img/foroedit_files/tiny-slider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('img/foroedit_files/glightbox.css') }}">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<style></style><style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
}</style></head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->

<section class="bg-dark-overlay-4" style="background-image:url({{ asset('storage/'.$guia->image) }}); background-position: center left; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 py-md-5 my-lg-5">
        <a class="badge bg-warning mb-2" href="{{url('forounico/' . $guia->forum->id)}}"><i class="fas fa-circle me-2 small fw-bold"></i>{{$guia->forum->title}}</a>
        <a class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Foro</a>
				<h1 class="text-white">{{$guia->title}}</h1>
        <p class="lead text-white"></p>
        <!-- Info -->
        <ul class="nav nav-divider text-white-force align-items-center">
          <li class="nav-item">
            <div class="nav-link">
              <div class="d-flex align-items-center text-white position-relative">
                <div class="avatar avatar-sm">
                  <img class="avatar-img rounded-circle" src="{{asset('storage/'.$guia->user->profile[0]->profilephoto)}}" alt="avatar">
                </div>
                <span class="ms-3">by <a href="{{ url('users/'. $guia->user->id) }}" class="stretched-link text-reset btn-link">{{$guia->user->name}}</a></span>
              </div>
            </div>
          </li>
          <li class="nav-item">{{$guia->created_at->toFormattedDateString()}}</li>
        </ul>

		

		
        
      </div>
    	</div>

		<div>
		<div class="float-end">
				<a href="{{ url('/') }}" >	
							
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
							</svg>
							<button type="button" class="btn btn-primary-outline" style="color: #fff !important">Menu principal</button>
				</a>
		</div>

		<div class="float-none">
			<a href="{{ url('/foros/') }}" >	
						
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
						</svg>
						<button type="button" class="btn btn-primary-outline" style="color: #fff !important">Anterior</button>
			</a>
		</div>
		</div>

	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main START -->
<section>
	<div class="container position-relative" data-sticky-container="">
		<div class="row">
			<!-- Main Content START -->
			<div class="col-lg-12 mb-5">
      			<p>{{$guia->content}}</p>

				<!-- Divider -->
				<div class="text-center h5 mb-4">. . .</div>

				<!-- Images -->
				
			
		</div>
	</div>
</section>

</main>
</body><loom-container id="lo-engage-ext-container"><div></div><loom-shadow classname="resolved"></loom-shadow></loom-container></html>
@endsection