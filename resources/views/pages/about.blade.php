@extends('layouts.app')

@section('title', 'Conócenos | morvedreweb')
@section('description', 'morvedreweb es un estudio de diseño y desarrollo web con sede en Sagunto. Conoce al equipo.')
@section('hero_class', 'hero-small')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/conocenos.css') }}">
@endpush

@section('hero')
  {{-- pega el <div class="wrap about-hero"> ... </div> --}}
@endsection

@section('content')
  {{-- pega <section class="team-sec"> y <section class="values"> --}}

  <x-cta titulo="¿Hablamos de tu proyecto?" texto="Cuéntanos qué necesitas y te presentaremos una propuesta sin compromiso.">
    <a class="btn btn-dark btn-xl js-wa" href="https://wa.me/34691200175">
      <x-icon-whatsapp />
      Escríbenos por WhatsApp
    </a>
    <a class="btn btn-light btn-xl" href="tel:+34691200175">Llamar al 691 20 01 75</a>
    <x-slot:pie>
      O escríbenos a <a href="mailto:morvedreweb@gmail.com">morvedreweb@gmail.com</a>
    </x-slot:pie>
  </x-cta>
@endsection
