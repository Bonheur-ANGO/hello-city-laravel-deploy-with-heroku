@extends('base')

@section('title', 'About US | ' . config('app.name'))

@section('content')

<img src="/img/PhotoGrid_1561556580639.jpg" alt="ma photo">

<p>Built with &hearts; by Bonheur ANGO</p>
<p> <a href="{{ route('home')  }}">Revenir à la page d'accueil</a> </p>

@endsection