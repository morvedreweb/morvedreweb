@extends('layouts.app')

@section('hero_class', 'hero-legal')
@section('main_class', 'legal')

@push('meta')
  <meta name="robots" content="noindex, follow">
@endpush

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/legal.css') }}">
@endpush

@section('hero')
  <div class="wrap legal-hero">
    <h1>@yield('legal_title')</h1>
    <p>@yield('legal_intro')</p>
  </div>
@endsection

@section('content')
  <div class="wrap legal-grid">
    <aside class="legal-nav" aria-label="Textos legales">
      @foreach (['legal.aviso' => 'Aviso legal', 'legal.privacidad' => 'Privacidad', 'legal.cookies' => 'Cookies'] as $ruta => $texto)
        <a href="{{ route($ruta) }}" @if (request()->routeIs($ruta)) aria-current="page" @endif>{{ $texto }}</a>
      @endforeach
      <p class="updated">Última actualización: noviembre de 2026</p>
    </aside>
    <article class="legal-text">
      @yield('legal_content')
    </article>
  </div>
@endsection
