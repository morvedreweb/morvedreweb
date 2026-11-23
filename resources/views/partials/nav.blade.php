<nav class="topbar wrap" aria-label="Principal">
  <x-logo />
  <div class="links" id="links">
    <a href="{{ route('home') }}#proceso">Cómo trabajamos</a>
    <a href="{{ route('home') }}#precios">Precios</a>
    <a href="{{ route('services.index') }}" @if (request()->routeIs('services.*')) aria-current="page" @endif>Servicios</a>
    <a href="{{ route('about') }}" @if (request()->routeIs('about')) aria-current="page" @endif>Conócenos</a>
  </div>
  <a href="{{ route('home') }}#solicitar" @class(['btn btn-dark btn-sm nav-cta', 'js-open-form' => request()->routeIs('home')])>Solicitar maqueta</a>
  <button class="burger" aria-expanded="false" aria-controls="links" aria-label="Abrir menú"><span></span><span></span></button>
</nav>
