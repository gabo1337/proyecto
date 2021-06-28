@extends("layouts.paginas")
@section("pagina")

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

    <!-- Theme CSS -->
<link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('img/Busqueda_files/style.css') }}">

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



<section class="bg-dark-overlay-4" style="background-image:url({{Storage::url($forums->image)}}); background-position: center left; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 py-md-5 my-lg-5">
				<h1 class="text-white">{{$forums->title}}</h1>
        <p class="lead text-white">{{$forums->content}}</p>
        <!-- Info -->
        <ul class="nav nav-divider text-white-force align-items-center">
          <li class="nav-item">
            <div class="nav-link">
              <div class="d-flex align-items-center text-white position-relative">
                <div class="avatar avatar-sm">
                  <img class="avatar-img rounded-circle" src="{{asset('storage/'.$forums->user->profile[0]->profilephoto)}}" alt="avatar">
                </div>
                <span class="ms-3">by <a href="{{ url('users/'. $forums->user->id) }}" class="stretched-link text-reset btn-link">Creador: {{$forums->user->name}}</a></span>
              </div>
            </div>
          </li>
          <li class="nav-item">{{$forums->created_at->toFormattedDateString()}}</li>
          <li class="nav-item"><i class="far fa-eye me-1"></i>{{$forums->views}}</li>
           </ul>

      </div>
    	</div>

		<div>

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
</div>
</div>
<!-- =======================
Inner intro END -->



<!-- =======================
Main START -->
<section>
	<div class="container position-relative" data-sticky-container="">
		<div class="row">
			<!-- Main Content START -->
			<div class="col-lg-12 mb-5">
      	<p><span class="dropcap"></span>{{$forums->content}}</p>
				
				<!-- Divider -->
				<div class="text-center h5 mb-4">. . .</div>

				<!-- Images -->
				
          <div class="col-12">
            <!-- Image -->
            
			
				<!-- RELACION A MAS POSTS -->

				<section class="position-relative">
					<div class="container" data-sticky-container="">
						<div class="row">
							<!-- Main Post START -->
							<div class="col-lg-12">
								<!-- Title -->
								<div class="mb-4">
									<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Noticias
                                        @auth
                    
                
                                        @if (auth()->user()->Rol == 'admin')
                                        
                                        <a href="#editEmployeeModal" class="btn btn-primary btn-lg" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">Nuevo</i></a>
                                        @endif
                                        @endauth
                                    </h2>
									<p>Las mejores noticias</p>
								</div>
                                <!-- =======================
contenedor -->
<center><h2>Noticias</h2></center>

<div class="card ">

<div class="contenedorscroll">
<!-- =======================
contenedor -->   
								<div class="row gy-4">
 
									<!-- Card item START -->
                                    @forelse ($forums->news as $new)
									<div class="col-sm-6">
										<div class="card">
											<!-- Card img -->
											<div class="position-relative">
												<img class="card-img" src="{{asset('storage/'.$new->image)}}" alt="Card image">
												<div class="card-img-overlay d-flex align-items-start flex-column p-3">
													<!-- Card overlay bottom -->
													<div class="w-100 mt-auto">
														<!-- Card category -->
														<a href="" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
													</div>
												</div>
											</div>
											<div class="card-body px-0 pt-3">
												<h4 class="card-title"><a href="{{url('noticiaUnica/'.$new->id)}}" class="btn-link text-reset fw-bold">{{$new->title}}</a></h4>
												<p class="card-text">{{$new->content}}</p>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
													<li class="nav-item">
														<div class="nav-link">
															<div class="d-flex align-items-center position-relative">
																<div class="avatar avatar-xs">
																	<img class="avatar-img rounded-circle" src="{{asset('storage/'.$new->user->profile[0]->profilephoto)}}" alt="avatar">
																</div>
																<span class="ms-3">by <a href="{{url('users/'.$new->user->id)}}" class="stretched-link text-reset btn-link">{{$new->user->name}}</a></span>
															</div>
														</div>
													</li>
													<li class="nav-item">{{$new->created_at->toFormattedDateString()}}</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
                                    @empty
									@endforelse
									
								</div>
							</div>
							<!-- Main Post END -->
    </div>
    </div>
						</div> <!-- Row end -->
					</div>
				</section>

                <section>
                    <!-- Edit Modal HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal HTML -->
                    <div id="editEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{url('noticias/store?id=' . $forums->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Crear Noticia</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                    
                                    <div class="modal-body">
                                    <div class="form-group">
                                        <label>titulo</label>
                                        <input class="form-control" id="title" name="title" required>
                                </div>			
                                        <div class="form-group">
                                            
                              </div>
                                        <div class="form-group">
                                            <label>Foto Portada</label>
                                <div class="form-group">
                                  <div class="col-sm-12">
                                      <div class="custom-file">
                                          <input type="file" id="image" name="image" class="custom-file-input{{$errors->has('image2') ? ' is-invalid':''}}">
                                          <label for="customFile" class="custom-file-label">{{__('choose image')}}</label>
                    
                                           @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$errors->first('image')}}</strong>
                                            </span>
                                           @endif
                                      </div>
                    
                                  </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Contenido</label>
                                            <textarea class="form-control" id="content" name="content" required></textarea>				
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-info" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    </section>


















				
				<!-- RELACION A MAS GUIAS -->

				<section class="position-relative">
					<div class="container" data-sticky-container="">
						<div class="row">
							<!-- Main Post START -->
							<div class="col-lg-12">
								<!-- Title -->
								<div class="mb-4">
									<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Posts<a href="#post" class="btn btn-primary btn-lg" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="agregar">Nuevo</i></a></h2>
									<p>Foros dedicados al gaming pa pa </p>
								</div>
                              
         <!-- =======================
