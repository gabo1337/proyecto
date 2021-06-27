@extends("layouts.paginas")

@section("pagina")

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="portfolio">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>home page 2</title>
    <link rel="stylesheet" href="{{asset('css/nice.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('css/home2.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 3.18.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <style>.u-section-1 {
        background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{asset('storage/'.$forums->icon)}}");
        background-position: 50% 50%;
      }
      .pagina {
    color: #111111;
    background-size: cover;
    background-image: url("{{asset('storage/'.$forums->image)}}");
}
      
      
      </style>
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#1f203a">
    <meta property="og:title" content="home page 2">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" data-image-width="1280" data-image-height="865" id="sec-3624">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-border-5 u-border-white u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-align-center u-text u-text-1">{{$forums->title}}</h2>
            <p class="u-align-center u-text u-text-2">{{$forums->content}}</p>
            
          </div>
        </div>
      </div>
    </section>
    
    <section class="position-relative pt-0 pagina">
        
        <div class="container" data-sticky-container>
            <div style="background-color: #fff ; padding:0px 50px">
            <h1 style="margin: 0px">noticias</h1>
            
                
                <!-- Main Post START -->
                <div class="col-lg-12 " >
                    <div class="row gy-4">
                        <br>
                        @forelse ($forums->news as $new)
                        <!-- Card item START -->
                        <div class="col-sm-6" style="margin-top: 20px">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{asset('storage/'.$new->image)}}" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single-2.html" class="btn-link text-reset fw-bold">{{$new->title}}</a></h4>
                                    <p class="card-text">{{$new->content}}</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="./img/usuario_Guias_1.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{$new->user->name}}</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Jun 17, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <!-- Card item END -->
                        
    <!-- Card item END -->
    
                   
    @empty
    @endforelse
</div>
</section>
<section class="position-relative pt-0 pagina">
        
    <div class="container" data-sticky-container>
        <div style="background-color: #fff ; padding:0px 50px">
            <br>
        <h1 style="margin: 0px">posts</h1>
        
            
            <!-- Main Post START -->
            <div class="col-lg-12 " >
                <div class="row gy-4">
                    <br>
                    @forelse ($forums->posts as $post)
                    <!-- Card item START -->
                    <div class="col-sm-6" style="margin-top: 20px">
                        <div class="card">
                            <!-- Card img -->
                            <div class="position-relative">
                                <img class="card-img" src="{{asset('storage/'.$post->image)}}" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3">
                                <h4 class="card-title"><a href="post-single-2.html" class="btn-link text-reset fw-bold">{{$post->title}}</a></h4>
                                <p class="card-text">{{$post->content}}</p>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="./img/usuario_Guias_1.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jun 17, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <!-- Card item END -->
                    
<!-- Card item END -->

               
@empty
@endforelse
</div>
</section>

<section class="position-relative pt-0 pagina">
        
    <div class="container" data-sticky-container>
        <div style="background-color: #fff ; padding:0px 50px">
            <br>
        <h1 style="margin: 0px">guias</h1>
        
            
            <!-- Main Post START -->
            <div class="col-lg-12 " >
                <div class="row gy-4">
                    <br>
                    @forelse ($forums->guides as $guide)
                    <!-- Card item START -->
                    <div class="col-sm-6" style="margin-top: 20px">
                        <div class="card">
                            <!-- Card img -->
                            <div class="position-relative">
                                <img class="card-img" src="{{asset('storage/'.$guide->image)}}" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3">
                                <h4 class="card-title"><a href="post-single-2.html" class="btn-link text-reset fw-bold">{{$guide->title}}</a></h4>
                                <p class="card-text">{{$guide->content}}</p>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="./img/usuario_Guias_1.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{$guide->user->name}}</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jun 17, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <!-- Card item END -->
                    
<!-- Card item END -->

               
@empty
@endforelse
</div>
</section>


<section class="position-relative pt-0 pagina">
        
    <div class="container" data-sticky-container>
        <div style="background-color: #fff ; padding:0px 50px">
            <br>
        <h1 style="margin: 0px">Discuciones</h1>
        
            
            <!-- Main Post START -->
            <div class="col-lg-12 " >
                <div class="row gy-4">
                    <br>
                    @forelse ($forums->discussions as $discussion)
                    <!-- Card item START -->
                    <div class="col-sm-6" style="margin-top: 20px">
                        <div class="card">
                            <!-- Card img -->
                            <div class="position-relative">
                                <img class="card-img" src="{{asset('storage/'.$discussion->image)}}" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3">
                                <h4 class="card-title"><a href="post-single-2.html" class="btn-link text-reset fw-bold">{{$discussion->title}}</a></h4>
                                <p class="card-text">{{$discussion->content}}</p>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="./img/usuario_Guias_1.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{$discussion->user->name}}</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jun 17, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <!-- Card item END -->
                    
<!-- Card item END -->

               
@empty
@endforelse
</div>
</section>
  </body>
</html>

@endsection