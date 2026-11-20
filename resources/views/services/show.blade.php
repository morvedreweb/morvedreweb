@extends('layouts.app')

@section('title', $service['nombre'] . ' en Sagunto | morvedreweb')
@section('description', $service['resumen'])
@section('hero_class', 'hero-small')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/conocenos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/legal.css') }}">
@endpush

@section('hero')
  <div class="wrap about-hero">
    <h1>{{ $service['nombre'] }}</h1>
    <p>{{ $service['resumen'] }}</p>
  </div>
@endsection

@section('content')
  <section class="legal">
    <div class="wrap">
      <article class="legal-text">
        @foreach ($service['contenido'] ?? [] as $parrafo)
          <p>{{ $parrafo }}</p>
        @endforeach

        <h2>Qué incluye</h2>
        <ul>
          @foreach ($service['incluye'] as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>

        @if ($otros->isNotEmpty())
          <h2>Otros servicios</h2>
          <ul>
            @foreach ($otros as $otro)
              <li><a href="{{ route('services.show', $otro['slug']) }}">{{ $otro['nombre'] }}</a></li>
            @endforeach
          </ul>
        @endif
      </article>
    </div>
  </section>

  <x-cta titulo="¿Lo vemos para tu negocio?" texto="Cuéntanos qué necesitas y te preparamos una maqueta gratis, sin compromiso.">
    <a class="btn btn-dark btn-xl" href="{{ route('home') }}#solicitar">Solicitar maqueta de mi web</a>
    <a class="btn btn-light btn-xl js-wa" href="https://wa.me/34691200175">
      <x-icon-whatsapp />
      Escríbenos por WhatsApp
    </a>
  </x-cta>
@endsection
