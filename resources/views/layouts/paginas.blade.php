@extends("layouts.app")

@section('content')
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta Tags -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://blogzine.webestica.com/assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="img/Index_files/css2" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="img/Index_files/all.min.css">
	<link rel="stylesheet" type="text/css" href="img/Index_files/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="img/Index_files/tiny-slider.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="img/Index_files/style.css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="" src="img/Index_files/js"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-XZ4W34ZJ0L');
	</script>

</head>
<body>
    <main class="">
        @yield('pagina')
    </main>
</body>
@endsection