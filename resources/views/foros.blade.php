@extends("layouts.paginas")

@section("pagina")



<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-12">
        <div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-300 text-center" style="background-image:url('img/Index_files/XBOX.jpg'); background-position: center left; background-size: cover;">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
            <div class="w-100 my-auto">
							<div class="text-white mb-3">
								<h2 class="text-white display-5">Bienvenido a la seccion de foros</h2>
							</div>
          	</div>
        </div>
      </div>
    </div>
	</div>
</section>
	
		
	
	<div class="container" data-sticky-container="">
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-12">
				<!-- Card item START -->
				<div class="card mb-4">
					@foreach ($forum as $forums)
					
						
					

					
					<div class="row">
						<div class="col-md-5">
							<img class="rounded-3" src="{{Storage::url($forums->image)}}" alt="">
						</div>
						<div class="col-md-7 mt-3 mt-md-0">
							<a class="badge bg-danger mb-2" ><i class="fas fa-circle me-2 small fw-bold"></i>Foros</a>
							<h3><a class="btn-link stretched-link text-reset" href="{{url('forounico/'.$forums->id)}}">	{{$forums->title}}</a></h3>
						    
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
											<span class="ms-3">by <a href="{{url('users/'.$users->id)}}" class="stretched-link text-reset btn-link" >{{$users->name}}</a></span>
											@endif
											@endforeach
										</div>
									</div>
								</li>
								
								<li class="nav-item">{{$forums->created_at->toFormattedDateString()}}</li>
							</ul>
							
						</div>
						@auth
							@if (auth()->user()->Rol == 'admin')
							@csrf
							<form action="{{url('root/'.$forums->id)}}" method="post" enctype="multipart/form-data">
								@csrf
							<button type="submit" class="btn btn-dark" style="float: right"> eliminar</button>
							</form>

							@endif
							@if (auth()->user()->id == $forums->user_id )
							@csrf
							<form action="{{url('root/'.$forums->id)}}" method="post" enctype="multipart/form-data">
								@csrf
							<button type="submit" class="btn btn-dark" style="float: right"> eliminar</button>
						    </form>
							@endif
							@endauth
						
						
					</div>
					
					<br>
					
					@endforeach
					{{$forum->links()}}
				</div>
			</div>
		
			</div>
		</div> 
	</div>
</section>
@endsection