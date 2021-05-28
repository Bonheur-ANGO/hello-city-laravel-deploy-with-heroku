@extends('base')

@section('title', config('app.name'))

@section('content')

<img src="/img/TEST.png" alt="test">

<h1>Hello from Quebec</h1>

<p>It's currently {{date('h:i A') }} </p>

@endsection