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
    <title>home page 1</title>
    <link rel="stylesheet" href="{{asset('css/nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('css/home-page-1.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 3.18.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
   
   <style>.u-section-1 .u-image-1 {
        min-height: 678px;
        background-image: url("{{asset('storage/'.$user->profile[0]->profilephoto)}}");
        background-position: 50% 50%;
      }
      .u-palette-3-base, .u-body.u-palette-3-base, .u-container-style.u-palette-3-base:before, .u-table-alt-palette-3-base tr:nth-child(even) {
    color: #111111;
    background-color: #50d136;
}

.u-palette-1-dark-2, .u-body.u-palette-1-dark-2, .u-container-style.u-palette-1-dark-2:before, .u-table-alt-palette-1-dark-2 tr:nth-child(even) {
    color: #ffffff;
    background-color: #9b9cb8;
}
</style>
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Untitled-2.png"
}</script>
    <meta name="theme-color" content="#1f203a">
    <meta property="og:title" content="home page 1">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="https://website479142.nicepage.io/home-page-1.html?version=1b888f42-8fc1-430c-b5a9-474964b75eff" data-home-page-title="home page 1" class="u-body"><header class="u-clearfix u-header u-palette-1-base u-header" id="sec-ab9d"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/Untitled-2.png" class="u-logo-image u-logo-image-1" data-image-width="64">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="#">
              <svg><use xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-10 u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base u-text-palette-3-base" href="home-page.html" style="padding: 10px 20px;">home page</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="home-page.html" style="padding: 10px 20px;">home page</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      
          
      
    <section class="u-align-left u-clearfix u-palette-1-base u-valign-top-xl u-section-1" id="carousel_2505">
      <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center-sm u-align-center-xs u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-1">
           
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                  <h1>{{$user->name}}</h1>
                <p class="u-text u-text-palette-1-dark-2 u-text-2">{{$user->profile[0]->description}}</p>
                @if ($user->id ==auth()->user()->id)
                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">editar</i></a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="u-align-center u-clearfix u-palette-1-dark-2 u-section-3" id="sec-4a05">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/logo-mockup-black-facade-sign_145275-281.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/business-cards-mockup_1389-1137.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/3d-logo-mockup_145275-141.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide" data-image-width="1199" data-image-height="800">
                <img class="u-back-image u-expanded" src="images/yh-min.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/rr.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-5">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/black-screen-smartphone-mockup-design_53876-65977.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-6">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/elegant-minimal-black-yellow-business-card-template_1017-22513.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-7">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide" data-image-width="1500" data-image-height="1213">
                <img class="u-back-image u-expanded" src="images/re.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-8">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide" data-image-width="1000" data-image-height="919">
                <img class="u-back-image u-expanded" src="images/a9dcc2d3-077b-4cbf-35f1-05a7ca2b6438.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-9">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
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
			<form action="{{url('/user/editar/'.$user->profile[0]->id)}}" method="post" enctype="multipart/form-data">
        @csrf
				<div class="modal-header">						
					<h4 class="modal-title">Edit User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Foto de perfil</label>
            <div class="form-group">
              <div class="col-sm-12">
                  <div class="custom-file">
                      <input type="file" id="image" name="image" class="custom-file-input{{$errors->has('image') ? ' is-invalid':''}}">
                      <label for="customFile" class="custom-file-label">{{__('choose image')}}</label>

                       @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$errors->first('image')}}</strong>
                        </span>
                       @endif
                  </div>

              </div>

          </div>
          </div>
					<div class="form-group">
						<label>Foto Portada</label>
            <label>Foto de perfil</label>
            <div class="form-group">
              <div class="col-sm-12">
                  <div class="custom-file">
                      <input type="file" id="image2" name="image2" class="custom-file-input{{$errors->has('image2') ? ' is-invalid':''}}">
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
						<label>description</label>
						<textarea class="form-control" id="content" name="content" required></textarea>
					</div>
										
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-info" >
				</div>
			</form>
		</div>
	</div>
</div>
    
    
    </section>
  </body>
</html>

@endsection