@extends("layouts.app")

@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%7CVarela+Round%22%3E">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css%22%3E">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons%22%3E">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
<link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
<link rel="stylesheet" href="img/Index_files/style.css">
    <div id="app">
        <main class="">
            @yield('content_crud')
        </main>
    </div>
@endsection