contenedor -->
<div class="card ">

<div class="contenedorscroll">
<!-- =======================
contenedor --> 
								<div class="row gy-4">
									<!-- Card item START -->
                                    @forelse ($forums->posts as $post)
									<div class="col-sm-6">
										<div class="card">
											<!-- Card img -->
											<div class="position-relative">
												<img class="card-img" src="{{asset('storage/'.$post->image)}}" alt="Card image">
												<div class="card-img-overlay d-flex align-items-start flex-column p-3">
													<!-- Card overlay bottom -->
													<div class="w-100 mt-auto">
														<!-- Card category -->
													</div>
												</div>
											</div>
											<div class="card-body px-0 pt-3">
												<h4 class="card-title"><a href="{{url('postUnica/'.$post->id)}}" class="btn-link text-reset fw-bold">{{$post->title}}</a></h4>
												<p class="card-text">{{$post->content}}</p>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
													<li class="nav-item">
														<div class="nav-link">
															<div class="d-flex align-items-center position-relative">
																<div class="avatar avatar-xs">
																	<img class="avatar-img rounded-circle" src="{{asset('storage/'.$post->user->profile[0]->profilephoto)}}" alt="avatar">
																</div>
																<span class="ms-3">by <a href="{{url('users/'.$post->user->id)}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
															</div>
														</div>
													</li>
													<li class="nav-item">{{$post->created_at->toFormattedDateString()}}</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									
									@empty
                                    @endforelse
									
									
                                
</div>
</div>									
								</div>
							</div>
							<!-- Main Post END -->
							
						</div> <!-- Row end -->
					</div>
				</section>
</div>
</div>





                <section>

                    <!-- Edit Modal HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal HTML -->
                    <div id="post" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{url('posts/store?id=' . $forums->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Crear post</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                    
                                    <div class="modal-body">
                                    <div class="form-group">
                                        <label>titulo</label>
                                        <input class="form-control" id="title" name="title" required>
                                </div>			
                                        <div class="form-group">
                                            
                              </div>
                                        <div class="form-group">
                                            <label>Foto Portada</label>
                                <div class="form-group">
                                  <div class="col-sm-12">
                                      <div class="custom-file">
                                          <input type="file" id="image" name="image" class="custom-file-input{{$errors->has('image2') ? ' is-invalid':''}}">
                                          <label for="customFile" class="custom-file-label">{{__('choose image')}}</label>
                    
                                           @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$errors->first('image')}}</strong>
                                            </span>
                                           @endif
                                      </div>
                    
                                  </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Contenido</label>
                                            <textarea class="form-control" id="content" name="content" required></textarea>				
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-info" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    
                    </section>
				



				<!-- RELACION A MAS DISCUSIONES -->

				<section class="position-relative">
					<div class="container" data-sticky-container="">
						<div class="row">
							<!-- Main Post START -->
							<div class="col-lg-12">
								<!-- Title -->
								<div class="mb-4">
									<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Guias<a href="#guias" class="btn btn-primary btn-lg" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">Nuevo</i></a></h2>
									<p>Latest breaking news, pictures, videos, and special reports</p>
								</div>
                              

<div class="card ">

<div class="contenedorscroll">
<!-- =======================
contenedor --> 
								<div class="row gy-4">
                                    @forelse ($forums->guides as $guide)
									<!-- Card item START -->
									<div class="col-sm-6">
										<div class="card">
											<!-- Card img -->
											<div class="position-relative">
												<img class="card-img" src="{{asset('storage/'.$guide->image)}}" alt="Card image">
												<div class="card-img-overlay d-flex align-items-start flex-column p-3">
													<!-- Card overlay bottom -->
													<div class="w-100 mt-auto">
														<!-- Card category -->
														<a href="https://blogzine.webestica.com/#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
													</div>
												</div>
											</div>
											<div class="card-body px-0 pt-3">
												<h4 class="card-title"><a href="{{url('guiaUnica/'.$guide->id)}}" class="btn-link text-reset fw-bold">{{$guide->title}}</a></h4>
												<p class="card-text">{{$guide->content}}</p>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
													<li class="nav-item">
														<div class="nav-link">
															<div class="d-flex align-items-center position-relative">
																<div class="avatar avatar-xs">
																	<img class="avatar-img rounded-circle" src="{{asset('storage/'.$post->user->profile[0]->profilephoto)}}" alt="avatar">
																</div>
																<span class="ms-3">by <a href="{{url('users/'.$guide->user->id)}}" class="stretched-link text-reset btn-link">{{$guide->user->name}}</a></span>
															</div>
														</div>
													</li>
													<li class="nav-item">{{$guide->created_at->toFormattedDateString()}}</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
                                    @empty
                                    @endforelse
									
                                 
