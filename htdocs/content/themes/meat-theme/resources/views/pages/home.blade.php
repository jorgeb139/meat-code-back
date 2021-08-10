@extends('layouts.default')
@section('content')

@include('components.hero-slider', [
  'items' => $banner,
])

<div class="shape-background-right"></div>

@include('components.color-icons', [
  $proposito
])

@include('components.box-icons', [
  $pilares
])

<div class="shape-background-left"></div>

@include('components.hero-tabs', [
  'items' => $hero_tab,
])

@include('components.featured-slider', [
  $destacado
])

@include('components.logos-slider', [
  $alianzas
])

@endsection