@props(['titulo', 'texto'])

<section class="cta" id="contacto">
  <div class="wrap">
    <h2>{{ $titulo }}</h2>
    <p>{{ $texto }}</p>
    <div class="cta-actions">
      {{ $slot }}
    </div>
    @isset($pie)
      <p class="cta-mail">{{ $pie }}</p>
    @endisset
  </div>
</section>
