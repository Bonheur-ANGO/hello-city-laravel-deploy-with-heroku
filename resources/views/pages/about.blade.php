@extends('layouts.base', ['title' => 'About Us | ' . config('app.name')])


@section('content')

<img class="rounded-full shadow-md h-32 my-12" style="height: 200px;" src="{{ asset('img/PhotoGrid_1561556580639.jpg') }}" alt="ma photo">

<h2 class="mb-5 text-gray-700">
    Built with <span class="text-pink-500">&hearts;</span> by Bonheur ANGO
</h2>
<p>
    <a href="{{ route('home')  }}" class="text-indigo-500 hover:text-indigo-600">Revenir à la page d'accueil</a>
</p>

@endsection