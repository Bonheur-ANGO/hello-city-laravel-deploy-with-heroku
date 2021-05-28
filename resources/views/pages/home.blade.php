@extends('layouts.base', ['title' => config('app.name') ])


@section('content')

<img class="rounded shadow-md h-32 mt-12"  src="{{ asset('/img/TEST.png') }}" alt="test">

<h1 class="text-indigo-600 text-3xl sm:text-5xl font-semi-bold mt-5">Hello from Quebec</h1>

<p class="text-lg text-gray-800">It's currently {{date('h:i A') }} </p>

@endsection