@extends('layouts.app')

@section('title', 'Servicios | morvedreweb')
@section('description', 'Diseño web, SEO y ficha de Google, Google Ads, reservas online, pagos y mantenimiento para negocios.')
@section('hero_class', 'hero-small')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/conocenos.css') }}">
@endpush

@section('hero')
  <div class="wrap about-hero">
    <h1>Todo lo que tu web necesita.</h1>
    <p>La diseñamos, la ponemos en Google y la cuidamos cada mes. Elige lo que necesitas o déjanos aconsejarte.</p>
  </div>
@endsection

@section('content')
  <section class="pricing">
    <div class="wrap">
      <div class="pricing-head">
        <h2>Servicios</h2>
        <p>Los combinamos según tu negocio. Los precios están en los planes de la portada.</p>
      </div>

      <div class="plans">
        @forelse ($services as $service)
          <x-service-card :service="$service" />
        @empty
          <p>Estamos actualizando nuestros servicios.</p>
        @endforelse
      </div>

      <p class="plans-hint">Desliza para ver todos los servicios</p>
    </div>
  </section>

  <x-cta titulo="¿No sabes cuál necesitas?" texto="Cuéntanos tu negocio y te decimos qué te conviene. Sin compromiso.">
    <a class="btn btn-dark btn-xl" href="{{ route('home') }}#solicitar">Solicitar maqueta de mi web</a>
    <a class="btn btn-light btn-xl js-wa" href="https://wa.me/34691200175">
      <x-icon-whatsapp />
      Escríbenos por WhatsApp
    </a>
  </x-cta>
@endsection