</div>
</div>									
								</div>
							</div>
							<!-- Main Post END -->
							
						</div> <!-- Row end -->
					</div>
				</section>
</div>
</div>
                <section>
                    <!-- Edit Modal HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal HTML -->
                    <div id="guias" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{url('guias/store?id=' . $forums->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Crear guias</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                    
                                    <div class="modal-body">
                                    <div class="form-group">
                                        <label>titulo</label>
                                        <input class="form-control" id="title" name="title" required>
                                </div>			
                                        <div class="form-group">
                                            
                              </div>
                                        <div class="form-group">
                                            <label>Foto Portada</label>
                                <div class="form-group">
                                  <div class="col-sm-12">
                                      <div class="custom-file">
                                          <input type="file" id="image" name="image" class="custom-file-input{{$errors->has('image2') ? ' is-invalid':''}}">
                                          <label for="customFile" class="custom-file-label">{{__('choose image')}}</label>
                    
                                           @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$errors->first('image')}}</strong>
                                            </span>
                                           @endif
                                      </div>
                    
                                  </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Contenido</label>
                                            <textarea class="form-control" id="content" name="content" required></textarea>				
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-info" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    </section>















				<!-- RELACION A MAS NOTICIAS -->
				<section class="position-relative">
					<div class="container" data-sticky-container="">
						<div class="row">
							<!-- Main Post START -->
                            
							<div class="col-lg-12">
								<!-- Title -->
								<div class="mb-4">
									<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Discuciones<a href="#Discuciones" class="btn btn-primary btn-lg" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">Nuevo</i></a></h2>
									<p>Latest breaking news, pictures, videos, and special reports</p>
								</div>
                             

<div class="card ">

<div class="contenedorscroll">
<!-- =======================
contenedor --> 
								<div class="row gy-4">
                                    @forelse ($forums->discussions as $discussion)
									<!-- Card item START -->
                                    
									<div class="col-sm-6">
										<div class="card">
											<!-- Card img -->
											<div class="position-relative">
												<img class="card-img" src="{{asset('storage/'.$discussion->image)}}" alt="Card image">
												<div class="card-img-overlay d-flex align-items-start flex-column p-3">
													<!-- Card overlay bottom -->
													<div class="w-100 mt-auto">
														<!-- Card category -->
													</div>
												</div>
											</div>
											<div class="card-body px-0 pt-3">
												<h4 class="card-title"><a href="{{url('discucionUnica/'.$discussion->id)}}" class="btn-link text-reset fw-bold">{{$discussion->title}}</a></h4>
												<p class="card-text">{{$discussion->content}}</p>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
													<li class="nav-item">
														<div class="nav-link">
															<div class="d-flex align-items-center position-relative">
																<div class="avatar avatar-xs">
																	<img class="avatar-img rounded-circle" src="{{asset('storage/'.$discussion->user->profile[0]->profilephoto)}}" alt="avatar">
																</div>
																<span class="ms-3">by <a href="{{url('users/'.$discussion->user->id)}}" class="stretched-link text-reset btn-link">{{$discussion->user->name}}</a></span>
															</div>
														</div>
													</li>
													<li class="nav-item">{{$discussion->created_at->toFormattedDateString()}}</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
                                    @empty
                                    @endforelse
									
									
									
									<!-- Card item END -->
                                  
</div>
</div>									
									
								</div>
							</div>
							<!-- Main Post END -->
							
						</div> <!-- Row end -->
					</div>
				</section>

			</div>
			<!-- Main Content END -->
			
		</div>
	</div>
</section>
</div>
</Div>

<section>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="Discuciones" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('discuciones/store?id=' . $forums->id)}}" method="post" enctype="multipart/form-data">
            @csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Crear discuciones</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
    
                    <div class="modal-body">
                    <div class="form-group">
                        <label>titulo</label>
                        <input class="form-control" id="title" name="title" required>
                </div>			
                        <div class="form-group">
                            
              </div>
                        <div class="form-group">
                            <label>Foto Portada</label>
                <div class="form-group">
                  <div class="col-sm-12">
                      <div class="custom-file">
                          <input type="file" id="image" name="image" class="custom-file-input{{$errors->has('image2') ? ' is-invalid':''}}">
                          <label for="customFile" class="custom-file-label">{{__('choose image')}}</label>
    
                           @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('image')}}</strong>
                            </span>
                           @endif
                      </div>
    
                  </div>
                        </div>
                        <div class="form-group">
                            <label>Contenido</label>
                            <textarea class="form-control" id="content" name="content" required></textarea>				
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-info" >
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    </section>














<!-- =======================
Main END -->

</main>
@endsection