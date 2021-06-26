@extends("layouts.paginas")

@section("pagina")

@foreach ($foro as $foros)


<p>{{$foros->title}}</p>


@endforeach



@endsection