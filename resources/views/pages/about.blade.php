@extends('layouts.app')

@section('title', 'Conócenos | morvedreweb')
@section('description', 'morvedreweb es un estudio de diseño y desarrollo web con sede en Sagunto. Conoce al equipo.')
@section('hero_class', 'hero-small')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/conocenos.css') }}">
@endpush

@section('hero')
  <div class="wrap about-hero">
    <h1>Un equipo pequeño, un trato directo.</h1>
    <p>morvedreweb es un estudio de diseño y desarrollo web con sede en Sagunto. Creamos y mantenemos sitios web para negocios, con un único interlocutor y sin intermediarios.</p>
  </div>
@endsection

@section('content')
  <section class="team-sec">
    <div class="wrap">
      <h2>Equipo</h2>
      <div class="team">
        <article class="member">
          <div class="face" style="--c:var(--orange)">RB</div>
          <h3>Rayyane Boufoullous Pazos</h3>
          <p class="role">Dirección de proyectos y desarrollo</p>
        </article>
        <article class="member">
          <div class="face" style="--c:var(--green)">MG</div>
          <h3>Miguel Grau Fernández</h3>
          <p class="role">Diseño y desarrollo web</p>
        </article>
        <article class="member">
          <div class="face" style="--c:var(--green-soft)">DG</div>
          <h3>Daniel Gómez Lozano</h3>
          <p class="role">Atención al cliente y gestión comercial</p>
        </article>
      </div>
    </div>
  </section>

  <section class="values">
    <div class="wrap values-grid">
      <div>
        <h3>Comunicación clara</h3>
        <p>Presupuestos cerrados y explicaciones sin tecnicismos desde el primer contacto.</p>
      </div>
      <div>
        <h3>Respuesta ágil</h3>
        <p>Atendemos las solicitudes de cambio en un plazo de 24 a 48 horas laborables.</p>
      </div>
      <div>
        <h3>Presencial o en remoto</h3>
        <p>Si tu negocio está cerca, te visitamos. Si no, trabajamos por videollamada.</p>
      </div>
    </div>
  </section>

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
