@extends('layout/app')

@extends('layout/navigations')

@section('title', 'about')

@section('content')

<div id="coming-soon">
  <div class="container text-center mb-5 content">
    <img src="{{ ('img/planet.png') }}" alt="" data-aos="zoom-in">
    <h1 class="text-uppercase" data-aos="fade-up">portfolio</h1>
    <hr>
    <h3 data-aos="fade-up">Coming Soon</h3>
  </div>
</div>

@endsection