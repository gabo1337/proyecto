<!DOCTYPE html>

<html lang="en" class="js-focus-visible" data-js-focus-visible=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<!-- Meta Tags -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://blogzine.webestica.com/assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="img/foroedit_files/css2" rel="stylesheet">

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
<section class="bg-dark-overlay-4" style="background-image:url({{ asset('storage/'.$discucion->image) }}); background-position: center left; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 py-md-5 my-lg-5">
        <a class="badge bg-warning mb-2" href="{{url('forounico/' . $discucion->forum)}}"><i class="fas fa-circle me-2 small fw-bold"></i>{{$discucion->forum->name}}</a>
        <a class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Foro</a>
				<h1 class="text-white">{{$discucion->title}}</h1>
        <p class="lead text-white">{{$discucion->content}}</p>
        <!-- Info -->
        <ul class="nav nav-divider text-white-force align-items-center">
          <li class="nav-item">
            <div class="nav-link">
              <div class="d-flex align-items-center text-white position-relative">
                <div class="avatar avatar-sm">
                  <img class="avatar-img rounded-circle" src="{{asset('storage/'.$discucion->user->profile[0]->profilephoto)}}" alt="avatar">
                </div>
                <span class="ms-3">by <a href="{{ url('users/'. $discucion->user->id) }}" class="stretched-link text-reset btn-link">{{$discucion->user->name}}</a></span>
              </div>
            </div>
          </li>
          <li class="nav-item">{{$discucion->created_at->toFormattedDateString()}}</li>
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


<section>
	
	<div class="container position-relative" data-sticky-container="">
		<div class="row">
			<!-- Main Content START -->
			<div class="col-lg-12 mb-5">
			
      			

					<div class="container position-relative" data-sticky-container>
						<div class="row">
							<!-- Main Content START -->
							<div class="col-lg-9 mb-5">
								<!-- Comments START -->
								<div class="mt-5">
									<h3>{{$discucion->comments->count()}} comentarios</h3>
									<!-- Comment level 1-->
									@foreach ($discucion->comments as $comment)
									<div class="my-4 d-flex">
									  <img class="avatar avatar-md rounded-circle float-start me-3" src="{{asset('storage/'.$comment->user->profile[0]->profilephoto)}}" alt="avatar">
									  <div>
										<div class="mb-2">
											<h5 class="m-0">{{$comment->user->name}}</h5>
											<span class="me-3 small">{{$comment->created_at}}</span>
										</div>
										<p>{{$comment->content}}</p>
									  </div>
									</div>	
									@endforeach
									
	
								<!-- Comments END -->
								<!-- Reply START -->
								@auth
									<form 
										action="{{url('/comments/discucion?id=' . $discucion->id)}}"
										method="post"
										enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label class="col-md-8 col-form-label" for="content">
											{{__('Comment')}}
											</label>
											<div class="col-md-8">
											<div class="form-floating">
												<textarea 
													name="content" 
													id="content" 
													cols="30" 
													rows="10"
													class="form-control @error('content') is-invalid @enderror">

													{{old('content')}}
												@error('content')
													<span class="invalid-feedback">
														<strong>{{$message}}</strong>
													</span>    
												@enderror
												</textarea>
												<label for="floatingTextarea2">Comentario</label>
											</div>                                
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-8">
												<button class="btn btn-primary">
													{{__('Create')}}
												</button>
											</div>
										</div>
									</form>
								@else
								<div class="alert alert-secondary" role="alert">
									<p>
										Si deseas comentar 
										<a href="{{url('/login')}}">
											Inicia sesion
										</a>
										o
										<a href="{{url('/register')}}">
											Registrarte
										</a>
									</p>
								</div>
								@endauth









							</div>
							<div class="col-lg-3">
								<div data-sticky data-margin-top="80" data-sticky-for="991">
							  <!-- Most read -->
									<!-- Advertisement -->
									<div class="mt-4">
										<a href="#" class="d-block card-img-flash">
											<img src="assets/images/adv.png" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>