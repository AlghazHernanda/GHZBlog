@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}

@section('container')

    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3> <!-- sama kyk php echo -->
    <p>{{ $email }} </p>
    <img src="img/{{ $image }}" alt="{{ $email }}" width="200" class="img-thumbnail rounded-circle">
    
@endsection


